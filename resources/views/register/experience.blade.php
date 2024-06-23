<div class="mb-2 text-2xl text-center font-bold text-gray-800">Tell us something about yourself</div>
<div class="mb-8 text-base text-center font-medium text-gray-500">This information helps for better suggestions for your career</div>

<div class="mb-3">
    <x-input-label for="education" :value="__('What is your highest education?')" />
    {{-- <x-text-input wire:model="state.education" id="education" class="block mt-1 w-full" type="text" autofocus /> --}}
    <select wire:model="state.education" id="education" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
        <option value="Matric">Matric</option>
        <option value="FSC">FSC</option>
        <option value="BS">BS</option>
        <option value="MS">MS</option>
    </select>
    <x-input-error :messages="$errors->get('education')" class="mt-2" />
</div>

<div class="mb-3">
    <x-input-label for="experience" :value="__('Any previous experience? e.g. HTML, CSS, PHP, JS etc ...')" />
    <x-text-input wire:model="state.experience" id="experience" class="block mt-1 w-full" type="text" autofocus />
    <x-input-error :messages="$errors->get('experience')" class="mt-2" />
</div>

<div class="mb-3">
    <x-input-label for="career_goal" :value="__('What are your long-term career goals? e.g. Full stack Engineer, Data Scientist etc...')" />
    <x-text-input wire:model="state.career_goal" id="career_goal" class="block mt-1 w-full" type="text"  autofocus />
    <x-input-error :messages="$errors->get('career_goal')" class="mt-2" />
</div>

<div class="mb-3">
    <x-input-label for="interested_in_new_technologies" :value="__('Are you interested in learning new technologies?')" />
    {{-- <x-text-input wire:model="state.interested_in_new_technologies" id="interested_in_new_technologies" class="block mt-1 w-full" type="text"  autofocus /> --}}
    <select wire:model="state.interested_in_new_technologies" id="interested_in_new_technologies" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>
    <x-input-error :messages="$errors->get('interested_in_new_technologies')" class="mt-2" />
</div>
