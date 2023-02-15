@extends('layouts.master3')
@section('content')
<!-- Contact Section -->
<section class="contact-section">
    <div class="pattern-layer" style="background-image:url(images/background/pattern-19.png)"></div>
    <div class="pattern-layer-two" style="background-image:url(images/background/pattern-20.png)"></div>
    <div class="icon-layer-two" style="background-image:url(images/icons/icon-2.png)"></div>
    <div class="icon-layer-three" style="background-image:url(images/icons/icon-2.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Info Column -->
            {{-- <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="icon-layer" style="background-image:url(project/images/icons/icon-2.png)"></div>
                    <div class="image">
                        <img src="{{asset('project/images/resource/contact.html')}}" alt="" />
        </div>
        <h5>Contact us</h5>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
        <ul class="contact-list">
            <li>
                <strong>Phone:</strong>
                <a href="tel:+88-01682648101">+88 01682648101</a>
            </li>
            <li>
                <strong>Email:</strong>
                <a href="mailo:hello@lebari.com">hello@lebari.com</a>
            </li>
        </ul>
    </div>
    </div> --}}

    <!-- Form Column -->
    <div class="form-column col-lg-8 col-md-12 col-sm-12">
        <div class="inner-column">
            <div class="color-layer"></div>
            <!-- Sec Title -->
            <div class="sec-title">
                <h2> Visit us <br> for Free Resources</h2>
                {{-- <div class="text">These leading universities are currently offering online degree courses on FutureLearn:</div> --}}
            </div>

            <!-- Default Form -->
            <div class="default-form">
                <form method="post" action="{{route('project.reg2')}}">
                    @csrf
                    <div class="row clearfix">

                        <!-- Form Group -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="username" value="" placeholder="First Name" required>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="lastname" value="" placeholder="Last Name" required>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <input type="email" name="email" value="" placeholder="Email" required>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <select name="course" class="custom-select-box">
                                <option value="">courses</option>
                                <option value="PHP/Laravel">PHP/Laravel</option>
                                <option value="NodeJS">NodeJS</option>
                                <option value="Angular">Angular</option>
                                <option value="React JS ">React JS</option>
                            </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="date" name="joindate" value="" placeholder="Date" required>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="time" name="classtime" value="" placeholder="Time" required>
                        </div>

                        <!-- Form Group -->
                        {{-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea placeholder="Type you comment here"></textarea>
                        </div> --}}

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit</span></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    </div>
    </div>
</section>
<!-- End Contact Section -->
@endsection
