<div class="mb-4 text-3xl text-center font-bold text-gray-800">Address Information</div>
<div class="text-base text-sky-600 text-center">Suggested companies will be based on this city</div>

<div class="my-3">
    <x-input-label for="city" :value="__('City')" />
    <x-text-input wire:model="state.city" id="city" class="block mt-1 w-full" type="text" name="city"  autofocus  />
    <x-input-error :messages="$errors->get('city')" class="mt-2" />
</div>
