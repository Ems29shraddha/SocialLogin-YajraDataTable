@extends('layouts.master2')
@section('content')
<style>
    .centered {
        position: fixed;
        /* or absolute */
        top: 10%;
        left: 35%;
        border-radius: 2rem;
    }

    body {
        background-color: rgb(66, 54, 54);
    }

</style>
<!-- Blog Detail Banner Section -->
<section class="blog-detail-banner-section  d-flex justify-content-center w-25 h-75  centered">
    <div class="auto-container  m-auto justify-content-center mt-5 ">
        <div class="comment-form row">
            <div class="col ">
                <button type="button" id="signup" class=" btn btn-light rounded-pill" data-mdb-ripple-color="dark">Sign Up</button>
            </div>
            <div class=" col">
                <button type="button" id="signin" class="btn btn-outline-dark btn-rounded" data-mdb-ripple-color="dark">Sign In</button>
            </div>
        </div>

        <div class="comment-form " id="form1">
            <!--Comment Form-->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-outline">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>

                <div class="form-outline">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>

                <div class="form-outline">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>

                <div class="form-outline">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-Enter Password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>

                <div class="form-group">
                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Sign UP </span></button>
                </div>
                <br>

            </form>

        </div>

        <div class="comment-form " id="form2">
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

<script>
    const targetDiv = document.getElementById("form1");
    const btn = document.getElementById("signup");
    btn.onclick = function() {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };

</script>

<script>
    const targetDiv = document.getElementById("form2");
    const btn = document.getElementById("signin");
    btn.onclick = function() {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };

</script>


@endsection
