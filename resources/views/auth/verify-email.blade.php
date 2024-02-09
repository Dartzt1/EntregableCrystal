<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="http://entregablecrystalpass.test.org/">
                <img class="logo" src="{{ asset('vendor/adminlte/dist/img/Crystal.png') }}" style="width: 150px;" alt="Crystal">
            </a>
        </x-slot>

        <div class="flex flex-col items-center justify-center">
            <div class="mb-4 text-sm text-center text-gray-600 dark:text-gray-400">
                {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div class="mb-4">
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf

                <button type="submit" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
