<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Registro;
class RegistroController extends Controller
{
    public function index(){
        return view('home');
    }
    public function store(Request $request){
        
        // $this->validate($request,[
        //     'Firstname'=>'required|min:3|max:45',
        //     'Surname'=>'min:2|max:45',
        //     'phone'=>'required|min:10|max:20|unique:registros,Mobile',
        //     'allergies'=>'required|min:2|max:75',
        //     'rtransport'=>'required|min:2|max:20',
        //     'dance'=>'required|min:2|max:155',
        // ]);

        $validator = Validator::make($request->only('Firstname','Surname','phone','allergies','rtransport','dance'),
                            [
                                'Firstname'=>'required|min:2|max:45',
                                'Surname'=>'min:2|max:45',
                                'phone'=>'required|min:10|max:20',
                                'allergies'=>'required|min:2|max:75',
                                'rtransport'=>'required|min:2|max:20',
                                'dance'=>'required|min:2|max:155',
                            ]);
            
        if($validator->fails()){
            Alert::alert('error', 'Error registering, missing field!');
            return back();
        }
        $mobileexist=$this->buscarNumero($request->phone);
        if($mobileexist){
            Alert::alert('error', 'Error: phone number already in use, please try a different one!');
            return back();
        }
        
        try{
            Registro::create([
                'firstname'=>$request->Firstname,
                'Surname'=>$request->Surname,
                'Mobile'=>$request->phone,
                'allergies'=>$request->allergies,
                'transport'=>$request->rtransport,
                'song'=>$request->dance,
            ]);
            Alert::success('success', 'Registered successfully!');
            return back();
            // return redirect()->back()
            //     ->with('success', 'Registered successfully!');
        }catch(\Exception $e){
            Alert::alert('error', 'Registration filed!');
            return back();
            // return redirect()->back()
            // ->with('error', 'Registration filed!');
        }
        
    }

    private function buscarNumero($phone){
        $registro = Registro::where('Mobile',$phone)->first();
        return $registro;
    }
}
