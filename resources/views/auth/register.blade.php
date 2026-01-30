@extends('layouts.app')

@section('title', 'Register - ' . config('app.name'))

@section('content')
<main class="w-full max-w-md p-6 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A] shadow-sm">
    <h1 class="mb-4 text-lg font-medium">Register</h1>

    @if ($errors->any())
        <div class="mb-4 p-3 rounded-sm bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 text-sm">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                class="w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC]"
            />
        </div>

        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                class="w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC]"
            />
        </div>

        <div>
            <label for="password" class="block text-sm font-medium mb-1">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                required
                autocomplete="new-password"
                class="w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC]"
            />
            <p class="mt-1 text-xs text-[#706f6c] dark:text-[#A1A09A]">Minimum 8 characters.</p>
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium mb-1">Confirm password</label>
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required
                autocomplete="new-password"
                class="w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC]"
            />
        </div>

        <button
            type="submit"
            class="w-full px-5 py-2 bg-[#1b1b18] dark:bg-[#EDEDEC] text-white dark:text-[#1b1b18] rounded-sm font-medium hover:opacity-90"
        >
            Register
        </button>
    </form>

    <p class="mt-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
        Already have an account? <a href="{{ route('login') }}" class="text-[#f53003] dark:text-[#FF4433] underline underline-offset-2">Log in</a>
    </p>
</main>
@endsection
