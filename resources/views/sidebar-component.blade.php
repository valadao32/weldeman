	<nav class="navbar navbar-custom navbar-fixed-top rounded-right" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Weldeman System</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar navbar-fixed-left">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
				<div class="profile-usertitle-status"><span></span>{{ Auth::user()->email }}</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li @if($current == "dashboard" ) class="col-12 active" @else class="col-12" @endif><a href="home"><em class="fa fa-table">&nbsp;</em> Dashboard</a></li>
			<li @if($current == "tabela_principal" ) class="col-12 active" @else class="col-12" @endif><a href="tabela_principal"><em class="fa fa-table">&nbsp;</em> Tabela Principal</a></li>
			<li @if($current == "tabela_retorno" ) class="col-12 active" @else class="col-12" @endif><a href="relatorios.php"><em class="fa fa-clock-o">&nbsp;</em> Tabela de Retorno</a></li>
			<li @if($current == "tabela_fechamento" ) class="col-12 active" @else class="col-12" @endif><a href="cadastro.php"><em class="fa fa-check-circle">&nbsp;</em> Tabela de Fechamento</a></li>
			<li @if($current == "tabela_lixo" ) class="col-12 active" @else class="col-12" @endif><a href="cadastro.php"><em class="fa fa-user-times">&nbsp;</em> Tabela Lixo</a></li>
			
			<li class="col-12" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
				<a href="/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a>
			</li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
		</ul>
	</div>
