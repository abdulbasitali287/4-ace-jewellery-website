<div class="flex flex-col relative w-full pb-4 border-white m-0 p-0 {{ $attributes->get('position') }}">
    <div class="relative flex justify-center w-full h-[360px]">
        <img src="{{ $attributes->get('src') }}"
            class="object-cover rounded-2xl sm:w-96 w-full h-96" alt="">
    </div>
    <div class="flex lg:flex-row flex-col  ps-4">
        <div class="lg:flex-1 lg:w-3/4 w-full text-white">
            <strong class="text-gray-200 font-medium">{{ $attributes->get('title') }}</strong>
            <p class="text-gray-300">{{ $attributes->get('text') }}</p>
        </div>
        <div class="flex pe-3">
            <a href="#" class="self-end bg-white text-gray-600 mt-12 py-4 px-6 rounded-xl font-semibold text-xs border border-transparent hover:border-white hover:bg-transparent hover:text-white transition duration-300">ADD TO CART</a>
        </div>>
    </div>
    <div class="absolute top-0 right-0 pt-3">
        <a href="#" class="p-4 text-xs font-semibold text-white">{{ $attributes->get('status') }}</a>
    </div>
</div>
