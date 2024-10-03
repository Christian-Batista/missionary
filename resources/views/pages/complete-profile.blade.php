<x-app-layout>
   <x-fade-in-card>
       @if (!$profileCompleted)
           @livewire('profile.complete-profile')
       @else
           @php
               $mission = 'Santiago, Dominican Republic';
           @endphp
           <x-missionary-tag :tagName="$tagName" :mission="$mission" />
       @endif
   </x-fade-in-card>
</x-app-layout>

<script>
   document.addEventListener('livewire:load', function () {
       Livewire.on('profileCompleted', () => {
           @this.set('profileCompleted', true); // Esto ahora actualizará la propiedad en Livewire
       });
   });
</script>
