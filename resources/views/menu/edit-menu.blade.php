<style>
    .add-menu-item {
        display: flex;
        margin:auto; 
        color:white; 
        background-color :red;
        transition: all 0.4s ease-in-out;
        border: 1px solid black;
        margin:auto; 
        width:fit-content;
    }
    .add-menu-item:hover {
        color:black; 
        background-color :rgb(255, 135, 135);
    }
</style>

<x-layout>

<header>
    <h1
        class="text-6xl text-center text-white font-bold my-12 uppercase"
    >
        Manage Menu
    </h1>
    <a href="/manage/menu/create" class="text-4xl rounded py-8 px-12 add-menu-item">
        <p>Add Menu Item</p>
    </a>
</header>
<hr class="m-20">  
<div class="relative">
<table class="w-3/4 mb-20 left-1/2 relative transform -translate-x-1/2 table-auto rounded-sm">
    <tbody>
        <tr class="px-4 py-8 border-b border-gray-300">
            <th colspan="5" class="px-4 py-8 border-b border-gray-300 text-4xl text-white">    
                Meals
            </th>
        </tr>
        @unless ($meals->isEmpty())
        @foreach ($meals as $meal)
        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300">
                <img 
                    class="w-28 border-black-0 rounded m-4"  
                    src="{{$meal->image ? asset('storage/' . $meal->image) : asset('images/restaurant.jpg')}}"
                    alt="">
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-4xl text-white">
                {{$meal->name}}
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-3xl text-white">
                &dollar;{{$meal->price}}
            </td>    
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a
                    href="/manage/menu/{{$meal->id}}/edit"
                    class="text-blue-400 px-6 py-2 rounded-xl"
                    ><i
                        class="fa-solid fa-pen-to-square"
                    ></i>
                    Edit</a
                >
            </td>
            <td
                class="px-4 py-8 border-t border-b border-gray-300 text-lg"
            >
                <form method="POST" action="/manage/menu/delete/{{$meal->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <p class="text-center">No Meals Found</p> 
            </td>
        </tr>
        @endunless
    </tbody>
</table>
</div>
<div class="relative">
<table class="w-3/4 mb-20 left-1/2 relative transform -translate-x-1/2 table-auto rounded-sm">
    <tbody>
        <tr class="px-4 py-8 border-b border-gray-300">
            <th colspan="5" class="px-4 py-8 border-b border-gray-300 text-4xl text-white">    
                Burgers
            </th>
        </tr>

        @unless ($burgers->isEmpty())
        @foreach ($burgers as $burger)

        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300">
                <img 
                    class="w-28 border-black-0 rounded m-4"  
                    src="{{$burger->image ? asset('storage/' . $burger->image) : asset('images/restaurant.jpg')}}"
                    alt="">
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-4xl text-white">
                {{$burger->name}}
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-3xl text-white">
                &dollar;{{$burger->price}}
            </td> 
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a
                    href="/manage/menu/{{$burger->id}}/edit"
                    class="text-blue-400 px-6 py-2 rounded-xl"
                    ><i
                        class="fa-solid fa-pen-to-square"
                    ></i>
                    Edit</a
                >
            </td>
            <td
                class="px-4 py-8 border-t border-b border-gray-300 text-lg"
            >
                <form method="POST" action="/manage/menu/delete/{{$burger->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <p class="text-center">No Burgers Found</p> 
            </td>
        </tr>
        @endunless
    </tbody>
</table>
</div>
<div class="relative">
    <table class="w-3/4 mb-20 left-1/2 relative transform -translate-x-1/2 table-auto rounded-sm">
        <tbody>
            <tr class="px-4 py-8 border-b border-gray-300">
                <th colspan="5" class="px-4 py-8 border-b border-gray-300 text-4xl text-white">    
                    Sides
                </th>
            </tr>
    
            @unless ($sides->isEmpty())
            @foreach ($sides as $side)
    
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300">
                    <img 
                        class="w-28 border-black-0 rounded m-4"  
                        src="{{$side->image ? asset('storage/' . $side->image) : asset('images/restaurant.jpg')}}"
                        alt="">
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-4xl text-white">
                    {{$side->name}}
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-3xl text-white">
                    &dollar;{{$side->price}}
                </td> 
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a
                        href="/manage/menu/{{$side->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <form method="POST" action="/manage/menu/delete/{{$side->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Sides Found</p> 
                </td>
            </tr>
            @endunless
        </tbody>
    </table>
</div>
<div class="relative">
    <table class="w-3/4 mb-20 left-1/2 relative transform -translate-x-1/2 table-auto rounded-sm">
        <tbody>
            <tr class="px-4 py-8 border-b border-gray-300">
                <th colspan="5" class="px-4 py-8 border-b border-gray-300 text-4xl text-white">    
                    Drinks
                </th>
            </tr>
    
            @unless ($drinks->isEmpty())
            @foreach ($drinks as $drink)
    
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300">
                    <img 
                        class="w-28 border-black-0 rounded m-4"  
                        src="{{$drink->image ? asset('storage/' . $drink->image) : asset('images/restaurant.jpg')}}"
                        alt="">
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-4xl text-white">
                    {{$drink->name}}
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-3xl text-white">
                    &dollar;{{$drink->price}}
                </td> 
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a
                        href="/manage/menu/{{$drink->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <form method="POST" action="/manage/menu/delete/{{$drink->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Drinks Found</p> 
                </td>
            </tr>
            @endunless
        </tbody>
    </table>
</div>
<div class="relative">
    <table class="w-3/4 mb-20 left-1/2 relative transform -translate-x-1/2 table-auto rounded-sm">
        <tbody>
            <tr class="px-4 py-8 border-b border-gray-300">
                <th colspan="5" class="px-4 py-8 border-b border-gray-300 text-4xl text-white">    
                    Desserts
                </th>
            </tr>
    
            @unless ($desserts->isEmpty())
            @foreach ($desserts as $dessert)
    
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300">
                    <img 
                        class="w-28 border-black-0 rounded m-4"  
                        src="{{$dessert->image ? asset('storage/' . $dessert->image) : asset('images/restaurant.jpg')}}"
                        alt="">
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-4xl text-white">
                    {{$dessert->name}}
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-3xl text-white">
                    &dollar;{{$dessert->price}}
                </td> 
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a
                        href="/manage/menu/{{$dessert->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <form method="POST" action="/manage/menu/delete/{{$dessert->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Desserts Found</p> 
                </td>
            </tr>
            @endunless
        </tbody>
    </table>
    </div>
    
</x-layout>