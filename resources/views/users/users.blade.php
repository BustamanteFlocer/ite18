<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @if ( session ('status'))
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success alert!</span> {{ session('status') }}
            </div>
    </div>
    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="float-left">
                        {{  $header }}
                    </h2>
                    <a href="{{ url('users/add') }}">
                        <button class="float-right block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Add Users
                        </button>
                    </a>
                         <table class="table-auto w-full">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                          <tr>
                            <td>{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>

                            <td class="text-center">
                                <a href="{{ url('users/update/2') }}">
                                <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Update</button>
                                </a>
                                <button class="rounded-full bg-sky-500 p-1">Delete</button>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </div>
            </div>
        </div>
    </div>

</x-app-layout>
