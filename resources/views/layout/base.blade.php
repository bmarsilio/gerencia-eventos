<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gerencia-eventos</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body>

@yield('content')

<!-- datatable -->
<script>
    $(document).ready(function(){
        $('#table').DataTable({
            "language": {
                "url": "/dataTable/portugues-brasil.json"
            }
        });
    });
</script>

</body>
</html>