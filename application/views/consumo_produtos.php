<div class="row d-flex justify-content-center">
	<?php  
		// Se existem consumototal
		if ($consumototal)
		{
			/*Exibindo cada consumo*/
			foreach($consumototal as $p)
			{
	     		echo $p['produto_idProduto'].'<br>'; 
		   		echo $p['quantidadeconsumida'].'<br>';
				echo $p['periodo'].'<br>'; 
			}	
		} 	
	?>
</div>

<script type="text/javascript">
	function finalizar(idPedido) {
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('Pedido/finalizar')?>",
			dataType : "JSON",
			data : {
				idPedido:idPedido
			},
			success: function(data){
				alert(data);
			}
		});
		location.reload();
	}
	function cancelar(idPedido) {

		var result = confirm("Cancelar inscrição?");

		if (result) {
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Pedido/cancelar')?>",
				dataType : "JSON",
				data : {
					idPedido:idPedido
				},
				success: function(data){
					alert(data);
				}
			});
			location.reload();
		}
	}
	function pagar(idPedido) {
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('Pedido/pagar')?>",
			dataType : "JSON",
			data : {
				idPedido:idPedido
			},
			success: function(data){
				alert(data);
				console.log(JSON.parse(data));
			}
		});
		location.reload();
	}
</script>

</body>
</html>
