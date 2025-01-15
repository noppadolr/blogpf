<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class PostList extends Component
{
    #[Title('Posts')]
    public function render()
    {
        return view('livewire.post-list');
    }
}
