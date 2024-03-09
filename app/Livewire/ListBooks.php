<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class ListBooks extends Component
{
    public function render()
    {
        $title_page = 'Inventario de Libros';

        $list = Book::all();

        return view('livewire.list-books', [
            'list' => $list,
        ])->layout('layouts.admin_lte', [
            'title_page' => $title_page,
        ]);
    }
}
