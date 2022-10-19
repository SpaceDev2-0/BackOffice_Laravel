@extends('layouts.app', [
  'namePage' => 'Gestion Locations',
  'class' => 'sidebar-mini',
  'activePage' => 'Locations',
])

@section('content')



<!-- End Navbar --> <div class="panel-header">
</div>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('locations.index') }}">Retour</a>
                <h4 class="card-title">Creer une location</h4>
                <div class="col-12 mt-2">
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
                </div>
              </div>
              <div class="card-body">
                <div class="toolbar">
                </div>
                <form method="POST" action="{{route('locations.store')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="idClient">Id Client</label>
                            <input type="text" class="form-control" id="idClient" name="idClient" placeholder="Id Client">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="idStation">Station</label>
                            <input type="text" class="form-control" id="idStation" name="idStation" placeholder="Id Station">
                        </div>
                        <div class="form-group">
                            <label for="idVelo">Velo</label>
                            <select class="form-control" id="idVelo" name="idVelo">
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
                            <input type="date" class="form-control" id="dateDebut" name="dateDebut" placeholder="Date Debut">
                        </div>
                        <div class="form-group">
                            <label for="dateFin">Date Fin</label>
                            <input type="date" class="form-control" id="dateFin" name="dateFin" placeholder="Date Fin">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group"> 
                            <label for="accessoires">Accessoires</label>
                            <select class="form-control" id="accessoires" name="accessoires">
                                <option value="0">Select Accessoire</option> 
                                @foreach($accessoires as $accessoire)
                                    <option value="{{$accessoire->id}}">{{$accessoire->nomAccessoire}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix">
                        </div>
                        <div class="form-group">
                            <label for="statutPaiement"></label>
                            <select class="form-control" id="statutPaiement" name="statutPaiement">
                                <option value="0">Select Statut Paiement</option>
                                <option value="1">En cours</option>
                                <option value="2">Payé</option>
                            </select>
                    </div>
    
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
    </div>
    
</div>
@endsection

