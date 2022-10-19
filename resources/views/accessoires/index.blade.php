@extends('layouts.app', [
  'namePage' => 'Gestion Accessoires',
  'class' => 'sidebar-mini',
  'activePage' => 'Accessoires',
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
				<a class="btn btn-primary btn-round text-white pull-right" href="{{route('accessoires.create')}}">Creer accessoire </a>
			  <h4 class="card-title">Accessoires : </h4>
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
					<th scope="col">Nom Accessoire</th>
                    <th scope="col">Prix</th>
					<th class="disabled-sorting text-right">Actions</th>
				  </tr>
				</thead>
				<tfoot>
				  <tr>
					<th scope="col">Nom Accessoire</th>
                    <th scope="col">Prix</th>
					<th class="disabled-sorting text-right">Actions</th>
				  </tr>
				</tfoot>
				<tbody>
					@if($accessoires->count() > 0)
					@foreach($accessoires as $accessoire)
                    <tr>
                        <td>{{$accessoire->nomAccessoire}}</td>
                        <td>{{$accessoire->prix}} dt</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('accessoires.edit', $accessoire->id)}}">Edit</a>
                            <form action="{{route('accessoires.destroy', $accessoire->id)}}" method="POST" style="display: inline-block;">
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




    

@endsection