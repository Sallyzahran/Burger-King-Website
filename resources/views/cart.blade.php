@extends('layouts.main')

@section('content')

<section class="cart container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
      <h4>Your Cart</h4>
       <hr class="mx-auto">
    </div>

    <table class="pt-5">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

            @if (Session::has('cart'))
             @foreach (Session::get('cart') as $id=>$product)


          <tr>
            <td>
              <div class="product-info">
                <img style="width:100px; height: 75px;" src=" {{ asset('images/'.$product['main_image']) }} ">
                <div>
                  <p>{{ $product['name'] }}</p>
                  <small><span>$</span>{{ $product['price'] }}</small>
                  <br>
                  <form  action="{{ route('remove_from_cart') }}" method="post" >
                    @csrf
                    <input type="hidden" name="id" value="{{ $product['id'] }}" id="">
                    <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                  </form>
                </div>
              </div>
            </td>

            <td>
              <form action="{{ route('edit_product_quantity') }}" method="post" >
                @csrf
                <input type="hidden" name="id" value="{{ $product['id'] }}">

                <input type="submit" name="decrease_product_quantity_btn" class="edit-btn" value="-">

                <input type="text" name="quantity" value="{{ $product['quantity'] }}"readonly>

                <input type="submit" name="increase_product_quantity_btn" class="edit-btn" value="+">

              </form>
            </td>

            <td>
              <span class="product-price">{{ $product['price'] }}*{{ $product['quantity'] }}</span>
            </td>
          </tr>
          @endforeach

          @endif

    </table>


    <div class="cart-total">
      <table>

        @if(Session::has('cart'))
        <tr>


          <td>Total</td>

          @if (Session::has('total'))


          <td>{{ Session::get('total')}}</td>
          @endif
        </tr>
             @endif
      </table>
    </div>


    <div class="checkout-container">

        @if(Session::has('total'))
        @if (Session::get('total') !=null)

      <form  action="{{ route('checkout') }}" method="get" >
        @csrf
        <input type="submit" class="btn checkout-btn" value="Checkout" name="">
      </form>
       @endif
       @endif
    </div>





  </section>


@endsection
