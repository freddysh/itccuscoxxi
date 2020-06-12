@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p><b class="text-primary">Ruc:</b> {{ $empresa->ruc }}</p>
                    <p><b class="text-primary">Razon social:</b> {{ $empresa->razon_social }}</p>
                    <p><b class="text-primary">Nombre comercial:</b> {{ $empresa->nombre_comercial }}</p>
                    <p><b class="text-primary">Dirección:</b> {{ $empresa->direccion }}</p>
                </div>

                <div class="card-body">
                    <h2>ITC obtenido es : {{ number_format($itc,2)  }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
