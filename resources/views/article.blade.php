@extends('layouts.metronic')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Publier un article </h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" >
          @csrf
          <div class="form-group">    
              <label for="first_name">Titre:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Type:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="email">Catégorie:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          
          <div class="form-group">
              <label for="job_title">Description</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">Prix :</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">Photos:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">Couleur :</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>
          <div class="form-group">
              <label for="job_title"> Ajouter l'article a la catégorie:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Enregistrer</button>
      </form>
  </div>
</div>
</div>
@endsection