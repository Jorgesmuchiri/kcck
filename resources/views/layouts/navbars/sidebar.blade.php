<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">

  <div class="logo">
    <a href="http://10.9.41.27/" class="simple-text logo-normal">
      <img src="{{asset('images/logo.png')}}" height="100">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">


      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Access Control') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item{{ $activePage == 'enquiries' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('enquiries.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Enquiries') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'programs' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('programs.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Programs') }}</p>
        </a>
      </li>


       <li class="nav-item{{ $activePage == 'nprograms' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('newprograms.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('New Programs') }}</p>
        </a>
      </li>

     <!--  <li class="nav-item{{ $activePage == 'application' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('application.index') }}">
          <i class="material-icons">supervised_user_circle</i>
          <p>{{ __('Students') }}</p>
        </a>
      </li>
 -->

      <li class="nav-item {{ ($activePage == 'reports' || $activePage == '') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
               <i class="material-icons">bubble_chart</i>
          <p>{{ __('Reports') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'reports' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('country') }}">
                <span class="sidebar-mini"> C</span>
                <span class="sidebar-normal">{{ __('Countries') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'adverts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('advert') }}">
                <span class="sidebar-mini"> A </span>
                <span class="sidebar-normal"> {{ __('Advert Sources') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      


   
           <!--  <li class="nav-item{{ $activePage == 'reports' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('application.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Reports') }}</p>
        </a>
      </li> -->


    </ul>
  </div>
</div>