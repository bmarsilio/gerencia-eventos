@extends('layout.base')

@section('content')
    @extends('layout.partial.navbar-admin')

    <div class="container">
        <div class="row">
            <h3>Relatório - Inscritos</h3>

            <hr />
        </div>

        <div class="table-responsive">
            <table class="table table-responsive table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Data Inscrição</th>
                        <th>Nome</th>
                        <th>Data Evento</th>
                        <th>Evento</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>01/10/2015 13:00</td>
                        <td>Bruno Marsilio</td>
                        <td>01/11/2015</td>
                        <td>Palestra X</td>
                        <td>
                            <button class="btn btn-success">Pago <i class="glyphicon glyphicon-ok"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>05/10/2015 15:01</td>
                        <td>Pedro Bampi</td>
                        <td>01/11/2015</td>
                        <td>Palestra X</td>
                        <td>
                            <button class="btn btn-danger">Em Aberto <i class="glyphicon glyphicon-remove"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection()