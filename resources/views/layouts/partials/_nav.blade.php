<div id="nav-menu">
		<div class="myNaveStyle">
			<div class="row">

				<div class="col-lg-12">
					<!-- Navbar -->
					<nav class="navbar navbar-expand-lg" id="mainNav">
						<a class="navbar-brand logo" href="{{ route('accueil') }}">
							<span class="logo-icon mdi-bg mdi-bg-sm logoDesign" rel="shortcut icon" >
                            <a class="navbar-brand logo" href="{{ route('accueil') }}">


                         </span>
							<span class="logo-text">OPTIMUS</span>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headmainmenu" aria-controls="headmainmenu" aria-expanded="false" aria-label="Toggle navigation">
							<i class="mdi mdi-menu"></i> Menu
						</button>
						<div class="collapse navbar-collapse" id="headmainmenu">
							<ul class="navbar-nav ml-auto">

								<li class="nav-item">
									<a class="nav-link" href="{{ route('presentations.index') }}">À Propos</a>
								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('articles.index') }}">Articles</a>
								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('evenements.index') }}" >Evenements</a>
								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('fondateurs.index') }}">Fondateurs</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{ route('services.index') }}">Services</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{ route('portfolios.index') }}">Portfolio</a>
								</li>
								

								
								<li class="nav-item">
									<a class="nav-link btn theme-btn-default btn-icon easing-click" href="{{route('contact.index')}}"><span>Contactez-Nous</span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>

			</div>
		</div>
	</div>
</div>
