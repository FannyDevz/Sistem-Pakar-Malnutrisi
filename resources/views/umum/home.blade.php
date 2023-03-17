@extends('layouts.template')

@section('contents')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home-utama')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('home-utama')}}">Home</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <!--<div class="col-md-4">
                <div class="card">
                    <style type="text/css">
                        .image-body {
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            width: 60%;
                            border-radius: 8px;
                        }
                    </style>
                    <img class="image-body" src="{{asset('template/images/food.png')}}" alt="..." class="img-thumbnail">
                </div>
            </div>-->
            <div class="">
                <div class="card">
                    <div class="card-body ">
                        <br>
                        <div class="alert alert-success">
                            <style type="text/css">
                                .image-body {
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 10%;
                                    border-radius: 8px;
                                }
                            </style>
                            <img class="image-body" src="{{asset('template/images/food.png')}}" alt="..." class="img-thumbnail">
                        </br>
                            <h1 class="text-center "><b>Sistem Pakar Diagnosa Malnutrisi Pada Balita</b></h1></br>
                            <p class="text-center">Aplikasi <b>Sistem Pakar</b> ini meniru cara berfikir seorang ahli kesehatan dalam melakukan
                            diagnosis suatu kasus penyakit. Aplikasi ini membantu dalam mecari kesimpulan akan penyakit yang diderira beserta pencegahan dan pengobatan yang sesuai
                            . Program aplikasi ini menganalisa data penyakit malnutrisi, anamnesis awal serta gejala-gejala dari suatu penyakit.</p></br>
                            <div class="text-center ">
                        <a  type="button" class="btn btn-danger col-md-4" href="{{route('register')}}">REGISTER</a>
                        <a  type="button" class="btn btn-primary col-md-4" href="{{route('login')}}">LOGIN</a>
                            </div>
                        </br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
