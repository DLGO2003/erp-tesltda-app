@extends('layouts/main')

@section('contenido')
<div class="container mt-4">
    <h2>Sistema de Tickets</h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <a href="{{route('create')}}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i></i> Crear Ticket
                    </a>
                    <hr>
                    <table class="table table-sm tm table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Asunto</th>
                                <th>Asignado a</th>
                                <th>Cliente</th>
                                <th>Prioridad</th>
                                <th>Estado</th>
                                <th>Comentarios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->asunto}}</td>
                                <td>{{$item->asignado_a}}</td>
                                <td>{{$item->cliente}}</td>
                                <td>{{$item->prioridad}}</td>
                                <td>{{$item->estado}}</td>
                                <td>{{$item->comentarios}}</td>

                                <td>
                                    <form action="{{route('destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('show', $item->id)}}" class="btn btn-info">
                                            <i class="fa-solid fa-list"></i> Mostrar</a>
                                        <a href="{{route('edit', $item->id)}}}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No hay datos en la tabla...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{$items->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection