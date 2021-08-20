@extends('layout')

@section('konten')
    <div class="container">
        <div class="row mt-5">
            <p>Debug: </p>
            
            <div class="col-md-12" style="background-color:#c8d3dc; border-radius:15px; min-height:300px;">
                <pre>
                    <?php print_r($vars); ?>
                </pre>
            </div>
        </div>
    </div>
@endsection