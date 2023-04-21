<?php

namespace App\Http\Controllers;

use App\Models\planes;
use Illuminate\Http\Request;
use Validator;
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
    public function postList(Request $request){
        $request->validate([
            'registration_number'=>'required',
            'serial_number'=>'required',
        ]);
           planes::create([
              'registration_number' => $request->registration_number,
              'serial_number' => $request->serial_number,
           ]);
           return redirect()->route('admin.show')->with('msg','Thêm người dùng thành công');
    }

    public function getEditList($id){
        if(!empty($id)){
            $data=planes::find($id);
            if(!empty($data)){
                return view('admin.layout.edit',compact('data'  ));
            }
            else{
                return redirect()->route('admin.show')->with('msg','Không tồn tại!');

            }
        }
        else{
            return redirect()->route('admin.show')->with('msg','Không tồn tại!');
        }

    }

    public function updateList(Request $request,$id){
        $request->validate([
           'registration_number' =>'required|min:5',
           'serial_number' =>'required',
        ]);
//        dd($request->request->get('registration_number'));
        planes::where('id', $id)->update(['registration_number' => $request->request->get('registration_number'), 'serial_number' =>  $request->request->get('serial_number')]);

        return redirect()->route('admin.show')->with('msg','Update  thành công');
    }
}
