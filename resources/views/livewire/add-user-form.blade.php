<div>
    <h2 class="text-6xl font-bold">Users</h2>
    <div class="flex">

        <div class="w-full md:w-1/2">{{ $this->table }}</div>  <form class="mx-auto" wire:submit="create">
            {{ $this->form }}

            <button class="" type="submit">
                Submit
            </button>
        </form>
    </div>


</div>
