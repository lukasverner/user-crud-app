<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('labels.user-list') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <table class="table table-sm w-full">
                <thead>
                <tr>
                    <th class="w-1/12 text-left">ID</th>
                    <th class="w-3/12 text-left">Jméno</th>
                    <th class="w-4/12 text-left">E-mail</th>
                    <th class="w-2/12 text-left"></th>
                    <th class="w-2/12 text-left"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="w-1/12 text-left">{{ $user->id }}</td>
                        <td class="w-3/12 text-left">{{ $user->name }}
                            @if ($user->role == 'admin')
                                *
                            @endif
                        </td>
                        <td class="w-4/12 text-left">{{ $user->email }}</td>
                        <td class="w-2/12 text-left">
                            @if (auth()->user()['role'] == 'admin')
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <a href="/users/{{ $user->id }}/edit" class="btn btn-primary py-2 position-relative me-2">Upravit</a>
                                </button>
                            @endif
                        </td>
                        <td class="w-2/12 text-left">
                            @if (auth()->user()['role'] == 'admin')
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-primary py-2 position-relative me-2">Smazat</a>
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
