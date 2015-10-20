@extends('layout.base')

@section('content')

    @extends('layout.partial.navbar')

    <div class="table-responsive container">
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
                    <td>01/01/2015</td>
                    <td>18:00</td>
                    <td>Palesta X</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection