<html>
    <head>
        <title>Livewire Tutorial</title>
        <link href="{{url('public/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{url('public/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{url('public/bootstrap/jquery.min.js')}}"></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>

        
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
           
            .row ul li{
                float:left;
                padding:20px;
            }
        </style>
       
        
        @livewireStyles
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
                            <a class="nav-link" href="{{url('/')}}">Image Manipulation</span></a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{url('/charts-index')}}">Charts</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/datatables-game')}}">Datatable</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/local_store')}}">Local Store</a>
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
       <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
         <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
         
        @livewireScripts
        <x:pharaonic-select2::scripts />
        
       <script type="module" src="<?php echo url('resources/js/vendor/livewire-charts/app.js'); ?>"></script>
    </body>
</html>
