@extends('layouts.app')

@section('content')


<section class="container">
    <section class="row clearfix">
        <section class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <section class="panel-title">
                                <time class="">
                                    Fecha creación: <b>{{ $thread->created_at }}</b>
                                </time>
                            </section>
                        </div>
                        <section class="row panel-body">
                            <section class="col-md-9">
                                <h2> <i class="fa fa-smile-o"></i>{{ $thread->title }}</h2>
                                <hr>
                                {{$thread->content}}
                            </section>

                            <section id="user-description" class="col-md-3 ">
                                <section class="well">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i>{{ $thread->user->name }}<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="fa fa-user"></i> See profile</a></li>

                                            <!--<li><a href="#"><i class="fa fa-cogs"></i> Manage User (for adminstrator)</a></li>-->
                                        </ul>
                                    </div>
                                    <figure>
                                        <img class="img-rounded img-responsive" src="http://www.webdesignforums.net/img/wdf_avatar.jpg" alt="{{ $thread->user->name }} avatar">
                                    </figure>
                                </section>
                            </section>

                        </section>
                        <div class="panel-footer">
                            <div class="row">

                                <section class="col-md-4">
                                    <i class="fa fa-mail-reply "></i><a href="#"> Reply </a> <!-- |
                                     <i class="fa fa-edit "></i><a href="#"> Edit Post </a> -->
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>

@foreach($thread->posts as $post)

    <section class="container col-md-offset-1">
        <section class="row clearfix">
            <section class="col-md-10 column">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <section class="panel-title">
                                    <time class="">
                                        Fecha de posteado: <b>{{ $post->created_at }}</b>
                                    </time>
                                </section>
                            </div>
                            <section class="row panel-body">
                                <section class="col-md-9">

                                    {{$post->content}}
                                </section>

                                <section id="user-description" class="col-md-3 ">
                                    <section class="well">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i>{{ $post->user->name }}<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-user"></i> See profile</a></li>

                                                <!--<li><a href="#"><i class="fa fa-cogs"></i> Manage User (for adminstrator)</a></li>-->
                                            </ul>
                                        </div>
                                        <figure>
                                            <img class="img-rounded img-responsive" src="https://picsum.photos/150/150/?random" alt="{{ $post->user->name }} avatar">
                                        </figure>
                                    </section>
                                </section>

                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>

@endforeach


@endsection