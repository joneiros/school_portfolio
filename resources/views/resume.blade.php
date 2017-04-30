@extends('layouts.app')

@section('content')
    <div id="site_content">
        <nav>
            <div id="menubar">
                <ul id="nav">
                    <li ><a href="/">Home</a></li>
                    <li class="current"><a href="/resume">Resumé</a></li>
                    <li><a href="/skills">Skills Inventory</a></li>
                    <li><a href="/work">Work Samples</a></li>
                    <li><a href="/awards">Awards & Certificates</a></li>
                    <li><a href="/questions">Questions</a></li>
                </ul>
            </div>
        </nav>

        <div class="j_main_container">
            <div class="j_main">
                <div class="j_tab_header">
                    <h2>Resume</h2>
                    <p>This is my resume as of February, 2017.</p>
                    {!! Html::image('images/resume1.JPG') !!}
                    {!! Html::image('images/resume2.JPG') !!}
                    <!-- TO DELETE AFTER PORTFOLIO ASSESSMENT -->
                    <h3>Reflection</h3>
                    <p>The form of this resume is partially inspired by my coursework in the COMM 1100 class.
                    This class was not only useful in teaching me proper resume formatting and content, but gave useful instruction
                        on what types of things employers might not necessarily care about at a professional level. I learned
                        that part of presenting yourself as a professional is knowing which presentation avenues to use for
                        which sides of yourself as an individual.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
