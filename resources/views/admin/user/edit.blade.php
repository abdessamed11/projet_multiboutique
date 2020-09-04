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
                            <h3 class="title">Formulaire de modification de User</h3>
                        </div>
                        <div class="box-body">
                            <form action="{{ url('user/'.$user->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT" >

                                <div class="row">
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="user">User</label>
                                            <input type="text" class="form-control" name="user" id="user"
                                            value="{{ $user->user}}" >
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="nom">nom</label>
                                            <input type="text" class="form-control" name="nom" id="nom"
                                            value="{{ $user->nom}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="prenom">prenom</label>
                                            <input type="text" class="form-control" name="prenom" id="prenom"
                                                value="{{ $user->prenom}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ $user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="cin">CIN</label>
                                            <input type="text" class="form-control" name="cin" id="cin"
                                                value="{{ $user->cin}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="tel">Telephone</label>
                                            <input type="text" class="form-control" name="tel" id="tel"
                                                value="{{ $user->tel}}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"  >
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="daten">Date Naissance</label>
                                            <input type="date" class="form-control" name="daten" id="daten" value="{{ $user->daten}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select type="text" class="form-control" name="role" id="role">
                                                <option value="admin" @if($user->role =="admin" ) selected @endif >Admin</option>
                                                <option value="utilisateur" @if( $user->role =="utilisateur" ) selected @endif >Utilisateur</option>
                                            </select>
                                        </div>
                                    </div>
                                      <div class="col-md-3 mb-20">
                                        <div class="form-group">
                                            <label for="image_user">Image</label>
                                            <input type="file" class="form-control-file" name="image_user" id="image_user">
                                        </div>
                                    @if($user->file)
                                    <img height="150" src="{{ asset('/storage/'.$user->file) }}" alt="">
                                    @endif
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
