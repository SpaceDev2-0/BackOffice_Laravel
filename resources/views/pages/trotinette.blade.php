<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Trotinette</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 CRUD Example Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('trotinettes.create') }}"> Create Trotinette</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Nom Trotinette</th>
                    <th>Categorie Trotinette</th>
                    <th>Vitesse Trotinette</th>
                    <th>Poids Trotinette</th>
                    <th>Couleur Trotinette</th>
                    <th>Prix Trotinette</th>
                    <th>Prix_location Trotinette</th>
                    <th>Quantité</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trotinettes as $trotinette)
                    <tr>
                        <td>{{ $trotinette->id }}</td>
                        <td>{{ $trotinette->nom }}</td>
                        <td>{{ $trotinette->categorie }}</td>
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
        {!! $trotinettes->links() !!}
    </div>
</body>
</html>