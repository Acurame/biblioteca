<section class="container">
    <header class="title">
        <h1>Libros en <span>existencia</span></h1>
    </header>


    <div class="input-group mb-4">
        <div class="px-4">
            <button class="btn btn-create" data-toggle="modal" data-target="#exampleModal">Ingresar Libro</button>
        </div>
        <div class="input-group-prepend">
            <button class="btn btn-search" type="button">Buscar</button>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                </div>
                <div class="modal-body">
                    <div class="m-4">
                        <label for="">Codigo:</label>
                        <input type="text" class="form-control" name="code" id="">
                    </div>
                    <div class="m-4">
                        <label for="">Titulo:</label>
                        <input type="text" class="form-control" name="code" id="">
                    </div>
                    <div class="m-4">
                        <label for="">edicion:</label>
                        <input type="text" class="form-control" name="code" id="">
                    </div>
                    <div class="m-4">
                        <label for="">Fecha de publicasion:</label>
                        <input type="date" class="form-control" name="code" id="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn">Guardar</button>
                </div>
            </div>
        </div>
    </div>

</section>
