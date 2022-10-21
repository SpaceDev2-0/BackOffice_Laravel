@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Post',
    'activePage' => 'Post',
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
            <h5 class="title">{{__(" Edit Post")}}</h5>
          </div>
          <div class="card-body">
        


             <form action="/Post/update/{{ $Posts->id }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method("put")
                            <input type="text" name="name" class="form-control m-2" placeholder="Title" value="{{ $Posts->name }}">
        				 <!-- <input type="text" name="author" class="form-control m-2" placeholder="author"> -->
                         <Textarea name="content" cols="20" rows="4" class="form-control m-2" placeholder="Description">{{ $Posts->content }}
</Textarea>

   <label for="post_categorya" class="control_labels">Post categorya</label><label class="req_fields" title="Required Field">*</label>
                      <select class="form-control" id="post_categorya" name="post_categorya"  required>
                        @foreach($categories as $categorya)
                          <option>{{$categorya->name}}</option>
                        @endforeach
                      </select>
                         <!-- <input type="date" name="date" class="form-control m-2" placeholder="Date of Post"> -->

                         <label class="m-2">Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="image">
                         
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