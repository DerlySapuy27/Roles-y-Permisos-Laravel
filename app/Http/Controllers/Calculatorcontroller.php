<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculatorcontroller extends Controller
{
    public function index(){
        $data = ['title'=>'Calculadora para calcular'];
        return view('calculadora.index',$data);
    }
    public function resultado(Request $request){
        $n1 = $request->input('num1');
        $n2 = $request->input('num2');
        $op = $request->input('op');
        if($op=='+'){ $res =  $n1 + $n2;}
        elseif($op=='-'){ $res =  $n1 - $n2;}
        elseif($op=='x'){ $res =  $n1 * $n2;}
        elseif($op=='/'){ $res =  $n1 / $n2;}
       
        $data = ['title'=>'Calculadora' , 'titlee'=>'Resultado Operación','resultado'=>$res ];
        return view('calculadora.resultado',$data);
    }
}
 