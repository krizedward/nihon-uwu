<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Nihon Uwu Admin Dashboard</title>
    @stack('header')
</head>
<body>
    <div id="app">
        @include('layouts.menu.versi-1-nihonuwu')

        <div id="main">

            @yield('main')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 - 2023 &copy; nihon uwu</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger">
                            <i class="bi bi-heart"></i></span> by
                            <a href="https://saugi.me">Saugi</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

    </div>
</body>
    @stack('script')
</html>
