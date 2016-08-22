<html>
    <head><title>Just a simple MVC sample page</title></head>
    <body>
        <h1>MVC = Model View Controller</h1>
        <p>
            <?php echo $some_value->a ;?>

            <?php
                for($i=0; $i<5 ; $i++){
                    echo '<br />' . $some_value->b ;
                }
            ?>
            
        </p>
    </body>
</html>