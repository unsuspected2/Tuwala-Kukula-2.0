<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Tuwala Kukula</title>
    <!-- loader-->
    <link href="{{ asset('asset/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('asset/js/pace.min.js') }}"></script>

    <!-- favicon-->
    <link rel="icon" href="{{ asset('asset/images/favicon.ico') }}" type="image/x-icon">

    <!-- Vector CSS (se necessário) -->
    <link href="{{ asset('asset/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- Full Calendar CSS (se necessário) -->
    <link href="{{ asset('asset/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" />

    <!-- simplebar CSS-->
    <link href="{{ asset('asset/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- animate CSS-->
    <link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons CSS-->
    <link href="{{ asset('asset/css/icons.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sidebar CSS-->
    <link href="{{ asset('asset/css/sidebar-menu.css') }}" rel="stylesheet" />

    <!-- Custom Style-->
    <link href="{{ asset('asset/css/app-style.css') }}" rel="stylesheet" />


</head>

<body class="bg-theme bg-theme1">
    @yield('content')

    {{-- Responsável por pegar a data --}}
    <script>
        function atualizarCopyright() {
            const anoAtual = new Date().getFullYear(); // Pega o ano atual
            const copyrightDiv = document.getElementById('copyright');

            // Substitui o ano '2018' pelo ano atual
            copyrightDiv.innerHTML = copyrightDiv.innerHTML.replace('2018', anoAtual) + '. Todos os direitos reservados.';
        }

        // Chama a função para atualizar o copyright assim que a página carregar
        document.addEventListener('DOMContentLoaded', atualizarCopyright);
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="asset/plugins/simplebar/js/simplebar.js"></script>

    <!-- sidebar-menu js -->
    <script src="asset/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="asset/js/app-script.js"></script>

    <!-- Full Calendar -->
    <script src="asset/plugins/fullcalendar/js/moment.min.js"></script>
    <script src="asset/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="asset/plugins/fullcalendar/js/fullcalendar-custom-script.js"></script>

    <!-- loader scripts -->
    <script src="asset/js/jquery.loading-indicator.js"></script>

    <!-- Chart.js -->
    <script src="asset/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index.js -->
    <script src="asset/js/index.js"></script>


</body>

</html>
