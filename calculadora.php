<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
     
</head>
<body>
    <div class="hola">
        <h1>Calculadora</h1>
        <hr>
        <form method="POST">
            <label>Numero1</label>
            <input type="number" max=10000 min=0 placeholder="0" name="numero1" required autofocus>
            <label>Numero2</label>
            <input type="number" max=10000 min=0 placeholder="0" name="numero2" required autofocus>
          <hr>
          <input type="radio" class="form-check-input" name="opcion" value="sumar" required>Sumar
          <input type="radio" class="form-check-input" name="opcion" value="restar" required>Restar
          <input type="radio" class="form-check-input" name="opcion" value="multiplicar" required>Multiplicar
          <input type="radio" class="form-check-input" name="opcion" value="division" required>Division
          <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required>Potenciacion
          <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required>Concatenacion
          <hr>
          <input type="submit" class="btn btn-succes w-25" value="Enviar">
          <input type="reset" class="btn btn-succes w-25" value="Limpiar">
          <hr>
        </form>
    </div>
    <div class="hola">
        <?php
             if ($_POST){ 
                 Function Sumar () {
                    echo "La suma de los numeros es: "
                    .($_POST ["numero1"] + $_POST ["numero2"]);   
                }
                 Function Restar () {
                    echo " La resta de los numeros es: "
                    .($_POST ["numero1"] - $_POST ["numero2"]);
                }
                 Function Multiplicar() {
                     echo " La multiplicacion de los numeros es: " 
                     .($_POST ["numero1"] * $_POST ["numero2"]);
                }   
                 Function Division () {
                     if ($_POST ["numero2"]==0)
                     $d= "Error: Division por 0";
                     else 
                     $d=$_POST ["numero1"] / $_POST ["numero2"];
                     echo " La division de los numero es: ".$d;  
                } 
                  Function Potenciacion () {
                      echo " La potenciacion de los numeros es: " .
                     (pow ($_POST ["numero1"] , $_POST ["numero2"]));
                }
                  Function Concatenacion () {
                   echo " La concatenacion de los numeros es: ".
                   ($_POST ["numero1"] . $_POST ["numero2"]);
                }
                switch ($_POST["opcion"]){
                    case "sumar":
                        sumar ();
                        break;
                    case "restar":
                        restar ();
                        break;
                    case "multiplicar":
                        Multiplicar ();
                        break;
                    case "division": 
                         division ();
                         break;    
                    case "potenciacion":
                        potenciacion ();
                        break;
                    case "Concatenacion ":
                        Concatenacion ();
                        break;

                     default:
                        echo " Error en la opcion seleccionada";
                        break;    
                }  

            }
            ?>
          </div> 
        </body>
        </html>  
