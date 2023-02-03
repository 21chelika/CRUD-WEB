@php
    $get_Data = DB::select('SELECT * FROM feedback ORDER BY id DESC LIMIT 2');
@endphp

@foreach ($get_Data as $item)
<div class="bg-[#F9F9F9] pb-5 pr-5">

    <div class=" pl-10">
        <img src="{{ $item->img_name }}" alt="">
    </div>

    <div>

        <p class="text-sm mt-2 ml-5 max-w-[500px]">{{ $item->feedback }}</p>


    </div>

    <div class="mt-10 ml-5">
        <p>{{ $item->name }}</p>
        <p>{{ $item->role }}</p>
    </div>

</div>
@endforeach
