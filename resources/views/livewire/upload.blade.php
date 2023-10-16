<div>
    <a class="absolute top-4 right-4" href="/" wire:navigate>
        @livewire('close-icon')
    </a>
    <div class="flex h-screen">
        <div class="m-auto">
            <form wire:submit.prevent="save">
                <input type="file" wire:model="book">

                @error('book') <span class="error">{{ $message }}</span> @enderror

                <button type="submit">Upload Book</button>
            </form>
        </div>
    </div>
</div>
