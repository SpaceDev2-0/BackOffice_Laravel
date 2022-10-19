@extends('layouts.app', [
  'namePage' => 'Gestion Location',
  'class' => 'sidebar-mini',
  'activePage' => 'locations',

])
@section('content')


<!-- End Navbar --> <div class="panel-header">
</div>
<div class="content mt-4">
    <div class="row r3">
        <div class="col-md-5 p-0 klo">
            <ul>
                <li> Id location : {{ $location->id }}</li>
                <li> Id client : {{ $location->idClient }}</li>
                <li> Id Station : {{ $location->idStation }}</li>
                <li> Id Velo : {{ $location->idVelo }}</li>
                <li> Date debut : {{ $location->dateDebut }}</li>
                <li> Date fin : {{ $location->dateFin }}</li>
                <li> Prix : {{ $location->prix }}</li>
                <li> Statut paiement :
                    @if ($location->statutPaiement == 1)
                        <span class="badge text-bg-danger">non paye</span> 
                    @else
                        <span class="badge text-bg-success">Payé</span>   
                    @endif
                </li>
                <li> Statut location : 
                    @if ($location->statutLocation == 1)
                        <span class="badge text-bg-warning"> En cours </span>
                    @else
                        <span class="badge text-bg-success">Terminé </span>
                    @endif
                </li>
                <li> Created at : {{ $location->created_at }}</li>
                <li> Updated at : {{ $location->updated_at }}</li>

            </ul>
        </div>
        <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
    </div>
</div>

@endsection