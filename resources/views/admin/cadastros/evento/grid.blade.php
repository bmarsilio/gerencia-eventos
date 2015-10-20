@extends('layout.base')

@section('content')

    @extends('layout.partial.navbar-admin')

    <div class="container">

        <div class="row">
            <button class="btn btn-default"><i class="glyphicon glyphicon-file"></i> Novo</button>
            <h3>Cadastro - Evento</h3>

            <hr />
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>11/12/2015</td>
                        <td>19:00</td>
                        <td>Palestra X</td>
                        <td>
                            <button class="btn btn-primary">Editar <i class="glyphicon glyphicon-pencil"></i></button>
                            <button class="btn btn-danger">Excluir <i class="glyphicon glyphicon-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>11/13/2015</td>
                        <td>20:00</td>
                        <td>Palestra Y</td>
                        <td>
                            <button class="btn btn-primary">Editar <i class="glyphicon glyphicon-pencil"></i></button>
                            <button class="btn btn-danger">Excluir <i class="glyphicon glyphicon-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection()