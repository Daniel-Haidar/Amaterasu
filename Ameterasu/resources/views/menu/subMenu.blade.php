<x-layout>

<div class="lg:grid lg:grid-cols-2 gap-2 m-2 justify-center align-center">

    @unless(count($foods) == 0)

    <?php $number=0?>
    @foreach ($foods as $food)
        @if($number % 2 == 0)
            <x-food-tile-left :food="$food" />
        @else
            <x-food-tile-right :food="$food" />
        @endif
        <?php $number= $number+1?>
    @endforeach

@else
 <p> no food </p>
 @endunless

    </div>
</x-layout>
