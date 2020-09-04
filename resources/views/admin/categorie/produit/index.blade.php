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
                        <h3 class="title">Pages <span>/ Categorie produit</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <!-- hicham content start -->
            <div class="row">

                <!--Default Data Table Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Default Table</h3>
                        </div>
                        <div class="box-body">

                            <table class="table table-bordered data-table data-table-default">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorie_produits as $categorie_produit)
                                    <tr>
                                        <td>{{ $categorie_produit->nom_categorie_produit }}</td>
                                        <td>
                                            <form action="{{ url('categorie/produit/'.$categorie_produit->id) }}" method="post">
                                                <a href="{{ url('categorie/produit/'.$categorie_produit->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Default Data Table End-->

                <!--Export Data Table Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Export Data Table</h3>
                        </div>
                        <div class="box-body">

                            <table class="table table-bordered data-table data-table-export">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorie_produits as $categorie_produit)
                                    <tr>
                                        <td>{{ $categorie_produit->nom_categorie_produit }}</td>
                                        <td>
                                            <form action="{{ url('categorie/produit/'.$categorie_produit->id) }}" method="post">
                                                <a href="{{ url('categorie/produit/'.$categorie_produit->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Export Data Table End-->


            </div>
            <!-- hicham content end -->
        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2020 &copy; <a href="#">DEVOSOFT</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>
    @endsection



    @section('script')
    <script src="{{ asset('assets/js/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/datatables.active.js') }}"></script>
    @endsection
