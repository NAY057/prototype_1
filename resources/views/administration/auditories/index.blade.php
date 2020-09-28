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
                <table class="table">
                    <thead>
                        <th>Predio Id</th>
                        <th>Cod Predial</th>
                        <th>Matricula</th>
                        <th>Comuna</th>
                    </thead>
                    @foreach ($predios as $predio)
                        <tr>
                            <td>{{$predio->idpredio}}</td>
                            <td>{{$predio->codpredial}}</td>
                            <td>{{$predio->matricula}}</td>
                            <td>{{$predio->comuna}}</td>
                        </tr>
                    @endforeach
                    </table>
            </div>
        </div>
    </div>
@endsection