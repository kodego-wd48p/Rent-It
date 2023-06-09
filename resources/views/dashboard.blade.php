<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rent-IT') }}
        </h2>
    </x-slot>
    <div style="margin-top: 25px;"> 
        
<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px">
        @if(Auth::check() && Auth::user()->role == 'Agent')
        <li class="mr-2">
            <a href="{{route('listings.index')}}" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">SHOW LISTINGS</a>
        </li>
        <li class="mr-2">
            <a href="/messages" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">MESSAGES</a>
        </li>
        @else
        <li class="mr-2">
            <a href="/messages" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">MESSAGES</a>
        </li>
        @endif
    </ul>
</div>

</div>   
</x-app-layout>
