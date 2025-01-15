<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class PostForm extends Component
{
    #[Title("Create Post")]
    public function render()
    {
        return view('livewire.post-form');
    }
}
