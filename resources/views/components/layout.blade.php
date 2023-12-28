<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="icon" href="{{asset('images/icon.png')}}" >
    <link
         rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Amaterasu | The Flames of Cuisine</title>
</head>
    <body class="mb-48">
        <nav>
            <div class="logo">
                <a href="/">
                    Amaterasu
                </a>
            </div>
            <div>
            <div style="grid-template-columns: 20% 20% 20% 20% 20% 0%" class="w-full lg:grid lg:grid-cols-6 gap-0">
                <a href="/menu/meals" class="layout-li">
					<div style="position:relative;width:auto">
                        Meals
                    </div>
                </a>
                <a href="/menu/burgers" class="layout-li">
                    <div style="position:relative;width:auto">
                        Burgers
                    </div>
                </a>
                <a href="/menu/sides" class="layout-li">
                    <div style="position:relative;width:auto">
                        Sides
                    </div>
                </a>
                <a href="/menu/drinks" class="layout-li">
					<div style="position:relative;width:auto">
                        Drinks
                    </div>
                </a>
                <a href="/menu/desserts" class="layout-li">
                    <div style="position:relative;width:auto">
                        Desserts
                    </div>
                </a>
                <div class="filler">O</div>
            </div>
            </div>
        </nav>
    <main>
        
    {{$slot}}

    </main>
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
        @endauth
    </footer>

    <x-flash-message></x-flash-message>
</body>
</html>