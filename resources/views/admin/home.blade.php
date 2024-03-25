<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    {{-- <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <x-dropdown-link href="{{ route('logout') }}"
                 @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form> --}}

    <form method="POST" action="{{ route('logout') }}" >
        @csrf
        <input type="submit" value="logout">
    </form>


</x-app-layout>
