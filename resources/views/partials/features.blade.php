@php
    $get_Data = DB::select('SELECT * FROM features ORDER BY id DESC LIMIT 4');
@endphp

@foreach ($get_Data as $item)
    <div class="bg-[#F9F9F9] pb-5 pr-5">

        <div>
            <img src="{{ $item->img_name }}" alt="" class="overflow-hidden h-16">
        </div>

        <div>
            <h1 class="text-2xl font-bold mt-8 ml-5">{{ $item->title }}</h1>
            <p class="text-sm mt-2 ml-5 max-w-[200px]">{{ $item->sub }}</p>
            <p class="text-sm text-[#33B8C8] mt-2 ml-5"> Read more </p>

        </div>

    </div>
@endforeach
