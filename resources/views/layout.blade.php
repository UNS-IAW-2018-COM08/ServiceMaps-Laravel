<!doctype html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=860">

        <title>@yield('pageTitle')</title>

        <!-- Cargo links externos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel='stylesheet' href='/css/estiloClasico.css'>
        @section('estilos')
        @show

        <!-- Cargo scripts externos -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @section('javascripts')
        @show

    </head>
    <body>

        @section('body')
        @show

          <!-- Creo Footer -->
          <footer>
            <div id="panelFooter">
                Página web creada por García Matias y González Matias. © 2018 Service Maps.
            </div>
          </footer>


    </body>
</html>
