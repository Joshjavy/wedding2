<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class AdminController extends Controller {
    
    public function index() {
        $registros=Registro::all();
        return view('admin.index')->with(['registros'=>$registros]);
    }
}
