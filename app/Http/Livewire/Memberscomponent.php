<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Memberscomponent extends Component
{
    public function openModal()
    {
        $this->dispatchBrowserEvent('open-modal');
    }
    public function render()
    {
        return view('livewire.memberscomponent');
    }
}
