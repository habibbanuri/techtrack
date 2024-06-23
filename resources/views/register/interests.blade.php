<div class="mb-2 text-3xl text-center font-bold text-gray-800">Choose your interest</div>
<div class="mb-8 text-base text-center font-medium text-gray-500">Please choose a tech field from the given options</div>

<ul class="flex flex-col space-y-6">
    <li>
        <input type="radio" wire:model="state.interest" id="web-dev" name="interest" value="web_development"
            class="hidden peer" />
        <label for="web-dev"
            class="inline-flex items-center justify-between w-full py-4 px-6 text-gray-500 bg-gray-50 border shadow-sm rounded-xl cursor-pointer  peer-checked:border-blue-500 peer-checked:text-blue-500 ">
            <div class="flex flex-col space-y-2">
                <div class="w-full text-xl font-bold ">
                    Web Development
                </div>
            </div>
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z">
                </path>
            </svg>

        </label>
    </li>
    <li>
        <input type="radio" wire:model="state.interest" id="app-dev" name="interest" value="app_development"
            class="hidden peer" />
        <label for="app-dev"
            class="inline-flex items-center justify-between w-full py-4 px-6 text-gray-500 bg-gray-50 border shadow-sm rounded-xl cursor-pointer  peer-checked:border-blue-500 peer-checked:text-blue-500 ">
            <div class="flex flex-col space-y-2">
                <div class="w-full text-xl font-bold ">
                    App Development
                </div>
            </div>
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z">
                </path>
            </svg>

        </label>
    </li>
    <li>
        <input type="radio" wire:model="state.interest" id="graphic-design" name="interest" value="graphic_designing"
            class="hidden peer" />
        <label for="graphic-design"
            class="inline-flex items-center justify-between w-full py-4 px-6 text-gray-500 bg-gray-50 border shadow-sm rounded-xl cursor-pointer  peer-checked:border-blue-500 peer-checked:text-blue-500 ">
            <div class="flex flex-col space-y-2">
                <div class="w-full text-xl font-bold">
                    Graphic Designing
                </div>
            </div>
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z">
                </path>
            </svg>

        </label>
    </li>
    <li>
        <input type="radio" wire:model="state.interest" id="ai" name="interest" value="artificial_intelligence"
            class="hidden peer" />
        <label for="ai"
            class="inline-flex items-center justify-between w-full py-4 px-6 text-gray-500 bg-gray-50 border shadow-sm rounded-xl cursor-pointer  peer-checked:border-blue-500 peer-checked:text-blue-500 ">
            <div class="flex flex-col space-y-2">
                <div class="w-full text-xl font-bold">
                    Artificial Intelligence
                </div>
            </div>
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z">
                </path>
            </svg>

        </label>
    </li>

</ul>
