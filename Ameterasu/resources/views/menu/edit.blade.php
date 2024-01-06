<head>
    <link rel="stylesheet" href="{{asset('css/create.css')}}"/>
</head>
<x-layout>
    <div 
        style="background-color:#111827;color:white;"
        class="p-12 w-full max-w-lg mx-auto mt-24 rounded">
        <header class="text-center text-white">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Food
            </h2>
            <p class="mb-4">Edit: {{$food->name}}</p>
        </header>
        <form method="POST" action="/manage/menu/create/{{$food->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Food Name</label
                >
                <input
                    type="text"
                    class="rounded p-2 w-full"
                    name="name"
                    value="{{$food->name}}"
                />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="type" 
                    class="inline-block text-lg mb-2"
                    >Food Type</label
                ><br>
                <input 
                    type="radio"
                    name="type" 
                    value="meals">
                <label for="meals" 
                    class="inline-block text-lg mb-2"
                    >Meals</label
                >&nbsp;&nbsp;
                <input 
                    type="radio" 
                    class="rounded p-2" 
                    name="type" 
                    value="burgers">
                <label for="burgers"
                    class="inline-block text-lg mb-2"
                    >Burgers</label
                >&nbsp;&nbsp;
                <input 
                    type="radio" 
                    class="rounded p-2" 
                    name="type" 
                    value="sides">
                <label for="sides"
                    class="inline-block text-lg mb-2"
                    >Sides</label
                >&nbsp;&nbsp;
                <input 
                    type="radio" 
                    class="rounded p-2" 
                    name="type" 
                    value="drinks">
                <label for="drinks"
                    class="inline-block text-lg mb-2"
                    >Drinks</label
                >&nbsp;&nbsp;
                <input 
                    type="radio" 
                    class="rounded p-2" 
                    name="type" 
                    value="desserts">
                <label for="desserts"
                    class="inline-block text-lg mb-2"
                    >Desserts</label
                >
                @error('type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="price"
                    class="inline-block text-lg mb-2"
                    >Price&dollar;</label
                >
                <input
                    type="number"
                    class="rounded p-2 w-full"
                    name="price"
                    min="0" 
                    max="100" 
                    step="0.01"
                    placeholder="0.00&dollar;"
                    value="{{$food->price}}"
                />

                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    Image
                </label>
                <img 
                    style="width:50%;left:50%;transform: translate(50%, 0);" 
                    class ="img" 
                    src="{{$food->image ? asset('storage/' . $food->image) : asset('images/restaurant.jpg')}}" 
                    alt="">
                <input
                    type="file"
                    class="rounded p-2 w-full"
                    name="image"
                />

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div> 

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Update Food
                </button>

                <a href="/manage/menu" class="text-red-500 ml-4"> Back </a>
            </div>
    </div>
</x-layout>