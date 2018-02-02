@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="container col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar hilo "{{ $thread->title }}"</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => route('thread.update',$thread->id) , 'method' => 'PUT']) !!}
                        {!! Field::text('title',$thread->title,['placeholder' => 'Introduce el título']) !!}
                        {!! Field::textarea('content',$thread->content,['placeholder' => 'Introduce el contenido']) !!}
                        {!! Form::submit('Editar el hilo', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection