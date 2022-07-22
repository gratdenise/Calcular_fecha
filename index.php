    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular Fecha</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        


        <section >
            <h1>Calcular cuantos días faltan para tu evento</h1>

            <div id="bloque1">
                <h3>Ingresa la Fecha</h3>

<div id="form">

         <form action="calculo_fecha.php" method="post">
         <label for="dia"></label>
         <input type="number" name="dia" placeholder="DÍA" min="1" max="31" required class="anio">
         <label for="mes"></label>
         <input type="number" name="mes" placeholder="MES" min="1" max="12" required class="anio"> 
         <label for="anio"></label>
         <input type="number" name="anio" placeholder="AÑO" min="2022" max="2400" required class="anio">


         <?php
			if(isset($_GET['dias'])){
				if($_GET['dias'] > 0){
					echo '<h2>Faltan '.$_GET['dias'].' días para la fecha seleccionada</h2>';
				}else{
					echo '<h2>Fecha invalida.. Ingrese fecha posterior a la actual</h2>';
				}
			}
			if(isset($_GET['fechaError'])){
                echo '<h2>Fecha invalida.. Ingrese fecha posterior a la actual</h2>';
			}  
		?> 

</div> 



         <div>
           <input type="submit" value="Calcular" class="boton">
         </div>
         
        </form>
                
		
                           
            
    </div>
    

        </section>

  















    </body>
    </html>