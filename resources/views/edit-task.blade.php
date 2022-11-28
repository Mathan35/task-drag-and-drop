@extends('layouts.app')
@section('content')

    <div class=" container min-screen-lg mx-auto">
        <div class="bg-gray-100 border border-gray-300 rounded shadow-sm py-10 my-10 px-5">

            @if(session('status'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Success alert!</span> {{ session('status') }}.
                    </div>
                </div>
            @endif
            <a href="/">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-md px-5 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View task</button>
            </a>

            <div class="">
                <h2 class="text-lg font-sans font-medium text-blue-500 px-2 py-1">Update Task</h2>

                <form action="{{route('update-task', $task->id)}}" method="POST">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task name</label>
                        <input type="text" value="{{$task->name}}" id="" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-blue-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </div>
    </div>

@endsection