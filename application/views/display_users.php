<!DOCTYPE html>
<html>
    <head>
        <title>users display</title>
    <head>
    <body> 
        <?php
         foreach($user as $object){
                echo "<h1>".$object->id."</h1>";
                echo "<h1>". $object->username ."</h1>"."</br>";
                
            }
           
           // echo $user;
        ?> 
    </body>

</html>