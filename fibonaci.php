<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <div class="container text-center">
        <h1>Serie de fibonacci</h1>
        <form action="fibonaci.php" method="POST">
            <div class="form-group">
                <label for="num_fibonaci">Ingrese el numero</label>
                <input type="text" class="form-control" id="num_fibonaci" name="num_fibonaci" placeholder="Escribe el numero">
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Enviar</button>
            </div>
        </form>
    </div>
    <?php
        $fibonacci = array(0,1);
        $num_fibonacci = 1;
        if(isset($_POST['num_fibonaci'])){
            $num_fibonacci = $_POST['num_fibonaci'];
            //echo 'Es numero fibonacci';
            if($num_fibonacci > 1){
                for($i=2;$i<$num_fibonacci;$i++){
                    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }
            }
        }
        
    ?>
    <h2>Numero fibonacci: <?php echo $num_fibonacci ?></h2>
    <div class="serie-fibonacci">
        <?php
            foreach($fibonacci as $item){
                ?>
                    <div class="f-item">
                        <?php
                            echo $item
                        ?>
                    </div>
                <?php

            }
        ?>
    </div>
</body>
</html>