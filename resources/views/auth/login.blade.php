@extends('layouts.master2')
@section('content')
<style>
    .centered {
        position: fixed;
        /* or absolute */
        top: 15%;
        left: 25%;
    }

    body {
        background-color: rgb(66, 54, 54);
    }

</style>
<!-- Blog Detail Banner Section -->
<section class="blog-detail-banner-section  d-flex justify-content-center w-50  centered">
    <div class="auto-container py-5 m-auto justify-content-center mt-5 h-100 ">


        <div class="comment-form ">

            <div class="group-title">
                <h4 class=" d-flex justify-content-center ">Signin</h4>
            </div>

            <!--Comment Form-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-outline">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label class="form-label" for="typeEmail">Email </label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-outline">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label class="form-label" for="typePassword">Password </label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Sign In </span></button>
                </div>

            </form>

        </div>


    </div>
</section>
<!-- End Blog Detail Banner Section -->


@endsection
