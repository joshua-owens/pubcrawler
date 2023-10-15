<?php

namespace App\Livewire;

use Livewire\Component;

class Library extends Component
{
    public function render()
    {
        return view('livewire.library', [
            'books' => [
                (object) ['title' => 'Test Book'],
            ],
        ]);
    }
}
