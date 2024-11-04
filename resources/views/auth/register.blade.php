<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div>
                <!-- Initial Dropdown -->
                    <x-label for="city" value="{{ __('city') }}" />
                    <select id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city">

                        <option value="" disabled selected>Select a location</option>

                        <option value="wellamadama">Wellamadama</option>
                        <option value="janaraja-mawatha">Janaraja Mawatha</option>
                        <option value="rassandeniya">Rassandeniya</option>
                        <option value="matara-town">Matara Town</option>
                        <option value="devinuwara">Devinuwara</option>
                        <option value="welipitiya">Welipitiya</option>
                        <option value="dikwella">Dikwella</option>
                        <option value="kirinda">Kirinda - Puhulwella</option>
                        <option value="malimbada">Malimbada</option>
                        <option value="matara">Matara</option>
                        <option value="akuressa">Akuressa</option>
                        <option value="kamburupitiya">Kamburupitiya</option>
                        <option value="weligama">Weligama</option>
                        <option value="pitabeddara">Pitabeddara</option>
                        <option value="athuraliya">Athuraliya</option>
                        <option value="hakmana">Hakmana</option>
                        <option value="thihagoda">Thihagoda</option>
                        <option value="mulatiyana">Mulatiyana</option>
                        <option value="kotapola">Kotapola</option>
                        <option value="pasgoda">Pasgoda</option>

                    </select>
            </div>

            <div>
                <x-label for="street" value="{{ __('Street') }}" />
                <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required autofocus autocomplete="street" />
            </div>

            <div>
                <x-label for="phone_number" value="{{ __('Mobile Number') }}" />
                <x-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            </div>

            <div>
                <x-label for="usertype" value="{{ __('I am,') }}" />

                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="usertype" value="2" class="form-radio" required>
                        <span class="ml-2">Selling Foods</span>
                    </label>

                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="usertype" value="0" class="form-radio" required>
                        <span class="ml-2">Buying Foods</span>
                    </label>
                </div>
            </div>


            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
