<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modals extends Component
{
    protected $listeners = ['openModal', 'closeModal'];

    public function openModal()
    {
        $this->dispatchBrowserEvent('open-modal');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        return view('livewire.modals');
    }
}
