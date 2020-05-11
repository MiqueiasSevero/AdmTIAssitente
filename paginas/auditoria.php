<div class="container my-5">

	<div class="row my-auto">
        <div class="col-2">
            <label for=""><h6 class="h4">Arquivos:</h6></label>
        </div>
        <div class="col-10 mb-5">


            <form action="" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="arqInputCsv" id="arqInputCsv">
            <input type="submit" value="Upload Image" name="submit">
            </form>
            
        </div>
    </div>
    <div class="row">
        <?php 
            include_once('objetos/processaArquivo.php');
        
        ?>
    
    </div>

</div>



<?php




?>