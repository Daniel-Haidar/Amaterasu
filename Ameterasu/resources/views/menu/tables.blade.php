<x-layout>
    <div class="text-4xl lg:grid lg:grid-cols-3 center m-24 text-white">
        @php $counter = 1 @endphp
        @foreach($users as $user)
        @if($user->name == 'admin')
        @else
        <div>
            <div class="w-full flex relative p-4 text-2xl">
                @if($user->occupied == true)
                <form class="w-full" method="POST" action="/manage/tables/occupy/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <input type="hidden" name="occupancy" value="false">
                    <Button style="background-color:red; height:50px;" class="rounded left-1/2 relative transform -translate-x-1/2 px-4 py-2">Clear Table {{$counter}}</Button>
                </form>
                @else
                <form class="w-full" method="POST" action="/manage/tables/occupy/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <input type="hidden" name="occupancy" value="true">
                    <Button style="background-color:green;height:50px;" class="rounded left-1/2 relative transform -translate-x-1/2 px-4 py-2">Occupy Table {{$counter}}</Button>
                </form>
                @endif
            </div>
            <div class="border text-center border-color-white rounded m-12 p-12">
                <h1>Table {{$counter}}</h1>
            </div>    
                @foreach ($orders as $order)
                    @if($order['user_id'] == $user->id)
                        <div class="border text-center border-color-white rounded">{{$order->name}}: {{$order->amount}}</div>
                    @endif
                @endforeach
        </div>
        @php $counter = $counter + 1 @endphp
        @endif
        @endforeach
    </div>
</x-layout>