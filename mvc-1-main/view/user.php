<html>


<body>

<ul>

<?php 
    foreach($userArray as $user){
        ?>

    <li>id = <?= $user->getid()  ?>
     name = <?= $user->getname()  ?> 
     email = <?= $user->getemail()  ?> 
     password = <?= $user->getpassword() ?> 
      is_admin = <?= $user->getadmin() ?></li>


   <?php 
   }

?>


</ul>


</body>
</html>