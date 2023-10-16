<?php

namespace App\Livewire;

use Illuminate\Validation\Rules\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $book;

    public function save() {
        $this->validate([
            'book' => [
                'required',
                File::types(['epub'])
                    ->min(1024)
                    ->max(12 * 1024),
            ],
        ]);
    }
    public function render()
    {
        return view('livewire.upload');
    }
}
