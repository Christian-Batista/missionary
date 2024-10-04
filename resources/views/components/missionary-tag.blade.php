@props(['tagName', 'mission'])

<div>
    <div class="bg-black">
        <h1 class="text-white">{{$tagName}}</h1>
        <h2 class="text-white">{{$mission}}</h2>
        <span class="fi fi-{{ strtolower($mission)}}">
    </div>
</div>