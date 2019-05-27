@extends('layouts.layout_light')

@section('title')
    {{ config('app.name', 'Marketland') }} | Edit Profile
@endsection

@section('content')

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container-fluid wow fadeIn">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-12 col-md-8 col-lg-6 mb-4 m-auto">

                <!-- Default form update -->
                <form class="text-center border border-light p-5" action="{{ route('user.editProfile') }}" method="post">

                    <p class="h4 mb-4">Update Profile</p>

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
                            <input type="text" id="updateFormFirstName" value="{{ $user->name }}" name="name" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="updateFormLastName" value="{{ $user->lastname }}" name="lastname" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" id="updateFormEmail" value="{{ $user->email }} "name="email" class="form-control mb-4" placeholder="Email">

                    <!-- Password -->
                    <input type="password" id="updateFormPassword" name="password" class="form-control" placeholder="Password" aria-describedby="updateFormPasswordHelpBlock">

                    <small id="updateFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>

                    <!-- Last name -->
                    <input type="text" id="updateFormUserName" value="{{ $user->username }}"name="username" class="form-control mb-4" placeholder="Username">


                    <!-- Phone number -->
                    <input type="text" id="updateFormPhone" value="{{ $user->phone }}" name="phone" class="form-control mb-4" placeholder="Phone number">


                    <!-- Update Profile button -->
                    <button class="btn btn-info my-4 btn-block" type="submit" >Update Profile</button>

                    {{ csrf_field() }}




                </form>
                <!-- Default form update -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

@endsection
