<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        
        <div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
          
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        <form class=" max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="">
            <div>
                <x-jet-label class="block text-sm text-gray-00" for="email" value="{{ __('Email') }}" />
                <x-jet-input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email"  type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="block text-sm text-gray-600" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex mt-4 items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            </div>
        </form>
        </div>
    </div>
</div></div>
    </x-jet-authentication-card>
</x-guest-layout>
