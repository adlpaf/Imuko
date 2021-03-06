@extends('layouts.app')

@section('title')
    <title>
        Imuko - Clientes
    </title>
@endsection

@section('content')
    <form action="{{url('/register/update')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-5">
                    <label for="password">Clave</label>
            </div>
            <div class="col-7">
                <input type="password" name="password">
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                    <label for="password">Reescribir la clave</label>
            </div>
            <div class="col-7">
                <input type="password" name="password">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
            </div>
            <div class="col-2">
                <input type="hidden" name="email" value="{{$email}}">
                <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
    </script>
@endsection
