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
        
        $validator = Validator::make($request->only('Firstname','Surname','phone','allergies','rtransport','dance'),
                            [
                                'Firstname'=>'required|min:2|max:45',
                                'phone'=>'required|min:10|max:20',
                                'allergies'=>'required|min:2|max:75',
                                'rtransport'=>'required|min:2|max:20',
                                'dance'=>'required|min:2|max:155',
                            ]);
            
        if($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=>'Error registering, missing field!',
                ],400);
            
        }
        $mobileexist=$this->buscarNumero($request->phone);
        if($mobileexist){
            
            return response()->json([
                'status'=> false,
                'message'=>'Phone number already in use, please try a different one!',
                ],400);
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

            return response()->json([
                'status'=> true,
                'message'=>'OK',
                ],200);

        }catch(\Exception $e){
            return response()->json([
                'status'=> false,
                'message'=>'Registration filed!',
                ],400);
            
        }
        
    }

    private function buscarNumero($phone){
        $registro = Registro::where('Mobile',$phone)->first();
        return $registro;
    }
}
