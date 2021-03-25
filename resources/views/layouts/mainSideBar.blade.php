
@php 

$services = App\Models\Service::all();
@endphp 
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="{{url('employe/'. Auth::user()->id)}}"><img src="{{asset('storage/'. Auth::user()->photo)}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{Auth::user()->name}} {{ Auth::user()->prenom }}</h5>
          <li class="mt">
            <a class="active" href="{{url('/home')}}">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de bord</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{url('/employes')}}">
              <i class="fa fa-user"></i>
              <span>le personnel</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a href="{{url('/services')}}">
              <i class="fa fa-tasks"></i>
              <span>Services</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Groupes</span>
              </a>
          </li> 
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Commandes</span>
              </a>
            <ul class="sub">
              @foreach($services as $serv)
                <li><a href="{{url('commandes/'.$serv->id.'/details')}}">{{$serv->titre}}</a></li>
              @endforeach
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Messagerie </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{url('statistiques')}}">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Statistiques</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Notifications</span>
            </a>
            
          </li> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>