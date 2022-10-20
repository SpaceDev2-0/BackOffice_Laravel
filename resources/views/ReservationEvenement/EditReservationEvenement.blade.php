@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Evenement',
    'activePage' => 'evenement',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">


        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Edit Event")}}</h5>
          </div>
          <div class="card-body">
        


             <form action="/reservationevenement/update/{{ $ReservationEvenement->id }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method("put")
                        

                        
                         <div class="mb-3">
                            <label> Choose event</label>
                            <select name="evenement_id" class="form-control">
                            <option  selected disabled>{{ $ReservationEvenement->evenementRv->title}}</option>

                                @foreach ($events as $item)
                                <option value="{{ $item->id}}">{{ $item->title}}</option>
                                @endforeach

                            </select>
                        </div>



                        <div class="mb-3">
                            <label> Nombre de place</label>
                            <input type="text" name="nb_place" class="form-control m-2" placeholder="nb place" value="{{ $ReservationEvenement->nb_place }}">

                        </div>


                        <div class="mb-3">
                            <label> Nom du client </label>
                            <input type="text" name="user" class="form-control m-2" placeholder="Nom du client" value="{{ $ReservationEvenement->user }}">

                        </div>




                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>



          </div>
      </div>
    </div>



      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="{{asset('assets')}}/img/bg5.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="{{asset('assets')}}/img/default-avatar.png" alt="...">
                <h5 class="title">{{ auth()->user()->name }}</h5>
              </a>
              <p class="description">
                  {{ auth()->user()->email }}
              </p>
            </div>
          </div>
          <hr>
          <div class="button-container">
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-facebook-square"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-twitter"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-google-plus-square"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection