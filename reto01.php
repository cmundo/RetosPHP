<?php

function formulario()
{
	//Formulario
	echo "<form name='frm' method='post' action='".$_SERVER["SCRIPT_NAME"]."'><textarea name='numeros' rows='10' cols='40' /></textarea><br /><input type='submit' name='enviar' value='Enviar' /></form>";
}

function procesa()
{
	$contenido=$_POST["numeros"];
	
	$a_total=array();
	
	$a_cont = explode("\n",$contenido);

	for($i=0;$i<count($a_cont);$i++)
	{
		$a_numeros=explode(" ",$a_cont[$i]);
		$n=count($a_numeros);
		$total=0;
		for($j=0;$j<$n;$j++)
		{
			$total+=$a_numeros[$j];
			$todos=$j+1;
			if($todos==$n)
			{
				$a_total[]=$total;
			}
		}
	}
	
	//Resultado
	
	$html="Ejemplo de Salida: <br />";
	for($i=0;$i<count($a_total);$i++)
	{
		$html.=$a_total[$i]."<br />";
	}
	echo $html;
	
}

$haydatos=count($_POST);
if(!$haydatos)
	formulario();
else
	procesa();

?>