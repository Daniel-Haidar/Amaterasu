@auth
@if(auth()->user()->name == 'admin')
    <script>window.location = "/";</script>
@else
<x-layout>
    @php
    $total = 0;
    @endphp
    @unless($orders->isEmpty())
    <div style="grid-template-columns: 25% 25% 25% 25%" class="w-full lg:grid lg:grid-cols-4 gap-0 p-28">
        <div class="p-10 m-4 text-white text-3xl rounded">Food</div>
        <div class="p-10 m-4 text-white text-3xl rounded">Price</div>
        <div class="p-10 m-4 text-white text-3xl rounded">Amount</div>
        <div class="p-10 m-4 text-white text-3xl rounded">Total</div>
        <hr><hr><hr><hr>
    
    
    @foreach ($orders as $order)
        <div class="p-10 m-4 text-white text-3xl rounded">{{$order['name']}}</div>
        <div class="p-10 m-4 text-white text-3xl rounded">&dollar;{{$order['price']}}</div>
        <div class="p-10 m-4 text-white text-3xl rounded">{{$order['amount']}}</div>
        <div class="p-10 m-4 text-white text-3xl rounded">&dollar;{{$order['price'] * $order['amount']}}</div>
        @php
            $total = $total + ($order['price'] * $order['amount']);
        @endphp
        <hr><hr><hr><hr>
    @endforeach

    <div class="p-10 m-4 text-white text-3xl rounded"></div>
    <div class="p-10 m-4 text-white text-3xl rounded"></div>
    <div class="p-10 m-4 text-white text-3xl rounded"></div>
    <div class="p-10 m-4 text-white text-3xl rounded">&dollar;{{$total}}</div>
    </div>
    @else 
    <div style="margin: auto; text-align:center" class="p-10 m-4 text-white text-6xl rounded">No Orders Yet</div>
    @endunless
</x-layout>

@endif
@endauth