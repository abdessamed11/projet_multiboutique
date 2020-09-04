@extends('layouts.header')
@section('title','Boutique')
@section('content')
<form action="{{url('search')}}" method="POST" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="container mt-4">
    <div class="row d-flex justify-content-center bg-white pb-4 pt-2 border rounded">
      <div class="col-sm-4">
        <label for="categorieBoutique">Categorie Boutique:</label>
        <select name="categorieBoutique" id="categorieBoutique" class="form-control hvr-shadow">
          <option value=""></option>
          @foreach($categories as $categorie)
          <option value="{{$categorie->id}}">{{$categorie->nom_categorie_boutique}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-4">
        <label for="villes">Ville:</label>
        <select name="villes" id="villes" class="form-control hvr-shadow">
          <option value=""></option>
          @foreach($villes as $ville)
          <option value="{{$ville->id}}">{{$ville->nom_ville}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-2 d-flex align-items-end">
        <input type="submit" value="Cherche" class="form-control bg-primary text-white hvr-grow-shadow">
      </div>
    </div>
  </div>
  <div class="my-5">

  </form>
  <div class="container mt-3">
    <div class="row">
    @foreach($boutiques as $boutique)
    <div class="col-md-6 ">
    <div class="card mb-3 hvr-shrink">
      <div class="row no-gutters">
        <div class="col-md-6">
          <img src="{{ asset('/storage/'.$boutique->image_boutique) }}" class="card-img " alt="boutique" >
        </div>
        <div class="col-md-6 text-center ">
          <div class="">
            <div class="container-fluid py-1 bg-dark">
              <h5 class="card-title text-primary font-weight-bold font_boutique text-uppercase mt-2">{{$boutique->nom_boutique}}</h5>
            </div>
            <h5 class="card-text font-weight-light text-muted text-capitalize">{{$boutique->ville->nom_ville}}</h5>
            <p class="card-text font-weight-light text-muted text-capitalize">{{$boutique->categorie_boutique->nom_categorie_boutique}}</p>
            <a href="{{url('voirplus',$boutique->id)}}" class="stretched-link">Voir Tout</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    @endforeach
    </div>
  </div>
</div>
<div class="container">
  <div class="row ">
    <div class="col-md-12 d-flex justify-content-center">
        {{$boutiques->render()}}
    </div>

  </div>

</div>

<hr>
<div class="container-fluid text-center animate__animated animate__pulse">
  <h2 class="pb-1" style="font-family: Roboto, sans-serif;">Toutes les annonces de la boutique</h2>
</div>
<div class="container">
  <div class="row text-center">
    @foreach($produits as $produit)
    <div class="col-md-3 mb-3">
        <div class="card promoting-card hvr-grow">
          <div class="view overlay">
            <img class="card-img-top rounded-0" src="{{ asset('/storage/'.$produit->image_produit) }}" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body  flex-row">
            <div>
              <h4 class="card-title font-weight-bold mb-2">{{$produit->nom_produit}}</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="collapse-content">
              <p class="card-text">{{$produit->boutiques->nom_boutique}}</p>
              <p>{{$produit->Description}}</p>
            </div>
          </div>
        </div>
      </div>

    @endforeach
  </div>
</div>

<div class="container">
  <div class="row ">
    <div class="col-md-12 d-flex justify-content-center">
        {{$produits->render()}}
    </div>

  </div>

</div>


@endsection
