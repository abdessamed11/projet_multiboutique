@extends('adomx.index')

@section('content')

<body class="skin-dark">
    <div class="main-wrapper">


        <!-- Header Section Start -->
        @include('adomx.header')
        <!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                @include('adomx.menu')

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Pages <span>/ Ville</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <!-- hicham content start -->
            <div class="row">

                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Formulaire de modification de Ville</h3>
                        </div>
                        <div class="box-body">
                            <form action="{{ url('ville/'.$ville->id)}}" method="post">
                                <input type="hidden" name="_method" value="PUT" >

                                <div class="row">
                                    <div class="col-md-12 mb-20">
                                        <div class="form-group">
                                            <label for="nom_ville">Ville</label>
                                            <input type="text" class="form-control" name="nom_ville" id="nom_ville"
                                            value="{{ $ville->nom_ville}}" >
                                        </div>
                                    </div>

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-12 mb-20">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-outline-warning btn-block">Modifier</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hicham content end -->

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; <a href="#">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>
    @endsection
