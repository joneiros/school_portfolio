@extends('layouts.app')

@section('content')
    <div id="site_content">
        <nav>
            <div id="menubar">
                <ul id="nav">
                    <li class="current"><a href="/">Home</a></li>
                    <li ><a href="/resume">Resumé</a></li>
                    <li><a href="/skills">Skills Inventory</a></li>
                    <li><a href="/work">Work Samples</a></li>
                    <!--<li><a href="/awards">Awards & Certificates</a></li>-->
                    <li><a href="/questions">Questions</a></li>
                </ul>
            </div>
        </nav>
        <div class="slideshow">
            <ul class="slideshow">

                <li class="show"><img width="940" height="300" {!! Html::image('images/reporting.png',"Work") !!}  /></li>
                <li ><img width="940" height="300" {!! Html::image('images/blasteroidsCover.jpg', "Play") !!} /></li>
            </ul>
        </div>

        <div class="sidebar_container">
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>April 19</h2>
                    <p>Finished the last classes of my diploma. Looking foward to some time to work on personal projects!</p>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Forecast</h2>
                    <h3>June 2017</h3>
                    <p>Receive my diploma. Officially Graduate!</p>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar_item">
                    <h3>June 2017</h3>
                    <p>Start work with IBM.</p>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Contact</h2>
                    <p>Phone: (902)488-5745</p>
                    <p>Email: <a href="mailto:jonagander@gmail.com">jonagander@gmail.com</a></p>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="content_item">
                <div class="content_imagetext">
                    <div class="content_image" id="me">
                        <img width="150px" height="150px" {!! Html::image('images/me.jpg') !!}/>
                    </div>
                    <h1>Programmer, Data Analyst, Enthusiast</h1>
                    <p>
                        I am a programmer living in Dartmouth, Nova Scotia. As of June 2017 I will have a diploma in IT - Database Application Development
                        from Nova Scotia Community College (NSCC) and will be starting my career working for IBM doing Java development. Welcome to my site!
                    </p>
                    <p>
                        Within programming my main areas of strength are C#, Java, and SQL. Check out the <a href="/skills">Skills Inventory</a> tab
                        for a more detailed list of my skills. Some of the more interesting projects I've done have been a modern rendition of Asteroids
                        using C#, a video-based implementation of OCR (optical character recognition) to allow text to be captured from youtube videos,
                        and a RESTful service hosted through Azure. For more about these projects and more, check out the <a href="/work">Work Samples</a> tab.
                    </p>
                    <p>
                        If you have any questions about me or the site, feel free to use the contact information found on this page.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
