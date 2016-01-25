<?php

    //Obtener los datos de GitHub.
    $payload = json_decode($_POST['payload']);
    
        
    if ($payload->ref == "refs/heads/master") {
     
        shell_exec('echo'.$payload->ref.' >> README.md');   
        
    }else{
        
        shell_exec('echo'.$payload->ref.' >> README.md');
    } 
        
    
    //var_dump($out);
 
?>
