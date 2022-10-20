@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'ReservationEvenement',
    'activePage' => 'ReservationEvenement',
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
              <a class="btn btn-primary btn-round text-white pull-right" href="{{url('reservationevenement/create')}}">Add Reservation Evenement</a>
            <h4 class="card-title">Reservation Evenements</h4>
          </div> 

          <div class="card-body">

            <div class="toolbar">

            </div>
            

            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                <th>Evenement</th>
                  <th>Nb place</th>
                  <th>client</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Evenement</th>
                  <th>Nb place</th>
                  <th>client</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>

              
              @foreach ($ReservationEvenement as $item)


                <tr>

                    <td>{{ $item->evenementRv->title }}</td>

                    <td>{{ $item->nb_place }}</td>

                    <td>{{ $item->user }}</td>

                    <!-- <td>
                   

            <span class="avatar avatar-sm rounded-circle">
                        <img src="/cover/{{ $item->image }}" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>


                    </td> -->

                    <td class="text-right">
                      
                      <!-- <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a> -->

                    <a href="/reservationevenement/edit/{{ $item->id }}" class="btn btn-outline-primary">Update</a>
<br/>
                    <form action="delete/{{ $item->id }}" method="POST">

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