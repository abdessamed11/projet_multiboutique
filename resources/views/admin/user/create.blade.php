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
                        <h3 class="title">Pages <span>/ User</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <!-- hicham content start -->
            <div class="row">

                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Formulaire User</h3>
                        </div>
                        <div class="box-body">
                            <form action="{{ url('user')}}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="user">User</label>
                                            <input type="text" class="form-control" name="user" id="user"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="nom">nom</label>
                                            <input type="text" class="form-control" name="nom" id="nom"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="prenom">prenom</label>
                                            <input type="text" class="form-control" name="prenom" id="prenom"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="cin">CIN</label>
                                            <input type="text" class="form-control" name="cin" id="cin"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                     <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="daten">Date Naissance</label>
                                            <input type="date" class="form-control" name="daten" id="daten"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="tel">Telephone</label>
                                            <input type="text" class="form-control" name="tel" id="tel"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                      <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="image_user">Image</label>
                                            <input type="file" class="form-control-file" name="image_user" id="image_user">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Ex:">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select type="text" class="form-control" name="role" id="role">
                                                <option value="admin">Admin</option>
                                                <option value="utilisateur">Utilisateur</option>
                                            </select>
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
