@extends('layouts.layout')

@section('content')


<section class="w3l-wecome-content-6">
    <!-- /content-6-section -->
    <div class="ab-content-6-mian py-5">
        <div class="container py-lg-5">
            <div class="welcome-grids row">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <h6>About Us</h6>
                    <h3 class="hny-title">
                        Improving Lives Through Learning
                    </h3>
                    <p class="my-4">Coding can help you improve your logical thinking skills by allowing you to see problems from a new perspective. Complex
                        coding projects are made up of smaller tasks and by breaking down the problem and adopting a methodological way of
                        thinking, you can tackle any challenge.</p>
                    <p class="mb-4">Coding exercises can activate the brain's learning centres. It can improve our memory, problem-solving skills and
                        cognitive skills as well Coding can help you understand technology. It can enhance problem-solving skills . Coding can be applied to data
                        visualisation</p>
                
                </div>
                <div class="col-lg-6 welcome-image">
                    <img src="{{asset('img/ab.jpg')}}" class="img-fluid" alt="" />
                </div>

            </div>

        </div>
    </div>
</section>
<!-- //content-6-section -->


<section class="w3l-specification-6">
    <!-- /specification-6-->
    <div class="specification-content py-5">
        <div class="container py-lg-5">
            <div class="mission-grids-info row">
                <div class="mission-gd-left col-lg-7">
                    <div class="grids-inn-ab">
                        <div class="sub-mission one-top">
                            <div class="mission-sec-gd">
                                <img src="{{asset('img/p1.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="mission-sec-gd">
                                <img src="{{asset('img/ab.jpg')}}" alt="" class="img-fluid" />
                            </div>

                        </div>
                        <div class="sub-mission">
                            <div class="mission-sec-gd">
                                <img src="{{asset('img/p6.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="mission-sec-gd">
                                <img src="{{asset('img/p4.jpg')}}" alt="" class="img-fluid" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mission-gd-right col-lg-5 pl-lg-4">

                    <h3 class="hny-title">Our Mission</h3>
                    <p>Our mission to help people learn to code for free. We accomplish this by creating thousands of videos, articles, and
                        interactive coding lessons - all freely ..
                        Coding activities for young learners to learn to code in a fun way! </p>
                </div>
            </div>
        </div>
</section>
<!-- //specification-6-->

<section class="w3l-content-5">
    <!-- /content-6-section -->
    <div class="content-5-main">
        <div class="container">
            <div class="content-info-in row">
                <div class="content-gd col-lg-6">
                    <h3 class="hny-title two">

                        We work hard to prepare every student for their professional life</h3>
                </div>
                <div class="content-gd col-lg-6">
                    <p>In order to be great at coding, We need to have a certain level of proficiency in coding as well. We
                        encouraging our students to learn to code, We are basically helping them practice their math as well. The best part of
                        this is that they may not even realize that they are doing the math. </p>
                    <p>We Start with a basic course in a simple code like Scratch, and then move on to more advanced code courses in JavaScript,
                        and Java. Live tutoring sessions and games are a good way to begin your coding journey.</p>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- //content-6-section -->

@endsection