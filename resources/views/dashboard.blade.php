@extends('layouts.main')

@section('content')


<section class=" cart container my-3 mt-2 py-5">
<div class="container mt-2 text-center">

 <h4 style="margin-bottom: 10px">Your Profile</h4>
<p style="margin-bottom: 10px" >{{ Auth::user()->name }}</p>
<p>{{ Auth::user()->email }}</p>


<form action="{{ route('logout') }}"  method="post">

@csrf
<input type="submit" class="btn btn-danger"  value="Logout" >

</form>

<div  class="mt-3"  style="margin-top: 20px">
<a href="{{ route('user_orders') }}" class="btn btn-warning">Your Orders</a>
</div>


</div>

</section>

@endsection
