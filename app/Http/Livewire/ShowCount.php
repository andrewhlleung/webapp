<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowCount extends Component
{
    public $count=0;
    protected $listeners = ['btnClicked' => 'incrementCount'];
    
    public function incrementCount($msg)
    {
        $this->count = $msg;
    }
 
    public function render()
    {
        return <<<'blade'
            <div>
            {{$this->count}}
                {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
            </div>
        blade;
    }
}
