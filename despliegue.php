<?php

    //Obtener los datos de GitHub.
    $payload = json_decode($_POST['payload']);
    
        
    if ($payload->ref == "refs/heads/master") {
     
        $out = shell_exec('echo "Estoy escribiendo en este archivo." >> README.md');   
        
    } 
        
    
    //var_dump($out);
 
?>
