@extends('layouts.header')
@section('title','Boutique')
@section('content')
    <div id="app">


        <main class=" container">
            <div id="map" style="width:100%;height:300px">

            </div>
            <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{ asset('/storage/'.$boutique->image_boutique) }}" class="card-img" alt="">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$boutique->nom_boutique}}</h5>
                                <p class="card-text">{{$boutique->desc_boutique}}</p>

                            </div>
                            </div>
                        </div>
            </div>
        </main>
    </div>
    <hr>
    <div class="container my-3">
      <div class="row">
          @foreach($produit as $produits)
          <div class="card col-md-3" style="width: 18rem;">
          <img class="card-img-top" src="{{ asset('/storage/'.$produits->image_produit) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$produits->nom_produit}}</h5>
            <p class="card-text">{{$produits->Description}}</p>
            <a href="#" class="btn btn-primary">{{$produits->boutiques->nom_boutique}}</a>
          </div>
          </div>
          @endforeach
      </div>
    </div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQU31ADAqQtTqVTYknWIx8EM-hLNQ9fwo&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script>
      "use strict";

      let map;
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: {
            lat: {{$boutique->lien_map1}} ,
            lng: {{$boutique->lien_map2}}
          },
          zoom: 8
        });
      }
    </script>
@endsection
