@extends('layouts.master')
@section('content')

<!-- Banner Section -->
<section class="banner-section">
    <div class="auto-container">
        <div class="pattern-layer-six" style="background-image: url(project/images/main-slider/pattern-4.png)"></div>
        <div class="pattern-layer-seven" style="background-image: urlproject/images/main-slider/pattern-5.png)"></div>
        <div class="pattern-layer-eight" style="background-image: url(project/images/main-slider/icon-2.png)"></div>
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="pattern-layer-one" style="background-image: url(project/images/main-slider/pattern-1.png)"></div>
                    <div class="pattern-layer-two" style="background-image: url(project/images/main-slider/pattern-2.png)"></div>
                    <div class="pattern-layer-three" style="background-image: url(project/images/main-slider/icon-1.png)"></div>
                    <div class="pattern-layer-four" style="background-image: url(project/images/main-slider/pattern-3.png)"></div>
                    <div class="pattern-layer-five" style="background-image: url(project/images/main-slider/icon-2.png)"></div>
                    <div class="image">
                        <img src="{{asset('project/images/main-slider/image-1.png')}}" alt="" />
                    </div>
                    <div class="image-two">
                        <img src="{{asset('project/images/main-slider/image-4.png')}}" alt="" />
                    </div>
                    <div class="image-content" style="background-image: url(project/images/main-slider/pattern-6.png)">
                        <p>87% of people <br> learning</p>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title">Learn the latest skills</div>
                    <h1>Build skills with <br> courses flexible online <br> courses</h1>
                    <div class="btns-box">
                        <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Join For free</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Banner Section -->

@endsection
