@props(['food'])
<head>
    <link rel="stylesheet" href="{{asset('css/foodTile.css')}}"/>
</head>

<div {{$attributes->merge(['class' => ''])}}>
    <div class="container">
        <img 
            style="width:100%; border-radius: 150px 50px 150px 50px;" 
            class ="img" 
            src="{{$food->image ? asset('storage/' . $food->image) : asset('images/restaurant.jpg')}}"
            alt="">
        <div class="centered">{{$food->name}}</div>
        @auth
            @if(auth()->user()->name == 'admin')
                <button class="priceButton">Price: &dollar;{{$food->price}}</button>
            @else
                <form method="POST" action="/orders/order" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="name" value="{{$food->name}}">
                    <input type="hidden" name="price" value="{{$food->price}}">
                    <button class="orderButton">Order for &dollar;{{$food->price}}</button>
                </form>
            @endif
        @else
            <button class="priceButton">Price: &dollar;{{$food->price}}</button>
        @endauth
        
      </div>
</div>