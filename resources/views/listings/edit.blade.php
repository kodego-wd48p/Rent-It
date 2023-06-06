<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rent-IT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <form action="{{route('listings.update', $listing)}}" method="POST">
                    @method('PUT')
                    @csrf 
                    <div class="mb-2">
                        <label for="property_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property Name</label>
                        <input type="text" value="{{$listing->property_name}}" id="property_name" name="property_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-2">
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <input type="text" value="{{$listing->location}}" id="location" name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-2">
                        <label for="floor_area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Floor Area</label>
                        <input type="text" value="{{$listing->floor_area}}" id="floor_area" name="floor_area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-2">
                        <label for="rental_fee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rental Fee</label>
                        <input type="text" value="{{$listing->rental_fee}}" id="rental_fee" name="rental_fee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-2">
                        <label for="other_features" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Features</label>
                        <input type="text" value="{{$listing->other_features}}" id="other_features" name="other_features" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <button type="submit" class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Listing Tab -->
    <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="addlisting" role="tabpanel" aria-labelledby="profile-tab">  
        
    </div>     -->
</x-app-layout>
