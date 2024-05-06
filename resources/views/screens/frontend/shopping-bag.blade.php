@extends('layouts.app')
@section('content')
    <div>
        {{-- card section 02 --}}
        <section class="bg-black py-10">
            <div class="container mx-auto px-10">
                <div class="row-auto">
                    <h1 class="text-white text-center font-normal text-5xl leading-tight">SHOPPING BAG</h1>
                </div>
                <div class="row-auto py-10">
                    <div class="md:columns-2">
                        {{-- column 1 --}}
                        <div class="break-inside-avoid-column pt-5">
                            {{-- first section --}}
                            <div class="flex justify-between border-y py-4 border-gray-500">
                                <div class="flex">
                                    <div class="w-40 h-20">
                                        <img src="{{ asset('app/assets/images/shopping-bag/image-1.png') }}" class="object-cover w-full h-full" alt="">
                                    </div>
                                    <div class="pe-10">
                                        <h2 class="font-medium text-xl text-white">Flower Earring Stacking Set</h2>
                                        <p class="text-[#A9A9A9] font-light text-sm">Ring, rose gold (750/1000), set with 18 brilliant-cut diamonds totaling 0.63 carat (for size 52).</p>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col">
                                        <h2 class="font-semibold text-base text-white w-max">5000 AED</h2>
                                        <p class="text-xs text-[#7F7F7F] w-max">(Including Taxes)</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#7F7F7F] cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            {{-- second section --}}
                            <div class="flex justify-between border-y py-4 border-gray-500">
                                <div class="flex">
                                    <div class="w-40 h-20">
                                        <img src="{{ asset('app/assets/images/shopping-bag/image-1.png') }}" class="object-cover w-full h-full" alt="">
                                    </div>
                                    <div class="pe-10">
                                        <h2 class="font-medium text-xl text-white">Flower Earring Stacking Set</h2>
                                        <p class="text-[#A9A9A9] font-light text-sm">Ring, rose gold (750/1000), set with 18 brilliant-cut diamonds totaling 0.63 carat (for size 52).</p>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col">
                                        <h2 class="font-semibold text-base text-white w-max">5000 AED</h2>
                                        <p class="text-xs text-[#7F7F7F] w-max">(Including Taxes)</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#7F7F7F]  cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            {{-- third section --}}
                            <div class="flex justify-between border-y py-4 border-gray-500">
                                <div class="flex">
                                    <div class="w-40 h-20">
                                        <img src="{{ asset('app/assets/images/shopping-bag/image-1.png') }}" class="object-cover w-full h-full" alt="">
                                    </div>
                                    <div class="pe-10">
                                        <h2 class="font-medium text-xl text-white">Flower Earring Stacking Set</h2>
                                        <p class="text-[#A9A9A9] font-light text-sm">Ring, rose gold (750/1000), set with 18 brilliant-cut diamonds totaling 0.63 carat (for size 52).</p>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex flex-col">
                                        <h2 class="font-semibold text-base text-white w-max">5000 AED</h2>
                                        <p class="text-xs text-[#7F7F7F] w-max">(Including Taxes)</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#7F7F7F] cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- column 2 --}}
                        <div class="break-inside-avoid-column pt-5">
                            <div class="px-5">
                                <div class="px-10">
                                    <form action="#">
                                        <div class="border rounded-xl border-gray-500 py-2">
                                            <div class="flex flex-col pb-2  px-4">
                                                <div class="flex items-center me-4 py-1">
                                                    <label for="inline-radio" class="ms-2 text-base font-light text-white">Delivery Country:</label>
                                                </div>
                                                <div class="flex items-center me-4 py-1">
                                                    <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="size-3 text-[#C5AD8A] bg-gray-100 border-gray-300 focus:ring-[#C5AD8A] dark:focus:ring-[#C5AD8A] dark:ring-offset-gray-800 focus:ring-inset focus:outline-none">
                                                    <label for="inline-radio" class="w-full flex justify-between ms-2 text-base font-light text-black bg-[#FAFAFA] ps-[5px] py-1 rounded-lg">UNITED ARAB EMIRATES (UAE) <span class="pe-2 text-[#7F7F7F] "><i>select</i></span></label>
                                                </div>
                                                <div class="flex items-center me-4 py-1">
                                                    <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="size-3 text-[#C5AD8A] bg-gray-100 border-gray-300 focus:ring-[#C5AD8A] dark:focus:ring-[#C5AD8A] dark:ring-offset-gray-800 focus:ring-inset focus:outline-none">
                                                    <label for="inline-2-radio" class="ms-2 text-base font-light text-white">Boutique Pick-Up</label>
                                                </div>
                                            </div>
                                            <div class="border-t border-gray-500 px-5 py-4">
                                                <div class="flex justify-between">
                                                    <strong class="text-white">Total: <span class="text-xs text-[#7F7F7F]">(Including Taxes)</span></strong>
                                                    <p class="text-white">15000 AED</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex py-4">
                                            <button class="w-full py-3 font-normal text-lg text-white border border-gray-500 rounded-full" type="submit">CHECKOUT</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="px-10">
                                    <div class="flex">
                                        <button class="bg-gradientButton w-full py-3 font-normal text-lg text-white rounded-full" type="submit">CONTINUE SHOPPING</button>
                                    </div>
                                    <div class="w-[450px] mx-auto flex justify-evenly mt-4">
                                        <div class="p-0 m-0">
                                            <img src="{{ asset('app/assets/images/checkout/amex.png') }}" class="w-[97px] h-[33px] object-cover" alt="">
                                        </div>
                                        <div class="p-0 m-0">
                                            <img src="{{ asset('app/assets/images/checkout/master-card.png') }}" class="w-[57px] h-[33px] object-cover" alt="">
                                        </div>
                                        <div class="p-0 m-0">
                                            <img src="{{ asset('app/assets/images/checkout/payment-way.png') }}" class="w-[44px] h-[33px] object-cover" alt="">
                                        </div>
                                        <div class="p-0 m-0">
                                            <img src="{{ asset('app/assets/images/checkout/visa.png') }}" class="w-[60px] h-[33px] object-cover" alt="">
                                        </div>
                                        <div class="p-0 m-0">
                                            <img src="{{ asset('app/assets/images/checkout/payment-way-2.png') }}" class="w-[80px] h-[33px] object-cover" alt="">
                                        </div>
                                        <div class="p-0 m-0">
                                            <img src="{{ asset('app/assets/images/checkout/pay.png') }}" class="w-[60px] h-[33px] object-cover" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
