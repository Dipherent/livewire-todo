@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

         

            <div class="w-full p-6">
                <p class="text-gray-700">
                    
                    @livewire('todos')
                </p>
            </div>
        </section>
    </div>
    <p class="my-8 mx-8 text-left text-base leading-6 text-gray-400">
        &copy; 2020 A work by Ameen Sanad. All rights reserved.
      </p>
</main>

@endsection

