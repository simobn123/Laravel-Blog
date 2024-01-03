@extends('layouts.app')
@section('content')

    <!---- Hero ---->

    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcome to my blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-3 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

    <!---- How to be an expert ---->

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h1 class="font-bold text-gray-700 text-4xl uppercase">how to be an expert in 2023</h1>
            <p class="font-bold text-gray-600 text-xl pt-2">you can find here all the programmings languages .</p>
            <p class="py-4 text-gray-500 text-sm leading-5">It is very important for the customer to pay attention to the adipiscing process. May he please his pain with hatred, with all his pleasure?</p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/">Read More</a>
        </div>
    </div>

    <!---- blog categories ----->
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-3xl py-2">UX Design thinking</div>
            <div class="font-bold text-3xl py-2">Programming languages</div>
            <div class="font-bold text-3xl py-2">Graphic  Design</div>
            <div class="font-bold text-3xl py-2">Full-Stack development</div>
        </div>
    </div>

    <!--- recent post ---->
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">It is very important for the customer to pay attention to the adipiscing process. Love and pain are never an option, because by rejecting the truth of the truth, the pain itself is the love, it will result in a gain. No one flees from the gain of the mind's convenience, nor do they know that those who are enlightened will further criticize the repudiation of life?</p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block mx-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-sm gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/"></a>PHP</li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/"></a>Programming</li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/"></a>Languages</li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/"></a>Backend</li>
                </ul>
                <h3 class="text-l py-10 leading-6 ">
                It is very important for the customer to pay attention to the adipiscing process. I would like to open the harsher ones, to assume the pain and pain of the pain of the mistake of choosing and to accept it, training in this very born hatred of duties, the choice of things that are the times of life's pleasure! With lust, pain confuses exercise itself, born of praise, which they often reject for the pleasures of the life of truth..
                </h3>
                <a class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block" href="/">Read More</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
        </div>
    </div>
@endsection
