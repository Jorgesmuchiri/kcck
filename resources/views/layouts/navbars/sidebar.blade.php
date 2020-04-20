<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">

  <div class="logo">
    <a href="http://10.9.41.27/" class="simple-text logo-normal">
      <img src="{{asset('images/code-kids-logo.png')}}" height="100">
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
        <li class="nav-item{{ $activePage == 'hosts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('hosts.index') }}">
          <i class="material-icons">home</i>
          <p>{{ __('Host') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'course' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('course.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Courses') }}</p>
        </a>
      </li>


      


       <li class="nav-item{{ $activePage == 'event' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('event.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Events') }}</p>
        </a>
      </li>




       <li class="nav-item{{ $activePage == 'media' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('medias.index') }}">
          <i class="material-icons">portrait</i>
            <p>{{ __('Media') }}</p>
        </a>
      </li>

  <li class="nav-item{{ $activePage == 'partner' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('partner.index') }}">
          <i class="material-icons">supervised_user_circle</i>
          <p>{{ __('Partners') }}</p>
        </a>
      </li>


      <!-- <li class="nav-item {{ ($activePage == 'reports' || $activePage == '') ? ' active' : '' }}">
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
      
 -->



    </ul>
  </div>
</div>