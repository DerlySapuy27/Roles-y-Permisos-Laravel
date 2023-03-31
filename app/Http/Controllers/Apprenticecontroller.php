<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apprentice;
use Validator;

class ApprenticeController extends Controller
{
    public function index(){
        $apprentices = Apprentice::get();
        $data=['title'=>'Aprendices','apprentices'=>$apprentices];
        return view('aprendices.index',$data);
    }

    public function getaprendicesadd(){
        $data=['title'=>'Agregar Aprendiz'];
        return view('aprendices.add',$data);
    }
    public function postaprendicesadd(Request $request){


        $rules=[
            'document_number'=>'required',
            'name'=>'required',
            'city'=>'required',
            'email'=>'required',
            'telefono'=>'required'
        ];
        $message=[
            'document_number.required'=>'Debe digitar el numero de documento',
            'document_number.integer'=>'El numero de documento no puede tener letras o simbolos',
            'document_number.min'=>'El numero de documento puede tener minimo 6 numeros',
            'document_number.max'=>'El numero de documento puede tener maximo 10 numeros',
            'name.required'=>'Debes ingresar el nombre',
            'name.min'=>'El nompre puede tener minimo 7 caracteres',
            'name.alpha'=>'El nombre no puede tener numeros',
            'city.required'=>'Debes ingresar la ciudad',
            'city.min'=>'La ciudad puede terner como mínimo 3 caracteres',
            'email.required'=>'Debes ingresar el correo',
            'email.email'=>'El correo debe contener @example.com',
            'telefono.required'=>'Debe ingresar el telefono de contacto',
            'telphone.integer'=>'El numero de telfono no puede tener letras o simbolos',
            'telefono.size'=>'El telefono debe tener una longitud de 10 numeros',
        ];
        $validator= Validator::make($request->all(),$rules,$message);
        if($validator->fails()):
            return back()->withInput()->withErrors($validator)->with('message_error','Se ha prodcido un error.');

        else:
            
            $a = new Apprentice;
            $a->document_number = $request->input('document_number');
            $a->name = $request->input('name');
            $a->city = $request->input('city');
            $a->email = $request->input('email');
            $a->telefono = $request->input('telefono');
           
            if($a->save()){
                $apprentices = Apprentice::get();
                $data=['title'=>'Aprendices','apprentices'=>$apprentices];
                return view('aprendices.index',$data);
            }
        endif;

        
    }
    public function getaprendicesedit($id){
        $a = Apprentice::findOrFail($id);
        $data=['title'=>'Modificar','apprentice'=>$a];
        return view('aprendices.edit',$data);
    }
    public function postaprendicesedit(Request $request , $id){
        $a = Apprentice::findOrFail($id);
        $a->document_number = $request->input('document_number');
        $a->name = $request->input('name');
        $a->city = $request->input('city');
        $a->email = $request->input('email');
        $a->telefono = $request->input('telefono');
        if($a->save()){
        $apprentices = Apprentice::get();
        $data=['title'=>'Aprendices','apprentices'=>$apprentices];
        return view('aprendices.index',$data);
        }
    }
    public function getaprendicesdelete($id){
        $a = Apprentice::findOrFail($id);
        $a->delete();
        $apprentices = Apprentice::get();
        $data=['title'=>'Aprendices','apprentices'=>$apprentices];
        return view('aprendices.index',$data);
    }
}
