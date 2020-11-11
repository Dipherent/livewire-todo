<div>
    <div>
        <div>
          <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Publish Posts
            </h3>
          </div>
          <div class="mt-6 sm:mt-5">
           
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        Title
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                    <input wire:model = "title" type="text" id="title" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                        </div>
                </div>
    
                <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="content" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                            Content
                        </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">
                        <textarea wire:model = "content" id="content" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                        </div>
                    
                            <p class="mt-2 text-sm text-gray-500">Write a few sentences content</p>
                    </div>
                </div>
    
        
                <div class="mt-8 border-t border-gray-200 pt-5">
                     <div class="flex justify-end">
                
                        <span class="ml-3 inline-flex rounded-md shadow-sm">
                            <button wire:click = "save" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
