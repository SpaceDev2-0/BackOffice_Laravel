@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'post',
    'activePage' => 'post',
    'activeNav' => '',
])

@section('content')

<div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">

        
          <div class="card-header">
              <a class="btn btn-primary btn-round text-white pull-right" href="{{url('Post/create')}}">Add post</a>
            <h4 class="card-title">posts</h4>
          </div> 

          <div class="card-body">

            <div class="toolbar">

            </div>
            

            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Description</th>
           
                  <th>Image</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>

              
              @foreach ($Posts as $post)


                <tr>

                    <td>{{ $post->name }}</td>
                    @foreach($categories as $category)
                          @if($category->id == $post->categorya_id)
                            <td>{{$category->name}}</td>
                          @endif
                        @endforeach
                    <td>{{ $post->content }}</td>



                    <td>
                   

            <span class="avatar avatar-sm rounded-circle">
                        <img src="/cover/{{ $post->img }}" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>


                    </td>

                    <td class="text-right">
                      
                      <!-- <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a> -->

                    <a href="/post/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a>
<br/>
                    <form action="delete/{{ $post->id }}" method="POST">

                            @csrf
                            @method('delete')
                    <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete </button>
                           
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
@endsection