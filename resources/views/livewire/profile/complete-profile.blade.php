<div>

    @if ($currentStep === 1)
        <h1 class="mt-8 text-gray-600 text-3xl font-bold">
            {{ $user->name }} {{ $user->last_name }}
        </h1>
        <h2 class="mb-3 mt-0 text-gray-500 text-2xl font-bold">
            Congratulations on Your Decision to Serve!
        </h2>
        <p class="text-gray-500 font-bold">
            You're almost ready to start your mission journey! Let's complete your profile. First, let us know if you’ll
            be serving as an Elder or a Sister.
        </p>
        <div class="max-w-md mx-auto my-8">
            <select id="gender" wire:model="gender"
                class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="" class="">Select your title</option>
                <option value="Elder">Elder</option>
                <option value="Sister">Sister</option>
            </select>
            @error('gender')
                <span class="mt-3 text-red-500 text-base">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-8 md:flex md:justify-end">
            <button wire:click="nextStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Next</button>
        </div>
    @elseif ($currentStep === 2)
        <h1 class="mt-8 text-gray-600 text-3xl font-bold">
            {{ $gender }} {{ $user->last_name }}
        </h1>
        <p class="mt-4 text-gray-500 font-bold">
            Now you must specify what the name you are going to have in your missionary tag will be.
        </p>
        <div class="max-w-md mx-auto my-8">
            <input wire:model='tagName' class="rounded-md border-0 bg-neutral-200 px-8 font-bold text-center"
                type="text" aria-label='{{ $gender }} {{ $user->last_name }}'
                placeholder="{{ $gender }} {{ $user->last_name }}"
                value="{{ $gender }} {{ $user->last_name }}" />
        </div>
        <div class="mb-8 md:flex md:justify-between ">
            <button wire:click="previousStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Previus</button>
            <button wire:click="nextStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Next</button>
        </div>
    @elseif ($currentStep === 3)
        <h1 class="my-8 text-gray-600 text-3xl font-bold">
            {{ $tagName }}
        </h1>
        <h2 class="my-8 text-gray-500 text-2xl font-bold">
            Now it is necessary to know a little about your testimony when you arrive at the mission.
        </h2>
        <p class="text-gray-500 font-bold">
            This is a fun part of this platform, being able to share valuable information that can help others know how
            wonderful it is to serve in God's name!
        </p>
        <div class="max-w-md mx-auto my-8">
            @error('bio')
                <span class="mb-3 text-red-500 text-base">{{ $message }}</span>
            @enderror
            <textarea wire:model='bio' class="rounded-md border-0 bg-neutral-200 px-8 py-4 font-semibold text-left w-full h-32"
                aria-label='' placeholder="Write your testimony here..."></textarea>
        </div>

        <div class="mb-8 md:flex md:justify-between ">
            <button wire:click="previousStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Previus</button>
            <button wire:click="nextStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Next</button>
        </div>
    @elseif ($currentStep === 4)
        <h2 class="my-8 text-gray-500 text-3xl font-bold">
            Validation step.
        </h2>
        <p class="text-gray-500 font-bold">
            In this step, it is necessary to validate that you were assigned to a real mission, in the field below write
            the reference of who will be your first companion on the mission.
        </p>
        <div class="max-w-md mx-auto my-8">
            @error('trainerId')
                <span class="mb-3 text-red-500 text-base">{{ $message }}</span>
            @enderror
            <input wire:model='trainerId' class="rounded-md border-0 bg-neutral-200 px-8 font-bold text-center"
                type="text" aria-label='#1-Hunter' placeholder="Type reference Id here..." />
        </div>

        <div class="mb-8 md:flex md:justify-between ">
            <button wire:click="previousStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Previus</button>
            <button wire:click="nextStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Next</button>
        </div>
    @elseif ($currentStep === 5)
        <div class="block rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark">
            <a href="#!">
                <img class="rounded-t-lg" src="{{ $trainer->profile->profile_photo }}"
                    alt="" />
            </a>
            <div class="p-6 text-surface dark:text-white">
                <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                <p class="mb-4 text-base">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
            </div>
        </div>
        <div class="mb-8 md:flex md:justify-between ">
            <button wire:click="previousStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Previus</button>
            <button wire:click="nextStep" class="mt-4 bg-gray-600 text-white px-8 py-2 rounded-md">Next</button>
        </div>
    @endif
</div>
