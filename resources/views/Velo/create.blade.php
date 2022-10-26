@extends('layouts.app', [
  'namePage' => 'Gestion velo',
  'class' => 'sidebar-mini',
  'activePage' => 'velo',
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
	<div class="card-header">Add velo</div>
	<div class="card-body">
		<form method="post" action="{{ route('velo.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">velo Name</label>
				<div class="col-sm-10">
					<input type="text" name="velo_name" class="form-control" />
          @error('velo_name')

       <div  class="alert alert-danger mt-1 mb-1">
        {{ $message}}
      </div>

     @enderror
				</div>
			</div>

			<div class="row mb-3">
			<label class="col-sm-2 col-label-form">Select Category Name :</label>
			<div class="col-sm-10">
				<select name="category_id" id="" class="form-control">
					@foreach($categories as $item)
						<option value="{{ $item->id}}">
						{{ $item->category_name}}

						</option>


					@endforeach

				</select>
			</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">velo spefication</label>
				<div class="col-sm-10">
					<input type="text" name="velo_spefication" class="form-control" />
          @error('velo_spefication')

<div  class="alert alert-danger mt-1 mb-1">
 {{ $message}}
</div>

@enderror
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">velo availability</label>
				<div class="col-sm-10">
					<select name="velo_availability" class="form-control">
						<option value="oui">oui</option>
						<option value="non">non</option>
					</select>
          @error('velo_availability')

       <div  class="alert alert-danger mt-1 mb-1">
         {{ $message}}
<         /div>

          @enderror
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">velo prix location</label>
				<div class="col-sm-10">
					<input type="text" name="velo_prix_location" class="form-control" />
          @error('velo_prix_location')

<div  class="alert alert-danger mt-1 mb-1">
 {{ $message}}
</div>

@enderror
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">velo Image</label>
				<div class="col-sm-10">
					<input type="file" name="velo_image" />
     
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
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


