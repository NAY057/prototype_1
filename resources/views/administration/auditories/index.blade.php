@extends('layouts.admin')
@section('index_admin')
    <div class="row">
        <div class="col-md-8">
            <h3>Lista de predios <a href="administracion/crear"><button class="btn btn-primary">Nuevo</button></a> </h3>
            @include('administration.auditories.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table>
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                    </thead>
                    {{-- @foreach ($predios as $predio) --}}
                        <tr>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Cedula</td>
                        </tr>
                    {{-- @endforeach --}}
                    </table>
            </div>
        </div>
    </div>
@endsection