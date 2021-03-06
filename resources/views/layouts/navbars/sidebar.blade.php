<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ config('app.name') }}
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
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
            <i class="material-icons">manage_accounts</i>
          <span class="sidebar-normal">{{ __('My Profile') }} </span>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="material-icons">people</i>
          <span class="sidebar-normal"> {{ __('Admin Management') }} </span>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'business' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('business') }}">
          <i class="material-icons">store</i>
            <p>{{ __('Stores') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
