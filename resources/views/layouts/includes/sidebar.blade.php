<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
        <div class="sidebar-brand-icon">
          <i class="fab fa-black-tie"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
          {{ config('app.name', 'Fiel') }}<sup>2</sup>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ Request::is('home') ? 'active' : null}}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{__('Dashboard')}}</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Links Rápidos -->
      <div class="sidebar-heading">
        {{__('Links rápidos')}}
      </div>
      <li class="nav-item {{ Request::is('members/create') ? 'active' : null}}">
        <a class="nav-link" href="{{ route('members.create') }}">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>{{__('Adicionar obreiro')}}</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Heading -->
      <div class="sidebar-heading">
        {{__('Menu')}}
      </div>

      <!-- MEMBROS - Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ Request::is('members') ? 'active' : null}}{{ Request::is('members/*') ? 'active' : null}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>{{__('Obreiros')}}</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{__('Administrar')}}</h6>
            <a class="collapse-item {{ Request::is('members') ? 'active' : null}}" href="{{ route('members.index') }}">{{__('List')}}</a>
            <a class="collapse-item {{ Request::is('members/create') ? 'active' : null}}" href="{{ route('members.create') }}">{{__('Add')}}</a>
            <a class="collapse-item {{ Request::is('members/aniversariantes') ? 'active' : null}}" href="{{ route('members.niver') }}">{{__('Aniversariantes')}}</a>
            <a class="collapse-item {{ Request::is('members/deleted') ? 'active' : null}}" href="{{ route('members.deleted') }}">{{__('Apagados')}}</a>
          </div>         
        </div>
      </li>

      <!-- IGREJAS - Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{ Request::is('igrejas') ? 'active' : null}}{{ Request::is('igrejas/*') ? 'active' : null}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIgreja" aria-expanded="true" aria-controls="collapseIgreja">
          <i class="fas fa-fw fa-church"></i>
          <span>{{__('Igrejas')}}</span>
        </a>
        <div id="collapseIgreja" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{__('Igrejas')}}</h6>
          <a class="collapse-item" href="{{ route('igrejas.index') }}">{{__('Listar')}}</a>
            <a class="collapse-item" href="{{ route('igrejas.create') }}">{{__('Adicionar')}}</a>
           
          </div>
        </div>
      </li>

      <!-- Identidade ministerial, ID - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIdMinisterial" aria-expanded="true" aria-controls="collapseIdMinisterial">
          <i class="fas fa-fw fa-id-card"></i>
          <span>{{__('Identidades Ministeriais')}}</span>
        </a>
        <div id="collapseIdMinisterial" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{__('IDs Ministeriais')}}</h6>
            <a class="collapse-item" href="{{ route('identidades.index')}}">{{__('Listar')}}</a>
            <a class="collapse-item" href="{{ route('vencidas') }}">{{__('Vencidas')}}</a>        
          </div>
        </div>
      </li>

      <!-- REGIONAIS - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRegional" aria-expanded="true" aria-controls="collapseRegional">
          <i class="fas fa-fw fa-map-marked-alt"></i>
          <span>{{__('Regionais')}}</span>
        </a>
        <div id="collapseRegional" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{__('Regionais da Fiel')}}</h6>
            <a class="collapse-item" href="{{route('regionais.index')}}">{{__('Listar Regionais')}}</a>    
            <a class="collapse-item" href="{{route('regionais.create')}}">{{__('Cadastrar Regional')}}</a>    
          </div>
        </div>
      </li>
     
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>