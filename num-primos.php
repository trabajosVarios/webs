<?php
/**
 * Función que determina si un numero es primo
 * Tiene que recibir el numero a determinar si es primo o no
 * Devuelve True o False
 */
function primo($num){
    $cont=0;
    for($i=2;$i<=$num;$i++){

        if($num % $i == 0){
          if(++ $cont > 1){
            return false;
          }            
        }
    }
    return true;
}

$patron = '/$\w[7]/';
$datos[] = array( 2  ,3   ,5   ,7   ,11  ,13  ,17  ,19  ,23  ,29  ,31  ,37  ,41  ,43  ,47  ,53  ,59  ,61  ,67,
                 71  ,73  ,79  ,83  ,89  ,97  ,101 ,103 ,107 ,109 ,113 ,127 ,131 ,137 ,139 ,149 ,151 ,157 ,163,
                 167 ,173 ,179 ,181 ,191 ,193 ,197 ,199 ,211 ,223 ,227 ,229 ,233 ,239 ,241 ,251 ,257 ,263 ,269,
                 271 ,277 ,281 ,283 ,293 ,307 ,311 ,313 ,317 ,331 ,337 ,347 ,349 ,353 ,359 ,367 ,373 ,379 ,383,
                 389 ,397 ,401 ,409 ,419 ,421 ,431 ,433 ,439 ,443 ,449 ,457 ,461 ,463 ,467 ,479 ,487 ,491 ,499);



function get_match($patron,$datos){
    if (preg_match($patron,$datos,$coincidencias)) {
      return $coincidencias[0];
    }else{
      return null;
    }

}

print_r($coincidencias);
// for($i = 1; $i <= 60; $i++){

//    preg_match($patron, substr($datos[$i],1), $coincidencias, PREG_OFFSET_CAPTURE);

   
// }

?>
