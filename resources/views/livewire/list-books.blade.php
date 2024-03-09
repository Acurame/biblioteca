<section class="container">
    <header class="title">
        <h1>Libros en <span>existencia</span></h1>
    </header>

    <div class="table">
        <table>
            <thead class="thead-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Titulo</th>
                    <th>Edicion</th>
                    <th>Fecha de Publicasion</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Categoria</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $book)
                <tr>
                    <td>$book->code</td>
                    <td>$book->title</td>
                    <td>$book->edition</td>
                    <td>$book->publicationDate</td>
                    <td>$book->author</td>
                    <td>$book->edition</td>
                    <td>$book->categorie</td>
                    <td>$book->state</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
