@extends('layouts.layout')

@section('title')
    {{ config('app.name', 'Marketland') }} | Product Details
@endsection

@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="{{ $product->image_path }}" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <!--Category & Title-->
                                <p>
                                    <a href="" class="dark-grey-text mb-2 lead font-weight-bold">{{ $product->name }}

                                        <span class="small text-muted">Added on {{ Carbon\Carbon::parse($product->created_at)->format('d M')}}</span>

                                        @if($product->created_at > Carbon\Carbon::today()->subDays(30) )
                                        <span class="badge badge-danger">NEW</span>
                                        @endif
                                    </a>
                                    <a href="" class="text-muted small">
                                        <p>{{ $product->category }}</p>
                                    </a>
                                    <div class="review-section">
                                        @for ($i = 0; $i < $product->review; $i++)
                                            <i class="fas fa-star amber-darken-2-text"> </i>
                                        @endfor
                                        @for($i = 0; $i < 5-$product->review; $i++)
                                            <i class="fas fa-star text-muted"> </i>
                                        @endfor
                                    </div>
                                </p>
                                <h5 class="text-dark font-weight-bold">$ {{ $product->price }}
                                </h5>



            <p>{{ $product->description }}</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <a class="btn btn-info btn-md my-0 p" href="{{ route('store.addToCart', $product->id) }}">Add to Cart</a>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

  </main>
@endsection
