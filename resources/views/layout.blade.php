<html>
    <head>
        <title>Livewire Tutorial</title>
        <link href="{{url('public/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{url('public/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{url('public/bootstrap/jquery.min.js')}}"></script>
        <style>
            .container-fluid{
                padding: 0;
            }
            html, body {
                height: 90%;
            }
            .warp {
                min-height: 100%;
            }
            .footers{
                clear:both;
            }
        </style>
        <livewire:styles />
    </head>

    <body>
        <div class="container-fluid warp">
            <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: #0a4275;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="konten">
                @yield('konten')
            </div>
        </div>

        <section class="">
            <footer class="text-center text-white" style="background-color: #0a4275;">
                <div class="container p-4 pb-0">
                    <section class="">
                        <p class="d-flex justify-content-center align-items-center">
                            <span class="me-3">Tutorials</span>
                            <button type="button" class="btn btn-outline-light btn-rounded">
                                Try & Error
                            </button>
                        </p>
                    </section>
                </div>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © <?=date('Y')?> Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">Tutorials</a>
                </div>
            </footer>
        </section>
        <livewire:scripts />
    </body>
</html>
