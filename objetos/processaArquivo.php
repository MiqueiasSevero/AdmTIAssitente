<?php
if(isset($_POST["submit"])) {


$uploads_dir = "arquivos/";


           if ($_FILES["arqInputCsv"]) {

                  $diretorio = dir($uploads_dir);
                  while ($arquivo = $diretorio->read()) {
                     if(($arquivo != '.') && ($arquivo != '..')){
                        unlink($uploads_dir.$arquivo);
                     }
                  }
                  $diretorio->close();

                  $tmp_name = $_FILES["arqInputCsv"]["tmp_name"];
                  // basename() may prevent filesystem traversal attacks;
                  // further validation/sanitation of the filename may be appropriate
                  $name = basename($_FILES["arqInputCsv"]["name"]);
                  move_uploaded_file($tmp_name, "$uploads_dir/$name");

             }
             $row = 0;
             if (($handle = fopen( $uploads_dir.$name, "r")) !== FALSE) {
                 while (($data = fgetcsv($handle, 1000, ":")) !== FALSE) {
                     $num = count($data);
                     echo "<p> $num fields in line $row: <br /></p>\n";
                     $row++;
                     for ($c=0; $c < $num; $c++) {
                         echo $data[$c] . "<br />\n";
                     }
                 }
                 fclose($handle);
             } 


}
?>
