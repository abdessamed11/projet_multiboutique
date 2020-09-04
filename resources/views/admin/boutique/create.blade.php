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
                        <h3 class="title">Pages <span>/ Boutique</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <!-- hicham content start -->
            <div class="row">

                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Formulaire Boutique</h3>
                        </div>
                        <div class="box-body">
                            <form action="{{ url('boutique')}}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="nom_boutique">Nom</label>
                                            <input type="text" class="form-control" name="nom_boutique" id="nom_boutique"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="telephone">telephone</label>
                                            <input type="text" class="form-control" name="telephone" id="telephone"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="image_boutique">Image</label>
                                            <input type="file" class="form-control-file" name="image_boutique" id="image_boutique">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="lien_map1">map</label>
                                            <input type="text" class="form-control" name="lien_map1" id="lien_map1"
                                                placeholder="X:">

                                                <input type="text" class="form-control" name="lien_map2" id="lien_map2"
                                                placeholder="Y:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="site_web">site web</label>
                                            <input type="text" class="form-control" name="site_web" id="site_web"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="user_id">User</label>
                                            <select type="text" class="form-control" name="user_id" id="user_id">
                                                @foreach($users as $user)
                                                <option value="{{ $user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="id_ville">Ville</label>
                                            <select type="text" class="form-control" name="id_ville" id="id_ville">
                                                @foreach($villes as $ville)
                                                <option value="{{ $ville->id}}">{{ $ville->nom_ville}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="role">id_categorie_boutique</label>
                                            <select type="text" class="form-control" name="id_categorie_boutique" id="id_categorie_boutique">
                                                @foreach($categorie_boutiques as $categorie_boutique)
                                                <option value="{{ $categorie_boutique->id}}">{{ $categorie_boutique->nom_categorie_boutique}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="description_boutique">Description</label>
                                            <textarea  class="form-control" name="description_boutique" id="description_boutique"
                                                placeholder="Ex:"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="col-md-12 mb-20">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-outline-primary btn-block">Ajouter</button>
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
                    <p class="text-body-light">2020 &copy; <a href="#">DEVOSOFT</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->
    </div>
    @endsection
