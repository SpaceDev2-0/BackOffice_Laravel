@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Accessoire edit',
    'activePage' => 'Accessoire',
    'activeNav' => '',
])
@section('content')
<div class="panel-header panel-header-sm"></div>
<div class="content">
    
    <div class="row">
        <div class="col-12 col-md-10">
            <h3>Modifier accessoire</h3>
        </div>
        <div class="col-12 col-md-2 text-end">
            <a class="btn btn-primary" href="{{route('accessoires.index')}}">Go Back to Accessoires</a>
        </div>
    </div>
    @if($errors->any())
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Some error occured!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('accessoires.update', $accessoire->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomAccessoire">Nom Accessoire</label>
                        <input type="text" class="form-control" id="nomAccessoire" name="nomAccessoire" placeholder="nomAccessoire" value="{{$accessoire->nomAccessoire}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="prix">Prix</label>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="prix" value="{{$accessoire->prix}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    

</div>

@endsection