@extends('layouts.metronic')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Profil Represent</h1>
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
              <label for="first_name">Nom de Societé:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>


          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="country">Country:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="job_title">Description</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">Telephone</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">photo</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">Locatisation</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>   
          <div class="form-group">
              <label for="job_title">Secteur</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>                       
          <button type="submit" class="btn btn-primary-outline">Enregistrer</button>
      </form>
  </div>
</div>
</div>
@endsection