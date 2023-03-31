@extends('layouts.adminlite')


@section('content')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="home">Home</a></li>
    <li class="breadcrumb-item"><a href="aprendices">Aprendices</a></li>
    <li class="breadcrumb-item active">Agregar aprendiz</li>
</ol>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    {!!Form::open(['url' => route('aprendices.add')])!!}
                    
                    <div class="mb-3">
                        <label for="document_number" class="form-label">Numero Documento</label>
                        <input type="number" class="form-control" id="" name="document_number">
                        
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="" name="telefono">
                    </div>
                    <button type="submit" name="op" value="add" class="btn btn-primary">Agregar</button>
                    

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
