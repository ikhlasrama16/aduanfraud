<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aduan Fraud BDW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('layouts.navbar')

    <div class="container my-4">
        <div class="row">
            <!-- Sidebar (1/4) -->
            @include('layouts.sidebar')

            <!-- Konten utama (3/4) -->
            <div class="col-md-9">
                <!-- Tempatkan konten utama di sini -->
                <div class="card p-4 shadow-sm">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-legal bg-light text-center text-muted py-4 px-3">
        <div class="container">
            <p class="mb-1 small">
                © 2024. See <a href="#" class="text-primary text-decoration-underline">Terms of Use</a> and
                <a href="#" class="text-primary text-decoration-underline">Privacy Notice</a> for more
                information.
            </p>
            <p class="mb-0 small">
                Deloitte refers to one or more of Deloitte Touche Tohmatsu Limited ("DTTL"), its global network of
                member firms, and their related entities.
                DTTL (also referred to as “Deloitte Global”) and each of its member firms are legally separate and
                independent entities.
                DTTL does not provide services to clients. Please see
                <a href="https://www.deloitte.com/about" class="text-primary text-decoration-underline"
                    target="_blank">www.deloitte.com/about</a>
                to learn more.
            </p>
        </div>
    </footer>





</body>

</html>
