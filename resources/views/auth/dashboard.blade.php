@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name'))

@section('content')
<main class="w-full max-w-md p-6 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A] shadow-sm text-center">
    <h1 class="mb-2 text-xl font-medium">You are logged in</h1>
    <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A]">Hello, {{ auth()->user()->name }}.</p>

    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button
            type="submit"
            class="inline-block px-5 py-2 border border-[#19140035] dark:border-[#3E3E3A] hover:bg-[#1b1b18] hover:text-white dark:hover:bg-[#EDEDEC] dark:hover:text-[#1b1b18] rounded-sm text-sm font-medium transition-colors"
        >
            Log out
        </button>
    </form>
</main>
@endsection
