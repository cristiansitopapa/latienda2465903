@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="grey-text text-darken-1"> Nuevo Producto </h1>
</div>

<div class="row">
    <form class="col s8">
        <div class="row">
            <div class="input-field col s8">
                <input 
                placeholder="Nombre de producto" 
                id="nombre"
                name="nombre"
                type="text">
                <label for="nombre">Nombre</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea 
                name="desc" 
                id="desc" 
                type="text"
                class="materialize-textarea"
                placeholder="Descripción">
            </textarea>
            <label for="desc">Descripción</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <textarea 
                name="prec" id="prec" type="text"
                class="materialize-textarea"
                placeholder="Precio">
            </textarea>
            <label for="prec">Precio</label>
            </div>
        </div>

        <div class="file-field input-field col s8">
            <div class="btn">
                <span>Imagen de producto..</span>
                <input type="file" name="imagen">
            </div>
            <div class="file-path-wrapper">
                <input type="text" class="file-path">
            </div>
        </div>

        <div class="row">
            <button class="btn waves-effect waves-light" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection