<div>
    <a class="absolute top-4 right-4" href="/" wire:navigate>
        @livewire('close-icon')
    </a>
    <div class="flex h-screen">
        <div class="m-auto flex flex-col w-1/2 space-y-1">
            @error('book')
            <div class="alert alert-error">
                <span class="error">{{ $message }}</span>
            </div>
            @enderror
            <form class="flex flex-col space-y-1" wire:submit.prevent="save">
                <input
                    type="file"
                    class="file-input file-input-bordered file-input-primary w-full"
                    wire:model="book"
                />
                <button class="btn btn-primary" type="submit">Upload Book</button>
            </form>
        </div>
    </div>
</div>
