<div id="fade-in-card" class="h-screen flex justify-center items-center ">
    <div class=" fade-in-card relative border rounded-md drop-shadow-md px-2 bg-gray-100 w-4/5 md:w-3/5 lg:w-3/5 flex row justify-center items-center">
        <div class="static text-center md:w-3/5">
            {{ $slot }}
        </div>
    </div>
</div>

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
    document.addEventListener('livewire:navigated', function () {
        //Ensure that the fade-in effect is applied both on load and after livewire interactions.
        function showFadeInCards() {
            document.querySelectorAll('.fade-in-card').forEach(element => {
                element.classList.add('show');
            })
        }

        //On initial load
        showFadeInCards();

        //After Livewire Re-renders or interacts with the component.
        Livewire.hook('message.processed', (message, component) => {
            showFadeInCards();
        })
    });
</script>