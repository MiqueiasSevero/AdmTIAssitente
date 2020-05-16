<html>
    
    <head>
        <meta charset="UTF-8">

        <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
               
    </head>
    <body>
        <div class="container">
            <!--   <label>Digite um valor</label>
            <input id="campoInserir" type="text" name="valor"></input>
            <button id="botaoGerar">Gerar</button>-->
           
                <div class="card">
                    <div class="card-header">
                      Gerador de código de Barras!
                    </div>
                    <div class="card-body justify-content-center">
                            <div class="input-group mb-3">
                                <input type="text"  id="campoInserir" class="form-control" placeholder="Digite aqui o seu código" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="botaoGerar">Gerar</button>
                                </div>
                            </div>
                  

                  <svg id="codBarras"></svg>

                </div>
            </div>            

       
            </div>
       
    </body>   
    <script>
    
            let campoInserir = document.querySelector('#campoInserir');
            let botaoGerar = document.querySelector('#botaoGerar');

        window.onload = function(){
            
            botaoGerar.onclick = function(){

                GerarCódigoDeBarras(campoInserir);
                campoInserir.value= "";
            }
        
            }
           // 

        function GerarCódigoDeBarras(elementoInput){
            /*A função JsBarcode não aceita string vazia*/
            if(!elementoInput.value){
                elementoInput.value = 0;
            }
            JsBarcode('#codBarras', elementoInput.value);
        }
    </script>   