@extends('layouts/main')

<div class="container mt-4">
    <h2>Modificar el Ticket #{{$item->id}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update', $item->id)}}" method="POST" class="post">
                        @csrf
                        @method('PUT')
                        <label for="name" class="mt-3">Asunto del caso</label>
                        <select name="asunto" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>...</option>
                            <option value="Manchas">Manchas</option>
                            <option value="Atascos">Atascos</option>
                        </select>

                        <label for="name" class="mt-3">Asignado a</label>
                        <select name="asignado_a" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>...</option>
                            <option value="Daniel">Daniel</option>
                            <option value="Leandro">Leandro</option>
                        </select>
                        
                        <label for="name" class="mt-3">Creado por</label>
                        <select name="cliente" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>...</option>
                            <option value="Oncologos">Oncologos</option>
                            <option value="Sies Salud">Sies Salud</option>
                        </select>

                        <label for="name" class="mt-3">Prioridad del caso</label>
                        <select name="prioridad" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>...</option>
                            <option value="Alto">Alto</option>
                            <option value="Bajo">Bajo</option>
                        </select>

                        <label for="name" class="mt-3">Estado del ticket</label>
                        <select name="estado" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>Nuevo</option>
                            <option value="Asignado">Asignado</option>
                            <option value="En progreso">En Progreso</option>
                            <option value="Cerrado">Cerrado</option>
                        </select>

                        <label for="name" class="mt-3">Problema presentado por la máquina</label>
                        <input type="text" name="comentarios" id="name" class="form-control" required>
                        
                        <button class="btn btn-warning mt-3">Editar</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>