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
                <h1>Work Samples: {{$sample->title}} </h1>
                <h2>{{$sample->blurb}}</h2>
                <p>{{$sample->description}}</p>
                <?php
                    if(isset($sample->picture))
                    {
                        echo Html::image($sample->picture);
                    }
                ?>

                <p>{{$sample->experience}}</p>
                <p>{{$sample->reflection}}</p>



            </div>
        </div>


    </div>
@endsection
