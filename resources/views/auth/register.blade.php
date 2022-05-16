<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />


        <div class="h-screen font-sans register bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">

        <form class=" max-w-xl m-4 py-4 px-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label class="block text-sm text-gray-600" for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label class="block text-sm text-gray-600" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label class="block text-sm text-gray-600" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label class="block text-sm text-gray-600" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex mt-4 justify-between">
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>

        </div>
        </div>
    </div> 
</div>

    </x-jet-authentication-card>
</x-guest-layout>
