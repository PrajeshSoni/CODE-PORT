@extends('layouts.layout')

@section('content')

<div class="container">

    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ __('You are logged in!') }}
    </div>
    <section class="w3l-content-6">
        <!-- /content-6-section -->
        <div class="content-6-mian py-5">
            <div class="container py-lg-5">

                <div class="row title-content">
                    <div class="col-lg-4 title-left">
                        <h3 class="hny-title">What Types of error occurs ?</h3>
                    </div>
                    <div class="col-lg-8 title-info">
                        <p>error resulting from bad code in some program involved in producing the erroneous result.
                            Types of errors are like run-time error, semantic error. an error in logic or arithmetic
                            that must be detected at run time.
                            When developing programs there are three types of error that can occur: syntax errors. logic
                            errors. runtime errors.</p>
                    </div>
                </div>

                <div class="content-info-in row mt-md-5 mt-4">
                    <div class="col-lg-3 col-md-6 imghrs">
                        <a class="imghr" href="#"><img src="{{asset('img/1.jpg')}}" class="img-fluid" style="height:320px ;" alt="">
                            <div class="details"><span class="title">Web Development</span><span class="info">Add
                                    Description</span></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 imghrs">
                        <a class="imghr" href="#"><img src="{{asset('img/2.jpg')}}" class="img-fluid" style="height: 320px;;" alt="">
                            <div class="details"><span class="title">Graphic Design</span><span class="info">Add
                                    Description</span></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 imghrs">
                        <a class="imghr" href="#"><img src="{{asset('img/lang.jpg')}}" class="img-fluid" style="height:320px;" alt="">
                            <div class="details"><span class="title">Full-Stack Developement</span><span class="info">Add
                                    Description</span></div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 imghrs">
                        <a class="imghr" href="#"><img src="{{asset('img/4.jpg')}}" class="img-fluid" style="height:320px ;" alt="">
                            <div class="details"><span class="title"> Computer Programming</span><span class="info">Add
                                    Description</span></div>
                        </a>
                    </div>
                </div>



            </div>

        </div>
</div>
</section>
<!-- //content-6-section -->
<section class="w3l-features-1">
    <!-- /features-1-->
    <div class="features-1-mian py-5">
        <div class="container py-lg-5">
            <!-- /title-->
            <div class="row title-content">
                <div class="col-lg-4 title-left">
                    <h3 class="hny-title">How to solve NullPointerException in java ?</h3>
                </div>
                <div class="col-lg-8 title-info">
                    <p>A NullPointerException is thrown when a Java program attempts to process an object which
                        contains a null value.

                        public class Example {
                        public void doSomething() {
                        Integer number = null;

                        if (number > 0) {
                        System.out.println("Positive number");
                        }
                        }
                        }

                        In the example above, the number (Integer) object is null, so performing a simple evaluation
                        will throw a
                        NullPointerException.
                        .</p>
                </div>
            </div>
            <!-- //title-->
            <!-- /grids-->
            <div class="row grids-innf my-lg-5">
                <div class="features-1-info col-lg-3 col-md-6">
                    <div class="features-1-info-icon">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="features-1-info-info">
                        <h6><a href="#" style="text-decoration: none;">Experienced Faculty</a></h6>
                        <p>We don't hire teachers without 10 years of professional experience.</p>
                    </div>

                </div>
                <div class="features-1-info col-lg-3 col-md-6">
                    <div class="features-1-info-icon">
                        <span class="fa fa-book"></span>
                    </div>
                    <div class="features-1-info-info">
                        <h6><a href="#" style="text-decoration: none;">Modern Library</a></h6>
                        <p>To create comfortable areas for study we have modern library.</p>
                    </div>

                </div>
                <div class="features-1-info col-lg-3 col-md-6">
                    <div class="features-1-info-icon">
                        <span class="fa fa-thumbs-o-up"></span>
                    </div>
                    <div class="features-1-info-info">
                        <h6><a href="#" style="text-decoration: none;">100% Scholarship</a></h6>
                        <p>we provide national Scholarship and Post Matric Scholarship For Minority Students</p>
                    </div>

                </div>
                <div class="features-1-info col-lg-3 col-md-6">
                    <div class="features-1-info-icon">
                        <span class="fa fa-trophy"></span>
                    </div>
                    <div class="features-1-info-info">
                        <h6><a href="#" style="text-decoration: none;">Our Achievements</a></h6>
                        <p>Our students' careers reflect our achievement</p>
                    </div>
                </div>
            </div>
            <!-- //grids-->
            <!-- /counter-->
            <div class="counter-main-sec">
                <div class="counter-grids-info">
                    <div class="counter-gd">
                        <h6>40M</h6>
                        <h4>Students</h4>
                    </div>
                    <div class="counter-gd">
                        <h6>60k</h6>
                        <h4>Errors</h4>
                    </div>
                    <div class="counter-gd">
                        <h6>90k</h6>
                        <h4>Questions</h4>
                    </div>
                    <div class="counter-gd">
                        <h6>40k</h6>
                        <h4>Languages</h4>
                    </div>
                </div>
            </div>
            <!-- //counter-->
        </div>
    </div>
    </div>
</section>


<!-- //apply-6-->

<section class="w3l-customers-6">
    <!--/customers -->
    <div class="customers-6-infhny py-5">
        <div class="container py-lg-5">

            <div class="row title-content mb-5">
                <div class="col-lg-4 title-left">
                    <h3 class="hny-title">Happy Students</h3>
                </div>
                <div class="col-lg-8 title-info">
                    <p>The smiling and happy faces of our students say it all! We are proud to have had a hand in
                        building these student's
                        future.</p>
                </div>
            </div>
            <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
                Carousel indicators
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                Wrapper for carousel items
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="img-box"><img src="assets/images/c1.jpg" alt=""></div>
                        <p class="testimonial"> To be successful as an SEO analyst, you should be passionate about
                            technology and digital communications. Oustanding SEO
                            analysts are consistently improving their knowledge and building networks with others in
                            the field. SEO Analyst Monitoring website traffic, search results, and developing
                            strategies.
                            Generating content ideas and delegating these to the team.</p>
                        <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#" style="text-decoration: none;">Company Exp.</a></p>
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star-o"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="assets/images/c2.jpg" alt=""></div>
                        <p class="testimonial">Media analysts track the media coverage of products and services and
                            report to media buyers and corporate executives.
                            They are responsible for researching and analyzing relevant prints, online, broadcast,
                            and social media coverage of
                            clients and competitors in the same fields and industries. They also collect public
                            information, prepare reports, and
                            find data relevant to the organization where they work. </p>
                        <p class="overview"><b>Paula Wilson</b>Media Analyst at <a style="text-decoration: none;" href="#">Company Exp.</a></p>
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star-o"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="assets/images/c3.jpg" alt=""></div>
                        <p class="testimonial">I am a positive, enthusiastic and competent Web Developer who, over
                            the years, has built up a diverse range of skills, qualities and attributes that
                            guarantee I will perform highly in this role. I Writing and reviewing code for sites,
                            typically HTML, XML, or JavaScript. Integrating multimedia content onto a site.
                            Testing web applications. Troubleshooting problems with performance or user experience
                        </p>
                        <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#" style="text-decoration: none;">Company Exp.</a></p>
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star"></span></li>
                                <li class="list-inline-item"><span class="fa fa-star-half-o"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                Carousel controls
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div> -->
        </div>
        <!--//customers -->
    </div>
</section>

@endsection