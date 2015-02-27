<!DOCTYPE html>
<html>
    <head>
        <title>Meza Cabrera Christian Omar</title>
    </head>
    <body>
        <h1>practica_3</h1>
        <img src="https://www.google.es/images/srpr/logo11w.png" />

        <?php
            $kichus= array(
                'jose jose',
                'juan gabriel',
                'bunbury',
                
                1,
                4.5
            );
            $kichus[5] = 'Nuevo';
            $kichus[]= 'Otro 1';
            $kichus[] = 'Otro 2';
            echo '<h2>';
            echo $kichus[7];
            echo '</h2>';
            $kichus = array(
                /*0*/array(
                    'id' => '1',
                    'autor' => 'jose jose',
                    'contenido' => 'romantica',
                    'fecha' => '25 de febrero',
                    'ritewts' => '221'
                ),
                /*1*/array(
                    'id' => '2',
                    'autor' => 'juan gabriel',
                    'contenido' => 'romantica',
                    'fecha' => '20 de marzo',
                    'ritewts' => '451'
                ),
                /*2*/array(
                    'id' => '3',
                    'autor' => 'pepeaguilar',
                    'contenido' => 'rancheras',
                    'fecha' => '13 de mayo',
                    'ritewts' => '741'
                ),
                /*3*/array(
                    'id' => '4',
                    'autor' => 'bunbury',
                    'contenido' => 'rock',
                    'fecha' => '1 de noviembre',
                    'ritewts' => '417'
                ),
                /*4*/array(
                    'id' => '5',
                    'autor' => 'zoe',
                    'contenido' => 'rock en español',
                    'fecha' => '18 de julio',
                    'ritewts' => '54'

                ),
                /*5*/array(
                    'id' => '6',
                    'autor' => 'chavo del ocho',
                    'contenido' => 'ranchera',
                    'fecha' => '4 de diciembre',
                    'ritewts' => '41'

                ),
                /*6*/array(
                    'id' => '7',
                    'autor' => 'luis',
                    'contenido' => 'ranchera',
                    'fecha' => '4 de diciembre',
                    'ritewts' => '41'
                    
                ),
                /*7*/array(
                    'id' => '8',
                    'autor' => 'pepito',
                    'contenido' => 'ranchera',
                    'fecha' => '4 de diciembre',
                    'ritewts' => '41'
                )
            );
            echo '<label>'.$kichus[7]['autor'].'</label>';
            echo '<br><br>';
        ?>
        <br>
        <br>
        
            <div>
            <?php foreach ($kichus as $kichus) { ?>
            
                
                 
                 <div>
                    <p><?php echo $kichus['id']; ?></p>
                 </div><div>
                    <span><?php echo $kichus['autor']; ?></span>
                  </div><div>
                    <p><?php echo $kichus['contenido']; ?></p>
                   </div><div>
                    <p><?php echo $kichus['fecha']; ?></p>
                         </div><div>
                    <s><?php echo $kichus['ritewts']; ?></s>
                   </div>
                  
                 
            <?php } ?>
        </div>
    </body>
</html>