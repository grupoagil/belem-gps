<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route('admin.home')}}" class="simple-text logo-normal">
      {{ __('Belém GPS') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'gerenciamento-de-usuarios') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i class="material-icons">people</i>
          <p>{{ __('Usuários') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <i class="material-icons">badge</i>
                <span class="sidebar-normal">{{ __('Perfil de Usuário') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'gerenciamento-de-usuarios' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <i class="material-icons">group_add</i>
                <span class="sidebar-normal"> {{ __('Gerenciador de Usuários') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.produtos') }}">
          <i class="material-icons">grid_view</i>
            <p>{{ __('Produtos') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
