@extends('layouts.main')

@section('content')

<section id="block">
    <div class="container">

        <!-- First section -->
        <div class="row">
            <div class="col-sm-8">
                <div class="feature">
                    <div class="shack_burger">
                        <div class="chicken">
                            <img src="{{ asset('images/chicken.png') }}" alt="Chicken" />
                        </div>

                        <h2>Shack Burger </h2>
                        <p>Black Angus beef patty topped with American cheese, tomato, lettuce, and “Shack Sauce,” served in a grilled potato bun</p>
                    </div>
                    <p class="caption">*Limited Time Only</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="signature">
                    <div class="shape">
                        <span class="flaticon flaticon-burger"></span>
                        <p>signature</p>
                    </div>
                    <div class="signature_content">
                        <p>It used to be a Secret but not any more! Our tribute to the King is a Cheddar Beef Patty,</p>
                    </div>
                </div>
            </div>
        </div><!-- first section end -->


        <!-- Third section -->
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>


        <!-- Forth section -->
        <div class="row forth_sec">
            <div class="col-sm-4">
                <div class="menu">
                    <div class="inner_content">
                        <span class="flaticon flaticon-burger"></span>
                        <h2>
                            <a style="color: white" href="{{ route('products') }}">menu</a>
                            </h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="drinks">
                    <div class="inner_content">
                        <span class="flaticon flaticon-drink"></span>
                        <h2><a style="color: white" href="{{ route('category',['category'=>'Beverages']) }}">drinks
                        </a></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sides">
                    <div class="inner_content">
                        <span class="flaticon flaticon-food"  style="margin-left: 0"></span>
                        <h2>
                            <a style="color: white" href="{{ route('category',['category'=>'Breakfast']) }}">Break<br>Fast</a>
                            </h2>
                    </div>
                </div>
            </div>
        </div><!-- forth section end -->
    </div>
</section><!-- Block Content end-->

<!-- Lock -->
<section id="lock">
    <h2>SERVING MORE THAN JUST BURGERS SINCE 1998</h2>
    <p>Check out our opening hours and location address below.</p>
</section>

@endsection
