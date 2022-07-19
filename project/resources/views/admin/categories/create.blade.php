<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-end m-2 p-2">
        <a href="{{  route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-lg">View all categories</a>
      </div>
      <div class="m-2 p-2 bg-slate-100 rounded">
        <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
            <div class="mt-1">
              <input type="text" id="name" name="name" class="block w-full transition ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal duration-150 sm:text-sm sm:leading-5" />
            </div>
          </div>
          <div class="sm:col-span-6">
            <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
            <div class="mt-1">
              <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
            </div>
          </div>
          <div class="sm:col-span-6 pt-5">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <div class="mt-1">
              <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm "></textarea>
            </div>
          </div>
          <div class="mt-6">
            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
          </div>
        </form>
      </div>            
    </div>
  </div>
</x-admin-layout>
