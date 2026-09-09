<x-guest-layout>
    <div class="mb-7">
        <h1 class="text-2xl font-extrabold tracking-tight text-white">Welcome back</h1>
        <p class="mt-2 text-sm leading-6 text-violet-100">Sign in to manage your inventory.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-5" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label class="text-sm font-semibold text-white" for="email" value="Email address" />
            <x-text-input id="email" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500" type="email" name="email" placeholder="you@example.com" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-sm font-semibold text-white" for="password" value="Password" />

            <x-text-input id="password" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center text-sm text-violet-100">
                <input id="remember_me" type="checkbox" class="rounded border-stone-300 text-amber-500 shadow-sm focus:ring-amber-500" name="remember">
                <span class="ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-6">
            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-violet-100 hover:text-white" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="mt-3 h-11 w-full justify-center rounded-lg bg-green-600 text-sm font-bold normal-case tracking-normal text-white shadow-none hover:bg-green-700 focus:bg-green-700 focus:ring-green-300">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <div class="my-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-wider text-violet-100">
        <span class="h-px flex-1 bg-violet-400"></span>
        <span>or</span>
        <span class="h-px flex-1 bg-violet-400"></span>
    </div>

    <a href="{{ route('google.redirect') }}" class="flex h-11 w-full items-center justify-center gap-2 rounded-lg border border-stone-300 bg-white text-sm font-bold text-slate-700 shadow-sm hover:bg-stone-50">
        <span class="text-base font-extrabold text-[#4285f4]">G</span>
        Continue with Google
    </a>

    <p class="mt-7 text-center text-sm text-violet-100">
        Don't have an account?
        <a href="{{ route('register') }}" class="font-bold text-white underline hover:text-violet-100">Create account</a>
    </p>
</x-guest-layout>
