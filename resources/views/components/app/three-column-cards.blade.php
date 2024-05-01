<div>
    <div class="md:mx-0 h-96 relative mb-2 md:w-96 sm:w-72 sm:px-0 px-5 w-auto">
        <img src="{{ $attributes->get('src') }}"
            class="object-cover rounded-2xl w-full h-full" alt="">
        <div class="w-full absolute top-40 right-0">
            <h4 class="font-thin sm:text-4xl text-2xl text-slate-200 text-center">{{ $attributes->get('title') }}</h4>
        </div>
    </div>
</div>
