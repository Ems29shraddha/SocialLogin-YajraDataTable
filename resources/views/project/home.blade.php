@extends('layouts.master3')
@section('content')


<!-- Banner Slider Six -->
<section class="banner-section-six">
    <div class="pattern-layer" style="background-image:url(project/images2/main-slider/pattern-10.png)"></div>
    <div class="single-item-carousel owl-carousel owl-theme">

        <!-- Slide -->
        <div class="slide" style="background-image:url(project/images2/main-slider/image-4.jpg)">
            <div class="auto-container">
                <div class="content-boxed">
                    <div class="inner-column">
                        <div class="title">Peace of Mind Guaranteed</div>
                        <h1>Your Future Beguns Our <br> best <span>University</span></h1>
                        <a class="theme-btn btn-style-eight" href="{{route('project.reg')}}"><span class="txt">Apply Today</span></a>
                        <a class="theme-btn btn-style-thirteen" href="{{route('project.reg')}}"><span class="txt">View All Courses</span></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Slide -->
        <div class="slide" style="background-image:url(project/images2/main-slider/image-5.jpg)">
            <div class="auto-container">
                <div class="content-boxed">
                    <div class="inner-column">
                        <div class="title">Peace of Mind Guaranteed</div>
                        <h1>Your Future Beguns Our <br> best <span>University</span></h1>
                        <a class="theme-btn btn-style-eight" href="{{route('project.reg')}}"><span class="txt">Apply Today</span></a>
        <a class="theme-btn btn-style-thirteen" href="{{route('project.reg')}}"><span class="txt">View All Courses</span></a>
    </div>
    </div>
    </div>
    </div>

    <!-- Slide -->
    <div class="slide" style="background-image:url(images2/main-slider/image-4.jpg)">
        <div class="auto-container">
            <div class="content-boxed">
                <div class="inner-column">
                    <div class="title">Peace of Mind Guaranteed</div>
                    <h1>Your Future Beguns Our <br> best <span>University</span></h1>
                    <a class="theme-btn btn-style-eight" href="contact.html"><span class="txt">Apply Today</span></a>
                    <a class="theme-btn btn-style-thirteen" href="contact.html"><span class="txt">View All Courses</span></a>
                </div>
            </div>
        </div>
    </div> --}}

    </div>
</section>
<!-- End Banner Slider Three -->


@endsection
