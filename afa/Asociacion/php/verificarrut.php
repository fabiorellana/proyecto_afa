

<?php error_reporting(0);
sleep(1); 
$validador=$_POST['Verf'];
				
		$rut =$_POST['Rut'];
		$dado_vuelta= strrev($rut);
		$array1 = str_split($dado_vuelta);
		
	$s1=$array1[0] * 2;
	$s2=$array1[1] * 3;
	$s3=$array1[2] * 4;
	$s4=$array1[3] * 5;
	$s5=$array1[4] * 6;
	$s6=$array1[5] * 7;
	$s7=$array1[6] * 2;
	$s8=$array1[7] * 3;
	
	$suma=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
	$ayayai =$suma%11;
	
	$validado=11- $ayayai;
	
	if($validado==11){$dverf=0;}
	if($validado==10){$dverf="k";}
	if($validado<=9){$dverf=$validado;}
	
	

	
	
	if($validador==$dverf){
		echo "</h5> <font color='green'>Rut correcto</h5>";
		$variablephp = "no";
		
		
		}else{echo "<h5 ><h5 > <font color='red'>Rut incorrecto";
			$variablephp = "si";
			echo "<script>alert('Rut incorrecto');   window.location='registroturno.php';</script>";
		}
		
		?>
		