<body>

<!-- Carregando o nav -->
<?php $this->load->view('components/nav'); ?>

<!-- Div que contém todos os elementos da página -->
<div class="container" style="margin-top: 100px">

<!-- Formulários -->
<div class="tab-content" id="pills-tabContent">

	<!-- Formulário de Login -->
	<div class="tab-pane fade show active" id="form-login" role="tabpanel" aria-labelledby="form-login-tab">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<form class="form-signin" id="form-login" name="form-login" method="post">
					<fieldset>
						<div class="py-3 text-center">
							<div class="d-block mx-auto">
								<i class="fas fa-sign-in-alt fa-5x"></i>
							</div>
							<h2>Entrar</h2>
						</div>
						<h4>Caso não tenha cadastro, selecione o curso que deseja cursar, <a href="inscricao"> Clique Aqui</a></h4>

						<div class="form-label-group">
							<label for="inputEmailLogin">Email</label>
							<input id="inputEmailLogin" name="inputEmailLogin" class="form-control" placeholder="Email" required autofocus="" type="email" maxlength="45">
						</div>

						<div class="form-label-group">
							<label for="inputSenhaLogin">Senha</label>
							<input id="inputSenhaLogin" name="inputSenhaLogin" class="form-control" placeholder="Senha" required type="password" value="" maxlength="45">
						</div>

						<div class="row d-flex justify-content-center p-3">
							<button id="btnLogar" name="btnLogar" class="btn btn-lg btn-block col-md-12" type="submit" value="Register" name="register">
								<label> Entrar </label>
							</button>
						</div>
					<fieldset>
				</form>
			</div>
		</div>

	</div>

</div>

<hr>



<br>
<br>
<br>

<script type="text/javascript">

$(document).ready(function(){

	//Logar
	$('#btnLogar').on('click',function(){

		// Pegando valores dos inputs
		var inputEmailLogin = $('#inputEmailLogin').val();
		var inputSenhaLogin = $('#inputSenhaLogin').val();

		// verificando se os campos estão preenchidos
		if (inputEmailLogin == "" || inputSenhaLogin == "") {
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Cliente/login
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Cliente/login')?>",
				dataType : "JSON",
				data : {
					inputEmailLogin:inputEmailLogin,
					inputSenhaLogin:inputSenhaLogin
				},
				success: function(data){
					alert(data);
				}
			});
			// Limpando o formulário
			document.getElementById("#form-login").reset();
		}
	});

	//Cadastrar
	$('#btnCadastrar').on('click',function(){

		// Pegando valores dos inputs
		var inputNomeCadastro = $('#inputNomeCadastro').val();
		var inputTelefoneCadastro = $('#inputTelefoneCadastro').val();
		var inputEmailCadastro = $('#inputEmailCadastro').val();
		var inputSenhaCadastro = $('#inputSenhaCadastro').val();

		// verificando se os campos estão preenchidos
		if (inputNomeCadastro == "" || inputTelefoneCadastro == "" || inputEmailCadastro == "" || inputSenhaCadastro == "") {
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Cliente/add
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Cliente/add')?>",
				dataType : "JSON",
				data : {
					inputNomeCadastro:inputNomeCadastro,
					inputTelefoneCadastro:inputTelefoneCadastro,
					inputEmailCadastro:inputEmailCadastro,
					inputSenhaCadastro:inputSenhaCadastro
				},
				success: function(data){
					alert(data);
				}
			});
			// Limpando o formulário
			document.getElementById("#form-cadastro").reset();
		}
	});
});

</script>

<!-- fechando o container, body e a tag html aberta no arquivo head.php -->
</div>

</body>

</html>