<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rent-IT') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{route('listings.create')}}">Add Listings</a>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Property name</th>
                                <th scope="col" class="px-6 py-3">Location</th>
                                <th scope="col" class="px-6 py-3">Floor Area</th>
                                <th scope="col" class="px-6 py-3">Rental Fee</th>
                                <th scope="col" class="px-6 py-3">Other Features</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>   
                        </thead>
                        <tbody>
                        @foreach($lists as $list)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$list->property_name}}
                                </th>
                                <td class="px-6 py-4">{{$list->location}}</td>
                                <td class="px-6 py-4">{{$list->floor_area}}</td>
                                <td class="px-6 py-4">{{$list->rental_fee}}</td>
                                <td class="px-6 py-4">{{$list->other_features}}</td>
                                <td class="px-6 py-4"><a href="{{route('listings.edit', $list)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                                <td>
                                    <form method="POST" action="{{route('listings.destroy', $list)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete?')" class="font-medium text-blue-600 dark:text-red-500 hover:underline" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Agents List of Properties to be rented Tab -->
    <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="listings" role="tabpanel" aria-labelledby="settings-tab">
        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="/listings/create">Add Listings</a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            
        </div>
    </div> -->
    
</x-app-layout>
