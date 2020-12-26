<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="{{url('/')}}" class="simple-text">
       <img src="{{asset('assets/img/logo/E-ECG-LOGO-[Converted].png')}}" alt="logo" style="width: 40px, widows: 40px;">
    {{ __('E-ECG') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Accueil') }}</p>
        </a>
      </li>

      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ url('cours') }}">
          <i class="now-ui-icons education_agenda-bookmark"></i>
          <p>{{ __('Cours') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'demandes') active @endif">
        <a href="{{ url('demandes') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __("Demandes D'abonnement") }}</p>
        </a>
      </li> 
      <li class = "@if ($activePage == 'profile') active @endif">
        <a href="{{ url('abonnés') }}">
          <i class="now-ui-icons users_circle-08"></i>
          <p>{{ __("Abonnés") }}</p>
        </a>
      </li>    
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons ui-1_email-85"></i>
          <p>{{ __('Messages') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons business_chart-bar-32"></i>
          <p>{{ __('Statistiques') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
