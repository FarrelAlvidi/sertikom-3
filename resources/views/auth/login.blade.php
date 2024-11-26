<x-guest-layout>
    {{--  <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1 class="text-[1.6rem] font-semibold mb-2">Selamat Datang di Perpustakaan SMK Pesat ITXPRO</h1>
    <h4>Harap Login terlebih dahulu</h4>
    <form method="POST" action="{{ route('login') }}" class="mt-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>  --}}

    <div class="flex flex-col md:flex-row items-center gap-10">
        <div class="bg-sky-600 w-1/2 h-[60vh] items-center flex justify-center">
            <img src="../img/buku.png" width="300" class="-rotate-12" alt="">
        </div>
        <div class="">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <h1 class="text-[1.6rem] font-semibold mb-2">Selamat Datang di <br> Perpustakaan SMK Pesat ITXPRO</h1>
            <h4>Harap Login terlebih dahulu</h4>
            <form method="POST" action="{{ route('login') }}" class="mt-5">
                @csrf
                <div class="flex flex-col ">
                    <label for="email" class="text-md text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="border-0 border-b-[1px] border-gray-300 focus:ring-0 placeholder:text-gray-400/80 px-0"
                        placeholder="Placeholder@gmail.com">
                </div>
                <div class="flex flex-col mt-5">
                    <label for="email" class="text-md text-gray-600 ">Password</label>
                    <input type="password" id="password" name="password"
                        class="border-0 border-b-[1px] border-gray-300 focus:ring-0 placeholder:text-gray-400/80 px-0"
                        placeholder="••••••">
                </div>
                <div class="flex justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class=" text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <x-primary-button class="mt-5">
                    {{ __('Log in') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-guest-layout>
