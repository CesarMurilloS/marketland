@extends('layouts.layout')

@section('title')
    {{ config('app.name', 'Marketland') }} | Shopping Cart
@endsection

@section('content')


    @if(Session::has('cart'))
<!--Main Layout-->
<main>

    <!-- Main Container -->
    <div class="container">

      <!-- Section cart -->
      <section class="section my-5 pb-5">

        <div class="card card-ecommerce">

          <div class="card-body">

            <!-- Shopping Cart table -->
            <div class="table-responsive">

              <table class="table product-table table-cart-v-2">

                <!-- Table head -->
                <thead class="mdb-color lighten-5">

                  <tr>

                    <th></th>

                    <th class="font-weight-bold">

                      <strong>Product</strong>

                    </th>

                    <th class="font-weight-bold">

                      <strong>Color</strong>

                    </th>

                    <th></th>

                    <th class="font-weight-bold">

                      <strong>Price</strong>

                    </th>

                    <th class="font-weight-bold">

                      <strong>QTY</strong>

                    </th>

                    <th class="font-weight-bold">

                      <strong>Amount</strong>

                    </th>

                    <th></th>

                  </tr>

                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>

                  <!-- First row -->
                  <tr>

                    <th scope="row">

                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="" class="img-fluid z-depth-0">

                    </th>

                    <td>

                      <h5 class="mt-3">

                        <strong>iPhone</strong>

                      </h5>

                      <p class="text-muted">Apple</p>

                    </td>

                    <td>White</td>

                    <td></td>

                    <td>$800</td>

                    <td class="text-center text-md-left">

                      <span class="qty">1 </span>

                      <div class="btn-group radio-group ml-2" data-toggle="buttons">

                        <label class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">

                          <input type="radio" name="options" id="option1">—

                        </label>

                        <label class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">

                          <input type="radio" name="options" id="option2">+

                        </label>

                      </div>

                    </td>

                    <td class="font-weight-bold">

                      <strong>$800</strong>

                    </td>

                    <td>

                      <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">X

                      </button>

                    </td>

                  </tr>
                  <!-- First row -->

                  <!-- Second row -->
                  <tr>

                    <th scope="row">

                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="" class="img-fluid z-depth-0">

                    </th>

                    <td>

                      <h5 class="mt-3">

                        <strong>Headphones</strong>

                      </h5>

                      <p class="text-muted">Sony</p>

                    </td>

                    <td>Red</td>

                    <td></td>

                    <td>$200</td>

                    <td class="text-center text-md-left">

                      <span class="qty">3 </span>

                      <div class="btn-group radio-group ml-2" data-toggle="buttons">

                        <label class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">

                          <input type="radio" name="options" id="option1">—

                        </label>

                        <label class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">

                          <input type="radio" name="options" id="option2">+

                        </label>

                      </div>

                    </td>

                    <td class="font-weight-bold">

                      <strong>$600</strong>

                    </td>

                    <td>

                      <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">X

                      </button>

                    </td>

                  </tr>
                  <!-- Second row -->

                  <!-- Third row -->
                  <tr>

                    <th scope="row">

                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="" class="img-fluid z-depth-0">

                    </th>

                    <td>

                      <h5 class="mt-3">

                        <strong>iPad Pro</strong>

                      </h5>

                      <p class="text-muted">Apple</p>

                    </td>

                    <td>Gold</td>

                    <td></td>

                    <td>$600</td>

                    <td class="text-center text-md-left">

                      <span class="qty">2 </span>

                      <div class="btn-group radio-group ml-2" data-toggle="buttons">

                        <label class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">

                          <input type="radio" name="options" id="option1">—

                        </label>

                        <label class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">

                          <input type="radio" name="options" id="option2">+

                        </label>

                      </div>

                    </td>

                    <td class="font-weight-bold">

                      <strong>$1200</strong>

                    </td>

                    <td>

                      <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">X

                      </button>

                    </td>

                  </tr>
                  <!-- Third row -->

                  <!-- Fourth row -->
                  <tr>

                    <td colspan="3"></td>

                    <td>

                      <h4 class="mt-2">

                        <strong>Total</strong>

                      </h4>

                    </td>

                    <td class="text-right">

                      <h4 class="mt-2">

                        <strong>$2600</strong>

                      </h4>

                    </td>

                    <td colspan="3" class="text-right">

                      <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Complete purchase

                        <i class="fas fa-angle-right right"></i>

                      </button>

                    </td>

                  </tr>
                  <!-- Fourth row -->

                </tbody>
                <!-- Table body -->

              </table>

            </div>
            <!-- Shopping Cart table -->

          </div>

        </div>

      </section>
      <!-- Section cart -->

    </div>
    <!-- Main Container -->

  </main>
<!--Main Layout-->

@else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <div class="col-12">
                    <p class="mx-auto text-muted my-5">You have not added products to your cart yet.<a href="{{ route('store.index') }}">Start adding products.</a></p>
                </div>
                <p class="small"></p>
            </div>
        </div>
    @endif
@endsection

