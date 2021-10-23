<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                <a class="nav-link text-white" >
                    <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt text-white"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading text-white"></div>

                <div class="marginMenuDashboard">
                    <a class="nav-link collapsed bg-primary text-white" href="{{url('presentationsDash')}}" >
                        <div class="sb-nav-link-icon"><i class="fas fa-info-circle colorIconMenuDashboard"></i></div>
                        <span> A Propos </span>

                    </a>
                </div>

                <div class="marginMenuDashboard">
                    <a class="nav-link collapsed bg-primary text-white" href="{{url('servicesDash')}}" >
                        <div class="sb-nav-link-icon"><i class="fas fa-info-circle colorIconMenuDashboard"></i></div>
                        <span> Services </span>

                    </a>
                </div>

                <div class="marginMenuDashboard">
                    <a class="nav-link collapsed bg-primary text-white" href="{{url('infographieDash')}}" >
                        <div class="sb-nav-link-icon"><i class="fas fa-info-circle colorIconMenuDashboard"></i></div>
                        <span> Infographie </span>

                    </a>
                </div>

                <div class="marginMenuDashboard">
                    <a class="nav-link collapsed bg-primary text-white" href="{{url('portfoliosDash')}}" >
                        <div class="sb-nav-link-icon"><i class="fas fa-info-circle colorIconMenuDashboard"></i></div>
                        <span> Portfolio </span>

                    </a>
                </div>

                <div class="marginMenuDashboard">
                    <a class="nav-link collapsed bg-primary text-white" href="{{url('commandesDash')}}" >
                        <div class="sb-nav-link-icon"><i class="fas fa-info-circle colorIconMenuDashboard"></i></div>
                        <span> Commandes </span>

                    </a>
                </div>


                <div class="marginMenuDashboard">
                    <a  href="{{url('articlesDash')}} " class="nav-link bg-primary text-white" >
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper colorIconMenuDashboard"></i></div>
                        <span  > Articles</span>

                    </a>
                </div>

                <div class="marginMenuDashboard">
                    <a class="nav-link bg-primary text-white" href="{{url('evenementsDash')}}" >
                        <div class="sb-nav-link-icon"><i class="fas fa-calendar-week colorIconMenuDashboard"></i></div>
                        <span >  Evenements</span>
                    </a>
                </div>
                <div class="marginMenuDashboard">
                    <a class="nav-link   bg-primary text-white " href="{{url('fondateursDash')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-users colorIconMenuDashboard"></i></div>
                        <span > Fondateurs </span>

                    </a>

                </div>


                <div class="marginMenuDashboard">
                    <a class="nav-link bg-primary text-white" href="{{url('messagesRecu')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-comment-alt colorIconMenuDashboard"></i></div>
                        <span > Messagerie </span>
                        @if ($messagesRecu->count()> 0)
                            <span class="sb-sidenav-collapse-arrow badge badge-danger" style="color: white">{{$messagesRecu->count()}} </span>
                        @endif
                        </a>

                </div>

                <div class="marginMenuDashboard">
                    <a class="nav-link bg-primary text-white" href="{{url('commentsDash')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-comments colorIconMenuDashboard"></i></div>
                        <span > Commantaires </span>
                        @if ($commentC > 0)
                            <span class="sb-sidenav-collapse-arrow badge badge-danger" style="color: white">{{$commentC}} </span>
                        @endif
                    </a>

                </div>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::User()->name}}<br><br>
            © 2021 SARL DGSoftware Tous droits réservés.
        </div>

        </nav>
    </div>
