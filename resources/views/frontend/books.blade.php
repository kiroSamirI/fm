@extends('layouts.frontend')

@section('content')
    <div class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 id="fl">Book Store</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".first">Divinity </li>
                        <li data-filter=".second"> Faith </li>
                        <li data-filter=".third"> Social </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                    <div class="portfolio-wrap">
                        <img src="frontend/images/Divinity%20of%20christ.jpg" alt="Portfolio Image">
                        <figure>
                            <p> Divinity </p>
                            <a href="#"> Divinty of Christ </a>
                            <span>01-Jan-2045</span>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                    <div class="portfolio-wrap">
                        <img src="frontend/images/LIFEOFFAITH.jpg" alt="Portfolio Image">
                        <figure>
                            <p>Faity</p>
                            <a href="#">Life of faith</a>
                            <span>01-Jan-2045</span>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                    <div class="portfolio-wrap">
                        <img src="frontend/images/calm.jpg" alt="Portfolio Image">
                        <figure>
                            <p>Social</p>
                            <a href="#">Calmness</a>
                            <span>01-Jan-2045</span>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                    <div class="portfolio-wrap">
                        <img src="frontend/images/cotheology.jpg" alt="Portfolio Image">
                        <figure>
                            <p>Divinity</p>
                            <a href="#">Compartive Theology</a>
                            <span>01-Jan-2045</span>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                    <div class="portfolio-wrap">
                        <img src="frontend/images/spiritual.jpg" alt="Portfolio Image">
                        <figure>
                            <p>Faith</p>
                            <a href="#">Spiritual Warfares </a>
                            <span>01-Jan-2045</span>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                    <div class="portfolio-wrap">
                        <img src="frontend/images/Thespiritualman.jpg" alt="Portfolio Image">
                        <figure>
                            <p>Social</p>
                            <a href="#">The spiritual Man</a>
                            <span>01-Jan-2045</span>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 load-more">
                    <a class="btn" href="#">Load More</a>
                </div>
            </div>
        </div>
    </div>

@endsection