{{-- banner section --}}
<div class="relative sm:h-screen text-white overflow-hidden mt-[-5rem]">
    <div class="absolute inset-0">
        <img src="{{ $attributes->get('src') }}" alt="Background Image" class="object-cover object-center w-full h-full" />
        @if (Route::currentRouteName() != 'index')
        <div class="absolute inset-0 bg-black opacity-50"></div>
        @endif
    </div>
    @if ($attributes->has('text'))
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1 class="md:text-8xl sm:text-6xl text-4xl text-white text-center opacity-100">{{ $attributes->get('text') }}</h1>
        </div>
    @else
        <div class="w-full absolute left-0 bottom-0 z-10 flex flex-col justify-center items-center">
            <a href="#"
            class="hover:bg-slate-950 bg-black hover:shadow-md font-semibold duration-300 mx-auto py-2 px-4 rounded-lg mb-5">EXPLORE
                OUR COLLECTION NOW</a>
        </div>
    @endif
</div>
