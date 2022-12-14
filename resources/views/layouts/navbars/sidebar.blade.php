<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('CT') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <!-- <li>
        <a data-toggle="collapse" href="#User Management">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>
            {{ __("User Management") }}
            <b class="caret"></b>
          </p>
        </a> -->
        <!-- <div class="collapse show" id="User Management"> -->
          <!-- <ul class="nav"> -->
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("User Profile") }} </p>
              </a>
            </li>
            <!-- <li class="@if ($activePage == 'users') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("User Management") }} </p>
              </a>
            </li> -->
          <!-- </ul> -->
        <!-- </div> -->
      <!-- <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li> -->
      <!-- <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li> -->
      <!-- <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> -->
      <!-- <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li> -->
      <!-- <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li> -->
   
        <li class = "@if ($activePage == 'Gestion Trotinettes') active @endif">
        <!-- <a href="{{ route('page.index','trotinettes') }}"> -->
          <a href="{{ route('trotinettes.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Gestion Trotinettes') }}</p>
        </a>
      </li>
      <!-- </li> -->
        <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('categoriets.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Gestion Cat??gories Trotinettes') }}</p>
        </a>
      </li>

      </li>
    <li class="@if ($activePage == 'post') active @endif">
        <a href="{{ route('AllPost','Post') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Post') }}</p>

           </a>
               </li>
               <li class="@if ($activePage == 'categorya') active @endif">
        <a href="{{ route('Allcategoryarticle','categorya') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Category article') }}</p>

           </a>
               </li>
               <li class="@if ($activePage == 'balade') active @endif">
        <a href="{{ route('all.balade','balade') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Balade') }}</p>

           </a>
               </li>

               <li class="@if ($activePage == 'participant') active @endif">
        <a href="{{ route('all.participant','participant') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Participant') }}</p>

           </a>
               </li>

               <li class="@if ($activePage == 'evenement') active @endif">
        <a href="{{ route('all.evenement','evenement') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Evenement') }}</p>

           </a>
               </li>

               <li class="@if ($activePage == 'ReservationEvenement') active @endif">
        <a href="{{ route('all.reservationevenement','ReservationEvenement') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Reservation Evenement') }}</p>

           </a>
               </li>

      <li class = "@if ($activePage == 'Locations') active @endif">
        <a href="{{ route('locations.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Gestion Locations') }}</p>
        </a>
      </li>

      <li class = "@if ($activePage == 'Accessoires') active @endif">
        <a href="{{ route('accessoires.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Gestion Accessoire') }}</p>
        </a>
      </li>
      
      <li class = "@if ($activePage == 'velos') active @endif">
        <a href="{{ route('velo.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Gestion velo') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'category') active @endif">
        <a href="{{ route('category.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Gestion category') }}</p>
        </a>
      </li>

      <!-- <li class = "">
        <a href="{{ route('page.index','upgrade') }}" class="bg-info">
          <i class="now-ui-icons arrows-1_cloud-download-93"></i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>