@extends('layouts.layout_light')

@section('title')
    {{ config('app.name', 'Marketland') }} | Signin
@endsection

@section('content')
<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container-fluid wow fadeIn">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-12 col-md-8 col-lg-6 mb-4 m-auto">

                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="{{ route('user.signin') }}" method="post">

                    <p class="h4 mb-4">Sign in</p>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <!-- Email -->
                    <input type="email" id="loginFormEmail" name="email" class="form-control mb-4" placeholder="Email">

                    <!-- Password -->
                    <input type="password" id="loginFormPassword" name="password" class="form-control mb-4" placeholder="Password">

                    <div class="d-flex justify-content-around">
                        <!--<div>
                            <!- Remember me --
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="loginFormRemember">
                                <label class="custom-control-label" for="loginFormRemember">Remember me</label>
                            </div>
                        </div>-->
                        <div>
                            <!-- Forgot password -->
                            <a href="{{ route('user.forgotPassword') }}">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                    {{ csrf_field() }}

                    <hr>

                    <!-- Signup -->
                    <p>Not a member?
                        <a href="{{ route('user.signup') }}">Signup</a>
                    </p>

                </form>
                <!-- Default form login -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

@endsection
