<?php

namespace App\Livewire;

use Livewire\Component;

class ListBooks extends Component
{
    public function render()
    {
        $title = '';
        $title_page = 'Inventario de Libros';

        $list = Book::all();

        return view('livewire.list-books')->layout('layouts.admin_lte', [
            'title' => $title,
            'title_page' => $title_page,
        ]);
    }
}
