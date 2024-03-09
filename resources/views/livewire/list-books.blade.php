<section class="container">
    <header class="title">
        <h1>Libros en <span>existencia</span></h1>
    </header>


    <div class="input-group mb-3">
        <div style="margin-right: 10px;">
            <button class="btn">Ingresar Libro</button>
        </div>
        <div class="input-group-prepend">
            <button class="btn" type="button">Buscar</button>
        </div>
        <input type="text" class="form-control" placeholder="" aria-label="Buscar por materia" aria-describedby="Buscar">
        

    </div>


    <div class="table-continer">
        <table class="table">
            <caption>Listado de libros</caption>
            <thead class="thead">
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
                @if ($list)
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
                @endif
            </tbody>
        </table>
    </div>
</section>
