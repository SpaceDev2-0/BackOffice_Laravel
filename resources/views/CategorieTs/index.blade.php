@extends('layouts.app', [
  'namePage' => 'Gestion Categories Trotinettes',
  'class' => 'sidebar-mini',
  'activePage' => 'categoriets',
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
              <a class="btn btn-primary btn-round text-white pull-right" href="{{ route('categoriets.create') }}"> Create CategorieTrotinette</a>
            <h4 class="card-title">Catégories Trotinettes</h4>
            <div class="col-12 mt-2">
                                        </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Type Trotinette</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categoriets as $categoriet)
                    <tr>
                        <td>{{ $categoriet->id }}</td>
                        <td>{{ $categoriet->type }}</td>
                        <td>
                            <form action="{{ route('categoriets.destroy',$categoriet->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('categoriets.edit',$categoriet->id) }}">Edit</a>
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

