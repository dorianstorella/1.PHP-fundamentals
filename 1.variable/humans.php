<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php echo "boujour"; ?>
    <?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>           
   	<?php } ?>
        <?php   $a = 5 ;
                $a = $a + 37 ;
                echo $a ;?> 
                
                <!--variable
                string  "hello world"; 
                
                integer    2;  nbr entier
                
                floate     2.2; nbr decimal

                boolean    true; <<OU>> false
                
                null   $donald_trump_humanity = NULL;
                
                array  $team = array ( 
                0 => "marcel"
                1 => "jean"
                 ); -->
  </body>
</html>