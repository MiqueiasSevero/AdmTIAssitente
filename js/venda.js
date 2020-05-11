	
			let mensagem = document.getElementById("msgAlert");
			let valorPedidoTotal = document.getElementById("totalPedido");
			let btInserirItem = document.querySelector('#insereItem');
			let btDeletarItem = document.querySelector('#btDeletarItem');
			let table =  document.querySelector('.table');
			let tbItens = [] ;
			let formItem = document.getElementById("itemForm");
			tbItens = sessionStorage.getItem('tbItens');
			tbItens = JSON.parse(tbItens);
		

			
			if (tbItens==null){
				tbItens = [] ;
			}
		
		function limparCampos(){
			itemForm.reset();
		}	
		function guardaItem() {
			let item =[];
			item = ({
				cod : document.querySelector("[name=codProduto]").value ,
				produto : document.querySelector("[name=nomeProduto]").value ,
				valor: document.querySelector("[name=valorProduto]").value ,
				qtde: document.querySelector("[name=qtdeProduto]").value 
			});
			
			
			if(validate.isEmpty(item.cod) || validate.isEmpty(item.produto) || validate.isEmpty(item.valor)|| validate.isEmpty(item.qtde)){
						mensagem.innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
						'<strong>Capo Invalido!</strong> Preencha todos os campos.'+
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span>'+
						'</button>'+
					   	'</div>';
						} else{
							let itemJson = JSON.stringify(item);
							tbItens.push(itemJson);
							sessionStorage.setItem("tbItens",JSON.stringify(tbItens));	
						}
					
		
			
		
						
			listar();
			limparCampos();
			  
		}
		function listar(){
			let corpo = $("#tblListar tbody"); 
			var valores = 0;
			corpo.empty();
			valorPedidoTotal.innerHTML = "";
			for(var i in tbItens  ){
				
				var cli = JSON.parse(tbItens[i]);
				corpo.append("<tr>");
				corpo.append("<td>"+i+"</td>");
				corpo.append("<td>"+cli.cod+"</td>");
				corpo.append("<td>"+cli.produto+"</td>");
				corpo.append("<td>"+cli.valor+"</td>");
				corpo.append("<td>"+cli.qtde+"</td>");
				corpo.append("<td>"+cli.qtde * cli.valor+"</td>");
				corpo.append('<td><button type="button" id="btDeletarItem" class="btn btn-danger btn-sm" onclick="deletar(this.name)" name="'+i+'">Excluir</butto></td>');
				corpo.append("</tr>"); 
				var total = cli.qtde * cli.valor;
			
				valores += parseFloat(total);
			}
			valorPedidoTotal.innerHTML = valores;
		}
		
		function deletar(idDeletado){
			
			tbItens.splice(parseInt(idDeletado), 1);
			sessionStorage.setItem("tbItens",JSON.stringify(tbItens));;
			
			listar();
		}
	btInserirItem.onclick = guardaItem;
	
	//window.onload = listar;

	window.onload = function(){
		let mensagem = document.getElementById("msgAlert");
		let valorPedidoTotal = document.getElementById("totalPedido");
		listar;
		valorPedidoTotal.innerHTML="";
	};


	//validar dados no back-end