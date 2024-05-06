@extends('layouts.app')
@section('content')
    <div>
        {{-- card section 02 --}}
        <section class="bg-black py-10">
            <div class="container mx-auto pt-5 px-10">
                <div class="row-auto">
                    <h1 class="text-white text-center font-normal text-5xl leading-tight">CHECKOUT</h1>
                </div>
                <div class="row-auto py-5">
                    <div class="md:w-1/2 w-full pt-10 mx-auto px-4">
                        <form action="#">
                            <div>
                                <p class="text-white text-xl ps-3 pb-2">Please fill in your Email address to complete your order.</p>
                            </div>
                            <div class="mb-6">
                                <label for="success" class="block ps-3 mb-2 text-sm font-medium text-[#9D9D9D]">Email Address *</label>
                                <input type="text" id="success" class="placeholder-[#9D9D9DCF] text-sm rounded-full placeholder:ps-3 ps-3 md:mb-3 mb-2 focus:outline-none block w-full py-3 focus:border focus:border-gray-800 border border-transparent" placeholder="Enter Your Email Address">
                                <button class="bg-gradientButton w-full py-3 font-semibold text-xl text-white rounded-full" type="submit">PROCEED</button>
                                {{-- <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Well done!</span> Some success message.</p> --}}
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
