<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowButton extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Stop trying to control. --}}
                <button wire:click="$emit('btnClicked','ok')"> this is a button </button>
            </div>
        blade;
    }
}
