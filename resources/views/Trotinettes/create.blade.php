@extends('layouts.app', [
  'namePage' => 'Gestion Trotinettes',
  'class' => 'sidebar-mini',
  'activePage' => 'trotinettes',
])


@section('content')




  <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        
      <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
    @csrf</form>
   <div class="main-panel">
 <!-- Navbar -->


  <!-- End Navbar --> <div class="panel-header">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('trotinettes.index') }}">Retour</a>
            <h4 class="card-title">Users</h4>
            <div class="col-12 mt-2">
                                        </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
            </div>
        <form action="{{ route('trotinettes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom Trotinette:</strong>
                        <input type="text" name="nom" class="form-control" placeholder="Nom Trotinette">
                        @error('nom')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               
                <!-- for making the line smaller -->
            <!-- <div class="row"> --> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Catégorie Trotinette:</strong>
                            <select name="categorie_id" id="categorie" class="form-control">
                                @foreach($categoriets as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->type }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
            <!-- </div> -->
              
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Vitesse Trotinette :</strong>
                        <input type="text" name="vitesse" class="form-control" placeholder="Vitesse Trotinette">
                        @error('vitesse')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Poids Trotinette :</strong>
                        <input type="text" name="poids" class="form-control" placeholder="Poids Trotinette">
                        @error('poids')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Couleur Trotinette :</strong>
                        <input type="text" name="couleur" class="form-control" placeholder="Couleur Trotinette">
                        @error('couleur')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix Trotinette :</strong>
                        <input type="text" name="prix" class="form-control" placeholder="Prix Trotinette">
                        @error('prix')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix_location Trotinette :</strong>
                        <input type="text" name="prix_location" class="form-control" placeholder="Prix_location Trotinette">
                        @error('prix_location')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantite :</strong>
                        <input type="text" name="quantite" class="form-control" placeholder="Quantite">
                        @error('quantite')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- <div class="alert alert-danger">
      <span>
        <b></b> This is a PRO feature!</span>
    </div> -->
    <!-- end row -->
  </div>
    <footer class="footer">
  <div class=" container-fluid ">
    <nav>
      <ul>
        <li>
          <a href="https://www.creative-tim.com" target="_blank">
             Creative Tim
          </a>
        </li>
        <li>
          <a href="http://presentation.creative-tim.com" target="_blank">
             About Us
          </a>
        </li>
        <li>
          <a href="http://blog.creative-tim.com" target="_blank">
             Blog
          </a>
        </li>
        <li>
          <a href="https://www.updivision.com" target="_blank">
             Updivision</a>
        </li>
      </ul>
    </nav>
    <div class="copyright" id="copyright">
      ©
      <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script>2020,  Designed by
      <a href="https://www.invisionapp.com" target="_blank"> Invision</a> . Coded by
      <a href="https://www.creative-tim.com" target="_blank"> Creative Tim </a>&amp;
      <a href="https://www.updivision.com" target="_blank"> Updivision</a>
    </div>
  </div>
</footer></div>                    </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets') }}/demo/demo.js"></script>
  @stack('js')














