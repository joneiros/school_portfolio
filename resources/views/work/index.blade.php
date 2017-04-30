@extends('layouts.app')

@section('content')
    <div id="site_content">
        <nav>
            <div id="menubar">
                <ul id="nav">
                    <li ><a href="/">Home</a></li>
                    <li ><a href="/resume">Resumé</a></li>
                    <li ><a href="/skills">Skills Inventory</a></li>
                    <li class="current"><a href="/work">Work Samples</a></li>
                    <li><a href="/awards">Awards & Certificates</a></li>
                    <li><a href="/questions">Questions</a></li>
                </ul>
            </div>
        </nav>
        <div class="j_main_container">
            <div class="j_main">
                <h1> Work Samples </h1>



                @foreach($samples as $sample)
                    <div class="panel panel-default">
                        <a href="/resume">
                            <div class="panel-heading">
                                {{$sample->title}}
                            </div>
                            <p>{{$sample->blurb}}</p>
                            <p>Related Skill: {{$sample->skill->name}}</p>
                        </a>

                    </div>
                @endforeach


            </div>
        </div>


    </div>
@endsection
