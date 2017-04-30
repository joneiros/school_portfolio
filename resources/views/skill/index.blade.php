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
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                            @foreach($skills as $skill)
                                <p>{{$skill->name}}</p>
                                <p>{{$skill->description}}</p>
                                {!! Html::image($skill->picture) !!}

                            @endforeach
                </div>

            </div>
        </div>


    </div>
@endsection
