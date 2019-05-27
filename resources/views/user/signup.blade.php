@extends('layouts.layout_light')

@section('title')
    {{ config('app.name', 'Marketland') }} | Signup
@endsection

@section('content')

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container-fluid wow fadeIn">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-12 col-md-8 col-lg-6 mb-4 m-auto">

                <!-- Default form register -->
                <form class="text-center border border-light p-5" action="{{ route('user.signup') }}" method="post">

                    <p class="h4 mb-4">Sign up</p>

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" id="registerFormFirstName" name="name" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="registerFormLastName" name="lastname" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" id="registerFormEmail" name="email" class="form-control mb-4" placeholder="Email">

                    <!-- Password -->
                    <input type="password" id="registerFormPassword" name="password" class="form-control" placeholder="Password" aria-describedby="registerFormPasswordHelpBlock">

                    <small id="registerFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>

                    <!-- Last name -->
                    <input type="text" id="registerFormUserName" name="username" class="form-control mb-4" placeholder="Username">


                    <!-- Phone number -->
                    <input type="text" id="registerFormPhone" name="phone" class="form-control mb-4" placeholder="Phone number">


                    <!-- Sign up button -->
                    <button class="btn btn-info my-4 btn-block" type="submit" >Sign up</button>

                    {{ csrf_field() }}

                    <!-- Terms of service --
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="{{ route('store.termsOfService') }}">Terms of service</a>
                    </p>-->


                    <hr>

                    <!-- Signin -->
                    <p>Already a member?
                        <a href="{{ route('user.signin') }}">Signin</a>
                    </p>



                </form>
                <!-- Default form register -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

@endsection
