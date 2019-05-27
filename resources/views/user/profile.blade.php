@extends('layouts.layout')

@section('title')
    {{ config('app.name', 'Marketland') }} | Profile
@endsection

@section('content')
<!-- Section: Personal card -->
<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container-fluid wow fadeIn">
        <!--Grid row-->
        <div class="row">

            <div class="col-12 col-md-4 mb-5">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto">
                        @if(is_null($user->profile_image_path))
                        <i class="fas fa-user-circle text-muted" style="font-size:199px"></i>
                        @else
                        <img src="{{ $user->profile_image_path }}" class="rounded-circle z-depth-1 img-fluid"  height="200" width="200">
                        @endif
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold dark-grey-text mt-4">{{ $user->name }} {{ $user->lastname }}</h4>
                    <h5 class="font-weight-bold grey-text my-3">{{ $user->username }}</h5>
                    <h6 class="font-weight-bold cyan-text my-3">{{ $user->email }}</h6>
                    <h6 class="font-weight-bold cyan-text my-3">{{ $user->phone }}</h6>
                    <a></a>
                    <!--<p class="font-weight-normal dark-grey-text">
                        <i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                        suscipit laboriosam, nisi ut aliquid commodi.</p>-->
                    <!--Review-->
                    <a class="btn btn-info btn-block my-4" href="{{ route('user.editProfile') }}">Edit profile</a>
                    <div class="orange-text">
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                        <i class="fas fa-star"> </i>
                    </div>
                </div>

            </div>

        </div>

    </div>
  <!-- Grid row -->
</main>
<!-- Section: Personal card -->
@endsection
