

		<div class="">

		<?php
								require_once('nav.php');

							?>

			<form class=" bg-light container" id="itemForm">
			
							
					
					
					<div class="form-row">
								
										<div class="col-4">		
											<label for="exampleFormControlInput1">Código do produto:</label>
											<input type="number" name="codProduto" class="form-control" id="validationServer01" value="" placeholder="código do produto">
										</div>	
										<div class="col-8">	
											<label for="exampleFormControlInput1">Nome do Produto:</label>
											<input type="text" name="nomeProduto" class="form-control" id="validationServer02" placeholder="Nome do Produto">
										</div>
													
					</div>
					 
					<div class="form-row">
										<div class="col-2">		
											<label for="exampleFormControlInput1">Quantidade:</label>
											<input type="number" name="qtdeProduto" class="form-control" id="validationServer03" value="" placeholder="Quantidade">
										</div>	
										<div class="col-10">
											<label for="exampleFormControlInput1">Preço:</label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text">R$</span>
											  </div>
											  <input type="number" name="valorProduto"  class="form-control" id="validationServer04" aria-label="Amount (to the nearest dollar)">
											  <div class="input-group-append">
												<span class="input-group-text">.00</span>
											  </div>
											</div>
										</div>
								</div>	
						
					  
					  <div class="form-row">
						<button  type="button" id="insereItem" class="btn btn-primary btn-sm">Incluir Item</button>
						<button type="reset" class="btn btn-danger btn-sm">Limpar Item</button>
						
						

						</div>

						<div class="row">
								<div class="col-3" style="padding:2rem;">
										<button type="submit" class="btn btn-success btn-lg">Finalizar Compra</button>
										<button type="button" class="btn btn-danger btn-lg">Cancelar Compra</button>
								</div>
								<div class="col-6" style="padding:2rem;">
										<div class="" id="msgAlert"></div>	
							
								</div>
								<div class="col-2" style="padding:2rem;">
										<h2>Total: <strong>R$</strong><span id="totalPedido"></span></h2>

								</div>
						
						</div>
						
						
			</form>
			
			
			<form id="" style="">
					<div class="container form-group">
								
								
							<div class="scrollspy">
									
									<table class="table" id="tblListar">
									<thead class="" >
									<div data-spy="scroll" style="position:realite;">
											<tr>
											<th scope="col-2">Sequência Itens</th>
											<th scope="col-2">Código Itens</th>
											<th scope="col-4">Nome</th>
											<th scope="col-2">Valor</th>
											<th scope="col-2">Quantidade</th>
											<th scope="col-2">Total</th>
											<th scope="col-2">Editar</th>
											</tr>
											</div>		
										</thead>
										<tbody >
											
										</tbody>
										</table>
								

						</div>	
					  <div class="form-group">
					  
							
						
						
						
					  </div>
		  </form>
		</div>


		
		<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
		<script src="./js/venda.js" type="text/javascript">	</script>