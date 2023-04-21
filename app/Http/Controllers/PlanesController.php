<?php

namespace App\Http\Controllers;

use App\Models\planes;
use Illuminate\Http\Request;

class PlanesController extends Controller
{
    //

    public function getList(){
        $datas = planes::all();
        return view('admin.layout.show',compact('datas'));
    }
    public function addList(){

        return view('admin.layout.add');
    }
}
