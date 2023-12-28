<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/icon.png')}}">
    <link
         rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Amaterasu | The Flames of Cuisine</title>
</head>
<body>
    <nav>
        <div class=logo>
            <div style="margin:auto">
                Welcome To <br>
                <span class="logo-text">AMATERASU</span><br>
                <span class="subtitle">The Flames of Cuisine</span>
            </div>
        </div>
        @php
           $names = array("meals", "burgers", "sides", "drinks", "desserts"); 
        @endphp
        @foreach($names as $name)
            <x-card :name="$name"> </x-card>
        @endforeach
    </nav>
    <footer class="fixed bottom-0 right-0 justify-start md:justify-center">
        @auth
        @if(auth()->user()->name == 'admin')
            <a href="/manage">
                <div class="button"><span>Manage Restaurant  </span></div>
            </a>
        @else
            <a href="/orders">
                <div class="button"><span>Your Order  </span></div>
            </a>
        @endif
        @else
            <div class="guestButton">{{$occupiedTables}}/{{$totalTables}} Tables occupied</div>
        @endauth
    </footer>
    <x-flash-message></x-flash-message>
</body>
</html>

