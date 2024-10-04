<x-app-layout>
    @if (!$isProfileComplete)
        <x-fade-in-card>
            @livewire('profile.complete-profile')
        </x-fade-in-card>
    @else
        <div>
            <x-missionary-tag :tagName="$profile->tagName" :mission="$profile->mission->country_code"/>
        </div>
    @endif
</x-app-layout>
