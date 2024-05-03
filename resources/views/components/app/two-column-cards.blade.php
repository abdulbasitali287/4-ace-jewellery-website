<div class="hover-change-class bg-no-repeat bg-cover flex flex-col relative w-full pb-4 m-0 p-0 border-gray-400 border-opacity-50 {{ $attributes->get('position') }}">
    <div class="relative flex justify-center w-full h-[360px]">
        <img src="{{ $attributes->get('src') }}"
            class="object-cover rounded-2xl sm:w-96 w-full h-96" alt="">
    </div>
    <div class="flex lg:flex-row flex-col ps-4">
        <div class="lg:flex-1 lg:w-3/4 w-full text-white">
            <strong class="text-gray-200 font-medium">{{ $attributes->get('title') }}</strong>
            <p class="text-gray-300">{{ $attributes->get('text') }}</p>
        </div>
        <div class="flex pe-3">
            <a href="#" class="self-end bg-white text-gray-600 mt-12 py-4 px-6 rounded-full font-semibold text-xs border border-transparent hover:border-white hover:bg-transparent hover:text-white transition duration-300" id="addToCart">ADD TO CART</a>
        </div>
    </div>
    <div class="absolute top-0 right-0 pt-3">
        <a href="#" class="px-4 me-1 rounded-full text-xs font-semibold text-white border border-transparent" id="status">{{ $attributes->get('status') }}</a>
    </div>
</div>
