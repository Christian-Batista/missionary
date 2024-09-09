<x-app-layout>
    <!-- Using the reusable component -->
<x-fade-in-card>

        <h1 class="my-8 text-gray-600 text-2xl font-bold">
            {{ Auth::user()->name }} {{ Auth::user()->last_name }}
            Congratulations on Your Decision to Serve!
        </h1>
        <p class="text-gray-500 font-bold">
            You're almost ready to start your mission journey! Let's complete your profile. First, let us know if you’ll be serving as an Elder or a Sister.
        </p>
        <div class="max-w-md mx-auto my-8">
            <select id="gender" wire:model="gender"
                class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="" class="">Select your title</option>
                <option value="Elder">Elder</option>
                <option value="Sister">Sister</option>
            </select>
            @error('gender')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

</x-fade-in-card>
<style>
    .fade-in-card {
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }
    .fade-in-card.show {
        opacity: 1;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.fade-in-card').forEach(element => {
            element.classList.add('show');
        });
    })
</script>
</x-app-layout>
