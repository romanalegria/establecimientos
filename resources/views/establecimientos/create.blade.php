@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-center mt-4">Registrar Establecimiento</h1>

        <div class="mt-5 row justify-content-center">
            <form action="" class="col-md-9 col-xs-12 card card-body">
                <fieldset class="border p-4">
                    <legend class="text-primary">Nombre, Categoría e Imagen Principal</legend>

                    <div class="form-group">
                        <label for="forbuscador">Nombre Establecimiento</label>
                        <input id="forbuscador" type="text" class=" form-control" @error('nombre') is-invalid @enderror
                            placeholder="Nombre Establecimiento" name="nombre" value="{{ old('nombre') }}">

                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select name="categoria_id" id="categoria" class=" form-control" @error('categoria_id') is-invalid
                            @enderror>
                            <option value="" selected disabled>-- Seleccione --</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}"
                                    {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="imagen_principal">Imagen Principal</label>
                        <input id="imagen_principal" type="file" class=" form-control" @error('imagen_principal') is-invalid
                            @enderror name="imagen_principal" value="{{ old('imagen_principal') }}">

                        @error('imagen_principal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </fieldset>

                <fieldset class="border p-4">
                    <legend class="text-primary">Ubicación:</legend>

                    <div class="form-group">
                        <label for="nombre">Coloca la dirección de tu Establecimiento</label>
                        <input id="nombre" type="text" class=" form-control" @error('nombre') is-invalid @enderror
                            placeholder="Nombre Establecimiento" name="nombre" value="{{ old('nombre') }}">

                        @error('nombre')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </fieldset>


            </form>
        </div>
    </div>

@endsection
