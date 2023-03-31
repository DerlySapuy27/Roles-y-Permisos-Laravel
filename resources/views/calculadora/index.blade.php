@extends('layouts.adminlite')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body" id="cb">
                {!! Form::open(['url' => route('resultado')]) !!}
                <div class="mb-3">
                    <label for="num1" class="form-label" id="num1">NUM-1</label>
                    {!! Form::number("num1", null,['class' => 'form-control'])!!}
               </div>
               <div class="mb-3">
                    <label for="num2" class="form-label" id="num2">NUM-2</label>
                    {!! Form::number("num2", null,['class' => 'form-control'])!!}
               </div>
               {!! Form::submit('+',['class' => 'btn btn-primary' , 'name' => 'op' ])!!}
               {!! Form::submit('-',['class' => 'btn btn-primary' , 'name' => 'op' ])!!}
               {!! Form::submit('x',['class' => 'btn btn-primary' , 'name' => 'op' ])!!}
               {!! Form::submit('/',['class' => 'btn btn-primary' , 'name' => 'op' ])!!}
                    
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
