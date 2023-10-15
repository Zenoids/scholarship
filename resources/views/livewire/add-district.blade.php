<div>
    <h2 class="text-6xl font-bold">Districts</h2>
    <div class="flex flex-col md:flex-row">

        <div class="w-full ">{{ $this->table }}</div>
        <form class="mx-auto md:w-1/3" wire:submit="create">
            {{ $this->form }}

            <button class="bg-white rounded-xl" type="submit">
                Submit
            </button>
        </form>
    </div>


</div>
