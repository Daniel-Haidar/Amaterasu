@props(['name'])

<div>
    <a href="/menu/{{$name}}">
        <div class="card">
	        <img src="{{asset('images/main/' . $name . '.jpg')}}" alt="{{$name}}" class="tile" style="width:100%">
	        <div class="middle text rounded">{{strtoupper($name)}}</div>
        </div>
    </a>
</div>