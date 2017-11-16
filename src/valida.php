<?php 

/**
 * Validador de RUT con digito verificador 
 *
 * @param string $rut
 * @return boolean
 */

  function valida_rut($rut) {
      $rut=str_replace('.', '', $rut);
      if (preg_match('/^(\d{1,9})-((\d|k|K){1})$/',$rut,$d)) {
          $s=1;$r=$d[1];for($m=0;$r!=0;$r/=10)$s=($s+$r%10*(9-$m++%6))%11;
          return chr($s?$s+47:75)==strtoupper($d[2]);
      }
  }  

?>

