@extends('layouts.layout')


@section('title')
    {{ config('app.name', 'Marketland') }} | Marketplace
@endsection

@section('content')

@include('sections.carousel')

<!--Main layout-->
<main>
    <div class="my-4 mx-lg-2">

      <!--Section: Products v.3-->
      <section class="text-center">

        <!--Grid row-->
        <div class="row wow fadeIn">
            @if (count($products) > 0)
                @foreach($products as $product)
                <!--Grid column-->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!--Card link to product page-->
                        <a href="{{ route('store.product', $product->id) }}">
                            <!--Card image-->
                            <div class="view overlay mx-auto">
                                <img src="{{ $product->image_path }}" class="card-img-top waves-light" style="height:35vh; width:auto;"
                                alt="">
                            </div>
                            <!--Card image-->
                            <!--Card content-->
                            <div class="card-body text-left">
                            <!--Category & Title-->
                                <p>
                                    <a href="" class="dark-grey-text mb-2">{{ str_limit($product->name, $limit = 80, $end = '...') }}

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
                            </div>
                        </a>
                        <!--Card link to product page-->
                        <a class="btn btn-info btn-block" href="{{ route('store.addToCart', $product->id) }}">Add to Cart</a>
                    <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->
                @endforeach
            @else
                <div class="col-12">
                    <p class="mx-auto text-muted my-5">No products found...</p>
                </div>
            @endif

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->



    </div>
</main>
<!--Main layout-->

@endsection
