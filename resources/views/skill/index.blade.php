@extends('layouts.app')

@section('content')
    <div id="site_content">
        <nav>
            <div id="menubar">
                <ul id="nav">
                    <li ><a href="/">Home</a></li>
                    <li ><a href="/resume">Resumé</a></li>
                    <li class="current"><a href="/skills">Skills Inventory</a></li>
                    <li ><a href="/work">Work Samples</a></li>
                    <li><a href="/awards">Awards & Certificates</a></li>
                    <li><a href="/questions">Questions</a></li>
                </ul>
            </div>
        </nav>
        <div class="j_main_container">
            <div class="j_main">
                <h1> Skills </h1>
                            @foreach($skills as $skill)
                                <div class="panel panel-default">
                                    <a href="/skills/{{$skill->id}}">
                                        <div class="panel-heading">
                                            {!! Html::image($skill->picture) !!}
                                            {{$skill->name}}
                                        </div>
                                        <p>{{$skill->description}}</p>
                                    </a>

                                </div>
                            @endforeach


            </div>
        </div>


    </div>
@endsection
