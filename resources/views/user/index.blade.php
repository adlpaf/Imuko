@extends('layouts.app')

@section('title')
    <title>
        Imuko - Usuarios
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
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateModal-{{$item->id}}">Modificar</a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{$item->id}}">Eliminar</a>

                                <div class="modal fade" id="updateModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                                    <form action="{{url('user/'.$item->id)}}" method="POST">
                                        {{method_field('PATCH')}}
                                        @csrf
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Modificar Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="">Nombre:</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input style="width: 100%;" type="text" name="name" value="{{$item->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="">Email:</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input style="width: 100%;" type="email" name="email" value="{{$item->email}}">
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
                                    <form action="{{url('user/'.$item->id)}}" method="POST">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Eliminar Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="">Nombre: {{$item->name}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="">Email: {{$item->email}}</label>
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
        <form action="{{url('user')}}" method="POST">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Nuevo Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-9">
                                <input style="width: 100%;" type="text" name="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="">Email:</label>
                            </div>
                            <div class="col-9">
                                <input style="width: 100%;" type="email" name="email">
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
