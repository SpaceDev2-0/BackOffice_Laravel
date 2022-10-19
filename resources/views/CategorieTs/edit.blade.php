@extends('layouts.app', [
  'namePage' => 'Gestion Categories Trotinettes',
  'class' => 'sidebar-mini',
  'activePage' => 'categoriets',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Edit Profile")}}</h5>
          </div>
          <div class="card-body">
                 <form action="{{ route('categoriets.update',$categoriet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
               
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Type:</strong>
                        <input type="text" name="type" value="{{ $categoriet->type }}" class="form-control" placeholder="type">
                        @error('Type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
          </div>
          </div>
          </div>
          </div>
          </div>
          
@endsection