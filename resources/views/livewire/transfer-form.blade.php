<div>
    <form wire:submit="submit">
        {{ $this->form }}
        {{ $this->deleteAction }}
        <button type="submit">
            Submit
        </button>
    </form>


    <x-filament-actions::modals />
</div>
