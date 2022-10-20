@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'User Profile',
    'activePage' => 'profile',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Edit Profile")}}</h5>
          </div>
          <div class="card-body">
                 <form action="{{ route('trotinettes.update',$trotinette->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
               
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom Trotinette:</strong>
                        <input type="text" name="nom" value="{{ $trotinette->name }}" class="form-control" placeholder="Nom Trotinette">
                        @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Categorie Trotinette :</strong>
                        <select name="categorie_id" class="form-control">
                        <option selected disabled> {{$trotinette->categoryT->type}}</option>
                                @foreach($categoriets as $item)
                                <option value="{{ $item->id }}">{{ $item->type }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>

             
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Vitesse Trotinette :</strong>
                        <input type="text" name="vitesse" value="{{ $trotinette->vitesse }}" class="form-control" placeholder="Vitesse Trotinette">
                        @error('vitesse')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poids Trotinette :</strong>
                        <input type="text" name="poids" value="{{ $trotinette->poids }}" class="form-control" placeholder="Poids Trotinette">
                        @error('poids')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Couleur Trotinette :</strong>
                        <input type="text" name="couleur" value="{{ $trotinette->couleur }}" class="form-control" placeholder="Couleur Trotinette">
                        @error('couleur')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix Trotinette :</strong>
                        <input type="text" name="prix" value="{{ $trotinette->prix }}" class="form-control" placeholder="Prix Trotinette">
                        @error('prix')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix_location Trotinette :</strong>
                        <input type="text" name="prix_location" value="{{ $trotinette->prix_location }}"prix_location class="form-control" placeholder="Prix_location Trotinette">
                        @error('prix_location')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantité Trotinette :</strong>
                        <input type="text" name="quantite" value="{{ $trotinette->quantite }}"prix_location class="form-control" placeholder="quantite">
                        @error('quantite')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
          </div>
          </div>
          </div>
          </div>
          </div>
          
@endsection