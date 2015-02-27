<!DOCTYPE html>
<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <h1>Alumnos</h1>
        <img src="https://www.google.es/images/srpr/logo11w.png" />
        <?php
            $alumnos = array(
                'jose jose',
                'juan gabriel',
                'bunbury',
                
                1,
                4.5
            );
            $alumnos[5] = 'Nuevo';
            $alumnos[]= 'Otro 1';
            $alumnos[] = 'Otro 2';
            echo '<h2>';
            echo $alumnos[7];
            echo '</h2>';
            $alumnos = array(
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
            echo '<label>'.$alumnos[7]['autor'].'</label>';
            echo '<br><br>';
        ?>
        <br>
        <br>
        <table>
            
            <?php foreach ($alumnos as $alumno) { ?>
                <tr>
                 <div>
                 <div>
                    <p><?php echo $alumno['id']; ?></p>
                 </div><div>
                    <span><?php echo $alumno['autor']; ?></span>
                  </div><div>
                    <p><?php echo $alumno['contenido']; ?></p>
                   </div><div>
                    <p><?php echo $alumno['fecha']; ?></p>
                         </div><div>
                    <s><?php echo $alumno['ritewts']; ?></s>
                   </div>
                   </div>
                  </tr>

            <?php } ?>
        </table>
    </body>
</html>