<?php
include_once "conexion.php";

    $sql="SELECT * from materias where area ='Preparatoria'";
    $result =  mysql_query($sql); 

    $combobit=" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }

    $sql="SELECT id_maestro, concat(nombre_maestro, ' ', apellido_maestro) FROM `maestros` where tipo_maestro='Preparatoria'";
    $result =  mysql_query($sql); 

    $combobit2=" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit2 .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }

    $sql="SELECT id_alumno, concat(nombre_alumno, ' ', apellido_alumno) FROM `alumnos` where area = 'Preparatoria'";
    $result =  mysql_query($sql); 

    $combobit3 =" <option value='0'></option>";
    $numero =0;
    while ($row = mysql_fetch_row($result)){ 
        $combobit3 .=" <option value='".$row[0]."'>".$row[1]."</option>";
    }
?>
<?php include("cabecera.php"); ?>
    <h1>Agregar Calificacion</h1>
    <form action="calificacion.php" method="post" class="Calificacion">
        <div><label>Materia</label></br>
        <select name="materia" id="materia">
        <?php echo $combobit; ?>
        </select>
        <input id="idmateria" type="text" value="" name="idmateria" hidden="">
        </div></br>

        <script>
             $('select#materia').on('change',function(){
                     valor1 = $(this).val();
                     $("#idmateria").val(valor1);

                        });
        </script>

        <div><label>Maestro</label></br>
        <select name="maestro" id="maestro">
        <?php echo $combobit2; ?>
        </select>
        <input id="idmaestro" type="text" value="" name="idmaestro" hidden="">
        </div></br>

        <script >
             $('select#maestro').on('change',function(){
                     valor = $(this).val();
                     $("#idmaestro").val(valor);
                        });
        </script>

        <div><label>Alumno</label></br>
        <select id = 'alumno' name='alumno'>
        <?php echo $combobit3; ?>
        </select>
        <input id="nocontrol" type="text" value="" name="nocontrol" hidden="">
        </div></br>
                  
            <script>
            $('select#alumno').on('change',function(){
                     valor = $(this).val();
                     $("#nocontrol").val(valor);
                        });
            </script>
            
         <div><label>Calificacion </label></div>
         <div><input name="calif" type="text"></div></br>
         <div><label>Periodo cursado </label></div>
         <div><input name="periodo" type="text"></div></br>
         <div><input name="Calificacion" type="submit" value="Agregar Calificacion"></div>

    </form>
    <form method="post" action="tipocalificaion.php">
    <div><input name="Alumno" type="submit" value="Regresar Menu Anterior"></div>
    </form>
    <form method="" action="inicio.php">
    <div><input name="Alumno" type="submit" value="Regresar a inicio"></div>
    </form>
<?php include("pie.php"); ?>