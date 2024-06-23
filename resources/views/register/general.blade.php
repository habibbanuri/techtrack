<div class="mb-4 text-3xl text-center font-bold text-gray-800">General Information</div>
<div class="mb-3">
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input wire:model="state.name" id="name" class="block mt-1 w-full" type="text" name="name" autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<div class="mb-3">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input wire:model="state.email" id="email" class="block mt-1 w-full" type="email" name="email"
        autofocus autocomplete="email" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<div class="mb-3">
    <x-input-label for="city" :value="__('City')" />
    <x-text-input wire:model="state.city" id="city" class="block mt-1 w-full" type="text" name="city"
        autofocus />
    <x-input-error :messages="$errors->get('city')" class="mt-2" />
    <div class="text-base text-sky-600">Suggested companies will be based on this city</div>
</div>

<div class="mb-3">
    <x-input-label for="password" :value="__('Password')" />
    <x-text-input wire:model="state.password" id="password" class="block mt-1 w-full" type="password" name="password"
        autofocus />
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<div class="mb-3">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    <x-text-input wire:model="state.password_confirmation" id="password_confirmation" class="block mt-1 w-full"
        type="password" name="password_confirmation" autofocus />
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>
<a class="mr-2 hover:underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none "
    href="{{ route('login') }}" wire:navigate>
    {{ __('Already have an account?') }}
</a>
