<div>
    @if (session()->has('message'))
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success alert!</span> {{ session('message') }}.
            </div>
        </div>
    @endif

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th></th>
                <th scope="col" class="py-3 px-6">
                    Task name
                </th>
        
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody wire:sortable="updateTaskPriority">
            
            @foreach($tasks as $task)
                <tr  wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td wire:sortable.handle class=" w-6 text-center px-4"><i class='fas fa-arrows-alt'></i></td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$task->name}}
                    </th>
                    
                    <td class="py-4 px-6">
                        <div class="flex space-x-4">
                            <a href="{{route('edit-task', $task->id)}}">
                                <i class='fas fa-edit text-white bg-blue-600 px-2 py-2.5 rounded-md'></i>
                            </a>
                            <a wire:click="deletTask({{ $task->priority }})">
                                <i class='fas fa-trash-alt text-white bg-red-600 px-2 py-2.5 rounded-md'></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
