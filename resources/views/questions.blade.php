@extends('layouts.app')

@section('content')
    <div id="site_content">
        <nav>
            <div id="menubar">
                <ul id="nav">
                    <li ><a href="/">Home</a></li>
                    <li ><a href="/resume">Resumé</a></li>
                    <li><a href="/skills">Skills Inventory</a></li>
                    <li><a href="/work">Work Samples</a></li>
                    <li><a href="/awards">Awards & Certificates</a></li>
                    <li class="current"><a href="/questions">Questions</a></li>
                </ul>
            </div>
        </nav>
    </div>
@endsection
