<nav class="sidebar">
  <div class="sidebar-header">
    <a href="/" class="sidebar-brand">
      Pink<span>star</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/admin') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Administration du site</span>
        </a>
      </li>
      <li class="nav-item nav-category">web apps</li>
      <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/inbox') }}" class="nav-link {{ active_class(['/inbox']) }}">Boite réception</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/send') }}" class="nav-link {{ active_class(['/send']) }}">Messages envoyée</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}">Nouveau message</a>
            </li>
          </ul>
        </div>
      </li>
  
      <li class="nav-item {{ active_class(['tables/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="{{ is_active_route(['tables/*']) }}" aria-controls="tables">
          <i class="link-icon" data-feather="layout"></i>
          <span class="link-title">Clients</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['tables/*']) }}" id="tables">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/tables/data-table') }}" class="nav-link {{ active_class(['tables/data-table']) }}">Liste des clients</a>
            </li>
          </ul>
        </div>
      </li>


 


     
</nav>