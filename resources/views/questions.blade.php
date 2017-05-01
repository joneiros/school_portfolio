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
                    <!--<li><a href="/awards">Awards & Certificates</a></li>-->
                    <li class="current"><a href="/questions">Questions</a></li>
                </ul>
            </div>
        </nav>

        <div class="j_main_container">
            <div class="j_main">
                <div class="j_tab_header">
                    <h1>Portfolio Questions</h1>
                    <h3>Where Am I Now?</h3>
                    <p>
                        I am on the cusp of graduating with honors from my IT diploma program at NSCC. I am currently gearing up
                        to begin my job at IBM in June, working as a Java developer.

                    </p>
                    <h3>Where Am I Going?</h3>
                    <p>
                        I am going to work with VR software, bio-integration software, and eventually with programmed-reality solutions.
                        I want to be able to code software to more clearly read the brain’s intentions and translate it into action.
                    </p>
                    <h3>How Do I Get There?</h3>
                    <p>
                        I continue my education during my first few years in the work force, while also researching companies that work in the fields
                        that I’m interested in. One of the things which I will study during that period will be calculus, because of its relevance to the
                        building of neural networks, and neural networks’ importance to the tech fields in which I’m interested.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
