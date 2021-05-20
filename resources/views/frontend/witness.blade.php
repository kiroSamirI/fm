@extends('layouts.frontend')

@section('content')
<div class="testimonial">
    <div class="overlay"></div>
        <div class="container">
  <!-- Carousel Start -->
    <div id="test" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#test" data-slide-to="0" class="active"></li>
            <li data-target="#test" data-slide-to="1"></li>
            <li data-target="#test" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
    
                <div class="carousel-caption">
                    <p id="para" class="animated fadeInRight">lorem ipusem this dumb text is not real text and author should add his own text</p>
                    <h1 id="hed" class="animated fadeInLeft"> Fatther Matthias </h1>
                
                </div>
            </div>

            <div class="carousel-item">
                
                <div class="carousel-caption">
                
                    <p id="para" class="animated fadeInRight">lorem ipusem this dumb text is not real text and author should add his own text </p>
                    <h1 id="hed" class="animated fadeInLeft"> Fatther Matthias </h1>
                
                </div>
            </div>

            <div class="carousel-item">
               
                <div class="carousel-caption">
                    
                    <p id="para" class="animated fadeInRight">lorem ipusem this dumb text is not real text and author should add his own text </p>
                    <h1 id="hed" class="animated fadeInLeft"> Fatther Matthias </h1>
                   
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#test" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">prev</span>
        </a>
        <a class="carousel-control-next" href="#test" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">next </span>
        </a>
    </div>
        </div>
    </div>
    <!-- Single Page End -->

<!-- Contact End -->

@endsection