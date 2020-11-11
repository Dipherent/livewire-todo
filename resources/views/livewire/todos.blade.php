
<div x-data="{ open: false }" >
 
            <div >
                
                <div class="mt-1 relative rounded-md shadow-sm">
                <input wire:keydown.enter="addTodo"  type="text" name="addTodo" class="form-input block w-full pr-10 border-gray-300 text-gray-900 placeholder-gray-300 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5" placeholder="What's in your list?" 
                   wire:model="title" >
                    @if ($errors->has('title'))
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        </div>
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('title')}}</p>
                    @endif
                 
                   
                
                    
            </div>
            <div>
                <p class="mt-3 text-sm text-gray-400">(press 'Enter' to add to list)</p>
            </div>

            {{-- <button wire:click="addTodo"  type="submit" class="my-6 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-50 focus:outline-none focus:borde-blue-300 focus:shadow-outlin-gray active:b-gray-200 transition ease-in-out duration-150">
                Add to list
            </button> --}}

            <div class="bg-gray-100 h-1 my-4 shadow-lg" ></div>
            @foreach ($todos as $todo)
                <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">

                  <div class=" flex items-center justify-between ml-1 mt-4">
                    <input type="checkbox" wire:change = "toggleTodo({{$todo->id}})" {{$todo->completed ? 'checked' : ''}} class="form-checkbox mr-4 h-6 w-6 text-blue-600 transition duration-150 ease-in-out">

                  <p class="text-normal leading-5 text-gray-700 font-medium {{$todo->completed ? 'bg-green-300 px-2 py-1 rounded-md' : ''}}">
                     <a href="#">{{$todo->title}}</a> 
                    </p>
                  </div>
                  
                  
                  <div class="ml-4 mt-4 flex-shrink-0">
                    <span class="inline-flex rounded-md shadow-sm">
                      <button @click="open = true" type="button" class="relative inline-flex items-center px-2 py-1 border border-transparent text-xs leading-5 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:shadow-outline-red focus:border-red-700 active:bg-red-700"
                      ">
                        Delete
                      </button>
                    </span>
                  </div>

                            <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<div x-show="open"  class="fixed z-10 inset-0 overflow-y-auto">
    <div  class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!--
        Background overlay, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div   class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-black opacity-25"></div>
      </div>
  
      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
      <!--
        Modal panel, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div @click.away="open = false" class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
          <button @click="open = false" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150" aria-label="Close">
            <!-- Heroicon name: x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <!-- Heroicon name: exclamation -->
            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
              Delete from list?
            </h3>
            <div class="mt-2">
              <p class="text-sm leading-5 text-gray-500">
                Are you sure you want to delete this iteam? It will be permanently removed from our servers forever. This action cannot be undone.
              </p>
            </div>
          </div>
        </div>
        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
            <button wire:click="deleteTodo({{$todo->id}}) type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Delete
            </button>
          </span>
          <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            <button @click="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Cancel
            </button>
          </span>
        </div>
      </div>
    </div>
  </div>
  


                </div>
              </div>
            @endforeach
            
{{--   
            <script>
                let todoUpdated = '';

                function updateTodoPrompt(title){
                    event.preventDefault();
                    todoUpdated = '';
                    const todo = prompt('Update Todo', title);

                    if (todo === null || todo.trim() === ''){
                        console.log('cancel or empty');
                        todoUpdated = '';
                        return false;
                    }

                    todoUpdated = todo;
                    return true;
                }
            </script> --}}
</div>
