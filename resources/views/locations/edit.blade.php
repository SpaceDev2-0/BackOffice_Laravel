@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Location edit ',
    'activePage' => 'Location',
    'activeNav' => '',
])
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-12 col-md-10">
            <h3>Edit Locations</h3>
        </div>
        <div class="col-12 col-md-2 text-end">
            <a class="btn btn-primary" href="{{route('locations.index')}}">Go Back to locations</a>
        </div>
    </div>
    @if($errors->any())
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Some error occured!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('locations.update', $location->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="idClient">Id Client</label>
                        <input type="text" class="form-control" id="idClient" name="idClient" placeholder="Id Client" value="{{$location->idClient}}">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="idStation">Station</label>
                        <input type="text" class="form-control" id="idStation" name="idStation" placeholder="Id Station" value="{{$location->idStation}}">
                    </div>
                    <div class="form-group">
                        <label for="idVelo">Velo</label>
                        <select class="form-control" id="idVelo" name="idVelo" value="{{$location->idVelo}}">
                            <option value="0">Select Velo</option>
                            <option value="1">Velo 1</option>
                            <option value="2">Velo ...</option>    
                            {{-- @foreach($velos as $velo)
                                <option value="{{$velo->id}}">{{$velo->id}}</option>
                                @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="dateDebut">Date Debut</label>
                        <input type="date" class="form-control" id="dateDebut" name="dateDebut" placeholder="Date Debut" value="{{$location->dateDebut}}">
                    </div>
                    <div class="form-group">
                        <label for="dateFin">Date Fin</label>
                        <input type="date" class="form-control" id="dateFin" name="dateFin" placeholder="Date Fin" value="{{$location->dateFin}}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix" value="{{$location->prix}}">
                    </div>
                    <div class="form-group">
                        <label for="statutPaiement"></label>
                        <select class="form-control" id="statutPaiement" name="statutPaiement">
                            <option value="0">Select Statut Paiement</option>
                            <option value="1">En cours</option>
                            <option value="2">Payé</option>
                        </select>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="statutLocation"></label>
                        <select class="form-control" id="statutLocation" name="statutLocation">
                            <option value="0">Select Statut Location</option>
                            <option value="1">En cours</option>
                            <option value="2">Terminé</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="remarque">Remarque</label>
                        <input type="text" class="form-control" id="remarque" name="remarque" placeholder="Remarque" value="{{$location->remarque}}">   
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection