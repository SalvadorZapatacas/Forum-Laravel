@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <section class="panel panel-info">
            <header class="panel-heading">
                <h2 class="text-center">Hilos</h2>
            </header>

            @if(count($threads))
                {{ $threads->links() }}
                <br>
                @auth
                    <a class="btn btn-success btn-xs" href="{{route('thread.create')}}">Crear un hilo</a>
                @endauth


                @foreach($threads as $thread)
                    <hr>
                    <section class="row panel-body">

                        <section class="col-md-6">
                            <h3> <a href="{{ route('thread.show' , $thread->id) }}"><i class=""> </i>{{ $thread->title }}</a></h3>
                        </section>
                        <section class="col-md-2">
                            <ul id="post-topic">
                                <li class="list-unstyled"> <b>Respuestas: {{ $thread->posts_count }} </b></li>
                            </ul>
                        </section>
                        <section class="col-md-4">
                            <h5> <i class=""> </i> {{ str_limit($thread->content , 100, '...') }} </h5> <hr>
                            <h6><i class="glyphicon glyphicon-user"></i> {{ $thread->user->name }} </h6> &nbsp;&nbsp;
                            <h6><i class="glyphicon glyphicon-calendar"></i> {{ $thread->created_at }} </h6>
                        </section>
                    </section>

                @endforeach
            @else
                <p class="text-center lead">No hay hilos, sorry</p>
            @endif


        </section>
    </div>
</div>



@endsection()