<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/beer-ecommerce/home">Home</a><span>|</span></li>
				<li>Entrar ou Criar Conta</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php foreach($dados as $dado){ ?>
							<li><a href="/beer-ecommerce/categoria/<?= $dado['id_categoria'] ?>"><?= $dado['descricao_categoria'] ?></a></li>
						<?php } ?>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Entrar ou Criar Conta</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Me clique</div>
				  </div>
				  <div class="form">
					<h2>Já sou cliente</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Usuario" required=" ">
					  <input type="password" name="Password" placeholder="Senha" required=" ">
					  <input type="submit" value="Entrar">
					</form>
				  </div>
				  <div class="form">
					<h2>Criar Conta</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Usuario" required=" ">
					  <input type="password" name="Password" placeholder="Senha" required=" ">
					  <input type="email" name="Email" placeholder="Email" required=" ">
						<input type="text" name="Phone" placeholder="Telefone" required=" ">
						<input style="width: 70%; float: left;" type="text" name="street" placeholder="Rua" required=" ">
						<input class="form-module-number" style="width: 28%; float: right;" type="number" name="number" placeholder="Número" required=" ">
						<input type="text" name="Cep" placeholder="CEP" required=" ">
						<select class="select_state_cities" style="width: 40%; float: left; background-color: white;" id="selects_estados"></select>
						<select class="select_state_cities" style="width: 40%; float: right; background-color: white;" id="selects_cidades"></select>
						<input type="text" name="Complemento" placeholder="Complemento" required=" ">
						<input type="text" name="Apelido" placeholder="Apelido" required=" ">
					  <input type="submit" value="Criar">
					</form>
				  </div>
				  <div class="cta"><a href="#">Esqueceu a senha?</a></div>
				</div>
			</div>
			<script src="<?=base_url("assets/public/js/cidade-estados-brasil.min.js")?>"></script>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
				new statesCitiesBR({
					states: {
						elementID: "selects_estados",
						defaultOption: "Estado"
					},
					cities: {
						elementID: "selects_cidades",
						state: "auto",
						defaultOption: "Cidade"
					}
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Nam libero tempore</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>officiis debitis aut rerum</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>eveniet ut et voluptates</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->