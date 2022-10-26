@extends('layouts.app', [
  'namePage' => 'Gestion category',
  'class' => 'sidebar-mini',
  'activePage' => 'category',
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
		<div class="row">
			<div class="col col-md-6">
				<h4 class="card-title">Category Data</h4>
		</div>
			<div class="col col-md-6">
				<a href="{{ route('category.create') }}" class="btn btn-primary btn-round text-white pull-right">Add</a>
			</div>
		</div>
	</div>
                <div class="card-body">
				<div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
                <table id="datatable"  class="table table-bordered" cellspacing="0" width="100%">
			<tr>
				<th>Category Name</th>
                <th class="disabled-sorting text-right">action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						
						<td>{{ $row->category_name }}</td>
                        
						<td>
                        <form method="post" action="{{ route('category.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('category.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('category.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
							
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
                </div>
				<ul class="pagination justify-content-center mb-4">
        {{$data->links("pagination::bootstrap-4")}}
        </ul>
            </div>

        </div>
    </div>
</div>
	 

@endsection
