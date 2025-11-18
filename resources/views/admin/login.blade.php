@extends('layouts.app')

@section('title', 'Admin Login - SurVail')
@section('description', 'Secure admin access for SurVail Protection & Investigation Services.')

@section('content')
<section class="py-20 bg-gray-100">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-3xl shadow-xl p-8">
                <div class="text-center mb-8">
                    <p class="text-sm font-semibold tracking-wide text-survail-green uppercase mb-2">Admin Panel</p>
                    <h1 class="text-3xl font-bold text-gray-900">Sign in to continue</h1>
                </div>

                @if(session('status'))
                    <div class="mb-4 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 rounded-lg bg-red-50 border border-red-100 text-red-700 px-4 py-3">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <input type="text" name="username" id="username" value="{{ old('username') }}"
                               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent @error('username') border-red-500 @enderror"
                               placeholder="Enter admin username" required>
                        @error('username')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" id="password"
                               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-survail-green focus:border-transparent @error('password') border-red-500 @enderror"
                               placeholder="Enter secure password" required>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="w-full bg-survail-green hover:bg-survail-green-dark text-white font-semibold py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
