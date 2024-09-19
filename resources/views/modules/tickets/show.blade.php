@extends('layouts/main')

<div class="container mt-4">
    <h2>Ticket #{{$item->id}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <th>Asunto</th>
                                <th>Asignado a</th>
                                <th>Cliente</th>
                                <th>Prioridad</th>
                                <th>Estado</th>
                                <th>Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->asunto}}</td>
                                <td>{{$item->asignado_a}}</td>
                                <td>{{$item->cliente}}</td>
                                <td>{{$item->prioridad}}</td>
                                <td>{{$item->estado}}</td>
                                <td>{{$item->comentarios}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('index')}}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>