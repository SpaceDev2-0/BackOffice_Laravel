@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'categorya',
    'activePage' => 'categorya',
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
              <a class="btn btn-primary btn-round text-white pull-right" href="{{url('categorya/create')}}">Add categorya</a>
            <h4 class="card-title">categorya</h4>
          </div> 

          <div class="card-body">

            <div class="toolbar">

            </div>
            

            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Title</th>
            
           
                  <th>Image</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                 
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>

              
              @foreach ($categorya as $categorya)


                <tr>

                    <td>{{ $categorya->name }}</td>
                    


                  
                    <td class="text-right">
                      
                      <!-- <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a> -->

                    <a href="/categorya/edit/{{ $categorya->id }}" class="btn btn-outline-primary">Update</a>
<br/>
                    <form action="delete/{{ $categorya->id }}" method="POST">

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