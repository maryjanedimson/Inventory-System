<x-guest-layout>
    <div class="mb-7">
        <h1 class="text-2xl font-extrabold tracking-tight text-white">Create your account</h1>
        <p class="mt-2 text-sm leading-6 text-violet-100">Set up your workspace to start managing stock.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label class="text-sm font-semibold text-white" for="name" value="Full name" />
            <x-text-input id="name" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500" type="text" name="name" placeholder="John Doe" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label class="text-sm font-semibold text-white" for="company_code" value="Company code" />
            <x-text-input id="company_code" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500" type="text" name="company_code" placeholder="Optional" :value="old('company_code')" autocomplete="organization" />
            <x-input-error :messages="$errors->get('company_code')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="text-sm font-semibold text-white" for="email" value="Email address" />
            <x-text-input id="email" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500" type="email" name="email" placeholder="you@example.com" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-sm font-semibold text-white" for="password" value="Password" />

            <x-text-input id="password" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500"
                            type="password"
                            name="password"
                            placeholder="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="text-sm font-semibold text-white" for="password_confirmation" value="Confirm password" />

            <x-text-input id="password_confirmation" class="mt-2 block h-11 w-full rounded-lg border-stone-300 bg-white px-3 text-sm text-black shadow-sm focus:border-amber-500 focus:ring-amber-500"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-7">
            <x-primary-button class="h-11 w-full justify-center rounded-lg bg-green-600 text-sm font-bold normal-case tracking-normal text-white shadow-none hover:bg-green-700 focus:bg-green-700 focus:ring-green-300">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <p class="mt-7 text-center text-sm text-violet-100">
        Already have an account?
        <a href="{{ route('login') }}" class="font-bold text-white underline hover:text-violet-100">Sign in</a>
    </p>
</x-guest-layout>
