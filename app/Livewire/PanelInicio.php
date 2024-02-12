<?php

namespace App\Livewire;

use Livewire\Component;

class PanelInicio extends Component
{
    public function render()
    {
        $title = '';
        $title_page = 'Panel de inicio';
        return view('livewire.panel-inicio')->layout('layouts.admin_lte',[
            'title' => $title,
            'title_page' => $title_page,
        ]);
    }
}
