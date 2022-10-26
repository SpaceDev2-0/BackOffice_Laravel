@extends('layouts.app', [
  'namePage' => 'Gestion category',
  'class' => 'sidebar-mini',
  'activePage' => 'category',
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

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        add category
                      
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Category Name :</label>
                            <input type="text" name="category_name"   class="form-control" > 
                            @error('category_name')

                            <div  class="alert alert-danger mt-1 mb-1">
                          {{ $message}}
                            </div>

                              @enderror

                       
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">save</button>
                        
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
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

