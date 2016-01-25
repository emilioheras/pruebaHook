<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Prueba hook</h1>
    
    <?php

        //Obtener los datos de GitHub.
        $payload = json_decode($_POST['payload']);
    
        
        if ($payload->ref == "refs/heads/master") {
     
           
            echo "Hola script";
        }  
 
    ?>
    
</body>
</html>