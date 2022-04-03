@extends('layouts.main')

@section('container')
    <div class="container border border-dark border-2 rounded-3 bg-light bg-opacity-75 text-dark" style="height: 550px;">
        <div class="text-center">
            <h2 class="mt-5"><strong>WELCOME TO OUR WEBSITE STORE</strong></h2>
            <hr class="bg-dark border-3 border-top border-dark">
        </div>
        <div class="d-flex justify-content-around" style="margin-top: 110px;">
            <div>
                <i class=" fa-solid fa-clipboard-list fa-9x" style="color:black; margin-left:17px;"></i>
                <div>
                    <hr>
                    <p style="display: inline-block">Browse Our Product</p>
                </div>
            </div>
            <div>
                <i class=" fa-brands fa-whatsapp fa-9x" style="color:green; margin-left:20px;"></i>
                <div style="margin-right: 18px">
                    <hr>
                    <p style="display: inline-block;">Contact Our DIstributor</p>
                </div>
            </div>
        </div>
    </div>
@endsection
