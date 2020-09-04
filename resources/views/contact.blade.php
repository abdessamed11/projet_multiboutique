@extends('layouts.header')
@section('title','Contact')
@section('content')
  <div class="container-fluid">

    <div class="row mt-4">
      <div class="col-md-4 align-self-center">
        <h1 class="pb-2 text-center animate__animated animate__backInLeft mt-1" style="font-family: alata;">CONTACT</h1>
        <ul class="list-unstyled">
          <li>
              <p class="p-3"><span class="bg-primary p-2 rounded-circle hvr-sweep-to-right"><i class="fas fa-map-marker fa-fw"></i></span>  70 Boulevard Ghandi ,Casablanca, Maroc</p>
          </li>
          <li>
            <p class="p-3"><span class="bg-primary p-2 rounded-circle hvr-sweep-to-right"><i class="fas fa-phone-alt fa-fw"></i></span>  +212 690 8000 32</p>
          </li>
          <li>
            <p class="p-3"><span class="bg-primary p-2 rounded-circle hvr-sweep-to-right"><i class="far fa-envelope fa-fw"></i></span>  multi-boutique@gmail.com</p>
          </li>

        </ul>

      </div>
      <div class="col-md-8">
        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control hvr-box-shadow-outset"  placeholder="Votre Nom">
    </div>
    <div class="form-group col-md-6">
      <input type="email" class="form-control hvr-box-shadow-outset"  placeholder="votre Email">
    </div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control hvr-box-shadow-outset" id="inputAddress" placeholder="Objet">
  </div>
  <div class="form-group">
    <textarea name="message" class="hvr-shadow" rows="5" data-rule="required" style="width:100%;" placeholder="Message"></textarea>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary hvr-round-corners">Message envoyé</button>
  </div>

</form>

      </div>

    </div>

  </div>
@endsection
