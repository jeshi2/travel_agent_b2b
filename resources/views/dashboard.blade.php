<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div>
                    <h2>Rooms available for booking!</h2>
                    <div class="row">
                        @foreach($accommodations as $accommodations)
                        <div class="col-md-4">
                            <div class="mb-4 shadow-sm ">
                                <img src="{{$accommodations->image}}">
                                <div>
                                    <h3>{{ $accommodations->room_name }}</h3>
                                    <p>{{$accommodations->description }}</p>
                                    <p>Price: {{ $accommodations->standard_rack_rate }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>   
            </div>
        </div>
    </div>
</x-app-layout>
