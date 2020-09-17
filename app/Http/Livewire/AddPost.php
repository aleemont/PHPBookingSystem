<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddPost extends Component
{
    public $title = "Blank";
    public $content = "Such empty here";
    public function render()
    {
        return view('livewire.add-post');
    }
}
