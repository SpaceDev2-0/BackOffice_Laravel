@extends('layouts.app', [
  'namePage' => 'Gestion Locations',
  'class' => 'sidebar-mini',
  'activePage' => 'Locations',
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
				<a class="btn btn-primary btn-round text-white pull-right" href="{{route('locations.create')}}">Creer location </a>
			  <h4 class="card-title">Locations : </h4>
			  <div class="col-12 mt-2">
				@if($message = Session::get('error'))
				<div class="row">
					<div class="col-12">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>{{$message}}!</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					</div>
				</div>
				@endif
				</div>
			</div>
			<div class="card-body">
			  <div class="toolbar">
				<!--        Here you can write extra buttons/actions for the toolbar              -->
			  </div>
			  <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
				  <tr>
					<th scope="col">#</th>
					<th scope="col">Id Client</th>
					<th scope="col">Id Station</th>
					<th scope="col">Status location</th>
					<th scope="col">Remarque</th>
					<th class="disabled-sorting text-right">Actions</th>
				  </tr>
				</thead>
				<tfoot>
				  <tr>
					<th scope="col">#</th>
					<th scope="col">Id Client</th>
					<th scope="col">Id Station</th>
					<th scope="col">Status location</th>
					<th scope="col">Remarque</th>
					<th class="disabled-sorting text-right">Actions</th>
				  </tr>
				</tfoot>
				<tbody>
					@if($locations->count() > 0)
					@foreach($locations as $location)
					<tr>
						<td>{{$loop->index + 1}}</td>
						<td>{{$location->idClient}}</td>
						<td>{{$location->idStation}}</td>
						<td>
							@if($location->statutLocation == 1)
								<span class="badge bg-danger">Non rendu</span>
							@else
								<span class="badge bg-success">Rendu</span>
							@endif
						</td>
						<td>{{$location->remarque}}</td>
						<td>
							<form action="{{ route('locations.destroy', $location->id) }}" method="POST">
								<a class="btn btn-info" href="{{ route('locations.show', $location->id) }}">Show</a>
								<a class="btn btn-primary" href="{{ route('locations.edit', $location->id) }}">Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
								
							</form>
						</td>
					</tr>
					@endforeach
				@else
				<tr>
				<td colspan="6">Record not found!</td>
				</tr>
				@endif
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


@endsection