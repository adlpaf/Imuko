@extends('layouts.app')

@section('title')
    <title>
        Imuko - Ciudades
    </title>
@endsection

@section('content')
<div class="row" style="margin-bottom: 25px;">
    <div class="col-10"></div>
    <div class="col-2">
        {{-- <button class="btn btn-success" style="border-radius: 25px;"> --}}
        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#newModal">Nuevo</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table id="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $item)
                    <tr>
                        <td>{{ $item->cod }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateModal-{{$item->id}}">Modificar</a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{$item->id}}">Eliminar</a>

                            <div class="modal fade" id="updateModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                                <form action="{{url('city/'.$item->id)}}" method="POST">
                                    {{method_field('PATCH')}}
                                    @csrf
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Eliminar Ciudad</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="">Código:</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input style="width: 100%;" type="text" name="cod" value="{{$item->cod}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="">Nombre:</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input style="width: 100%;" type="text" name="name" value="{{$item->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-warning">Actualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <form action="{{url('city/'.$item->id)}}" method="POST">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Eliminar Cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="">Código: {{$item->cod}}</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="">Nombre: {{$item->name}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <form action="{{url('city')}}" method="POST">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Nuevo Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <label for="">Código:</label>
                        </div>
                        <div class="col-9">
                            <input style="width: 100%;" type="text" name="cod">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="">Nombre:</label>
                        </div>
                        <div class="col-9">
                            <input style="width: 100%;" type="text" name="name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('script')
    <script>
    </script>
@endsection
