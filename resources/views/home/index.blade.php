@extends('layout.base')

@section('content')

    @extends('layout.partial.navbar')

    <div class="container">


        <div class="row">
            <h3>Selecione o evento que deseja se inscrever</h3>

            <hr />
        </div>

        <div class="table-responsive">
            <table class="table table-striped" id="table">
                <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Evento</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>01/11/2015</td>
                    <td>18:00</td>
                    <td>Palestra X</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Detalhes
                            <i class="glyphicon glyphicon-th"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>15/11/2015</td>
                    <td>20:00</td>
                    <td>Palestra Y</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Detalhes
                            <i class="glyphicon glyphicon-th"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Palestra X</h4>
                    </div>
                    <div class="modal-body">
                        Detalhes da palestra
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Confirmar Inscrição</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection