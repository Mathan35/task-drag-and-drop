@extends('layouts.app')
@section('content')

    <div class=" container min-screen-lg mx-auto">
        <div class="bg-gray-100 border border-gray-300 rounded shadow-sm py-10 my-10 px-5">
            <a href="{{route('add-task')}}">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-md px-5 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add task</button>
            </a>

            <div>
                <h2 class="text-lg font-sans font-medium text-blue-500 px-2 py-1">Tasks</h2>
                <div class="overflow-x-auto relative">
                    <livewire:task /> 
                </div>

            </div>
        </div>
    </div>

@endsection