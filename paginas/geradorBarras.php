<html>
    
    <head>
        <meta charset="UTF-8">

        <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
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