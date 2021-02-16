@extends('/layout/inicio')
<h1>Web1</h1>
@section('container')
    <h3 class="text-center">Inserta en la BD</h3>

    <div class="container">
        <div class="row justify-content-center">
            <form action="" method="POST">
                @csrf
                <p>Nombre</p>
                <input type="text" name="nombre">
                <p>Apellidos</p>
                <input type="text" name="apellidos">
                <p>NIF</p>
                <input type="text" name="nif">
                <br>
                <button type="submit">Guarda</button>
            </form>
        </div>
    </div>
@endsection