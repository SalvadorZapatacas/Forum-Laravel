@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear un hilo</div>
                <div class="panel-body">
                    {!! Form::open(['url' => route('thread.store') , 'method' => 'POST']) !!}
                    {!! Field::text('title',['placeholder' => 'Introduce el título']) !!}
                    {!! Field::textarea('content',['placeholder' => 'Introduce el contenido']) !!}
                    {!! Form::submit('Crear hilo', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection