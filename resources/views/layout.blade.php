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
            
            fieldSet
            {
                width: 97%; 
                margin-left: 10px;
                border:0;
                margin:0;
            }

            legend
            {

                border-style:none;
                background-color: #003366;
                font-family: Tahoma, Arial, Helvetica;
                font-weight: bold;
                font-size: 9.5pt;
                Color: White;
                width:30%;
                padding-left:10px;

            }

            fieldset div { border:1px solid #003366; position:relative; top:-6px }
        </style>
        <livewire:styles />
    </head>

    <body>
        <div class="container-fluid warp">
            <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: #551ead;">
                <a class="navbar-brand" href="#">V1-Tutorial</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Image Manipulation</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="konten">
                @yield('konten')
            </div>
        </div>

        <section class="">
            <footer class="text-center text-white" style="background-color: #6610f2;">
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
                <div class="text-center p-3" style="background-color: #551ead;">
                    © <?=date('Y')?> Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">Tutorials</a>
                </div>
            </footer>
        </section>
        <livewire:scripts />
    </body>
</html>
