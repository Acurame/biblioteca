<?php

namespace App\Livewire;

use Livewire\Component;

class PanelInicio extends Component
{
    public function render()
    {
        return view('livewire.panel-inicio')->layout('layouts.admin_lte');
    }
}
