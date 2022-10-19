@extends('layouts.app', [
  'namePage' => 'Gestion Trotinettes',
  'class' => 'sidebar-mini',
  'activePage' => 'trotinettes',
])


@section('content')


<body class="sidebar-mini clickup-chrome-ext_installed">
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
     
      <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
    @csrf</form>
  
 <!-- Navbar -->

  <!-- End Navbar --> <div class="panel-header">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('trotinettes.create') }}">Ajouter Trotinette</a>
            <h4 class="card-title">Trotinettes</h4>
            <div class="col-12 mt-2">
                                        </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nom Trotinette</th>
                  <th>Catégorie</th>
                  <th>Vitesse</th>
                  <th>Poids</th>
                  <th>Couleur</th>
                  <th>Prix</th>
                  <th>Prix_Location</th>
                  <th>Quantité</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nom Trotinette</th>
                  <th>Catégorie</th>
                  <th>Vitesse</th>
                  <th>Poids</th>
                  <th>Couleur</th>
                  <th>Prix</th>
                  <th>Prix_Location</th>
                  <th>Quantité</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>
              @foreach ($trotinettes as $trotinette)
                    <tr>
                        <td>{{ $trotinette->nom }}</td>
                        @foreach ($categoriets as $categoriet)
                         @if($categoriet->id == $trotinette->categorie_id)
                         
                        <td>{{ $categoriet->type }}</td>
                         @endif
                        @endforeach
                        <td>{{ $trotinette->vitesse }}</td>
                        <td>{{ $trotinette->poids }}</td>
                        <td>{{ $trotinette->couleur }}</td>
                        <td>{{ $trotinette->prix }}</td>
                        <td>{{ $trotinette->prix_location }}</td>
                        <td>{{ $trotinette->quantite }}</td>
                        <td>
                            <form action="{{ route('trotinettes.destroy',$trotinette->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('trotinettes.edit',$trotinette->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                              </tbody>
            </table>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
      </div>
    <!-- <div class="alert alert-danger">
      <span>
        <b></b> This is a PRO feature!</span>
    </div> -->
    <!-- end row -->
  
  @endsection

