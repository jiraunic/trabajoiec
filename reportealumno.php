<?php
include_once "Conexion.php";
include ('fpdf181/fpdf.php');
$dia = date('j');
$mes = date('m');
$mesaux = date('m');
$ano =date('Y');

switch ($mes) {
	case '01':
		$mes = "Enero";
		break;

	case '02':
		$mes = "Febrero";
		break;
	
	case '03':
		$mes = "Marzo";
		break;

	case '04':
		$mes = "Abril";
		break;

	case '05':
		$mes = "Mayo";
		break;

	case '06':
		$mes = "junio";
		break;

	case '07':
		$mes = "Julio";
		break;

	case '08':
		$mes = "Agosto";
		break;

	case '09':
		$mes = "Septiembre";
		break;

	case '10':
		$mes = "Octubre";
		break;
	case '11':
		$mes = "Noviembre";
		break;
	
	default:
		$mes = "Diciembre";
		break;
}

// del convenio, el id_pago 1 = semanal, 2 = quincenal, 3 = mensual
$nocontrol = $_POST['idalumno'];
$movimiento = $_POST['dtipopago'];
$tipomovimiento = $_POST['tipopago'];
$import = $_POST['importe'];
$variable=utf8_decode($_POST['maestra']);
$mespago = $_POST['smes'];
$diasmulta = 0;
switch ($mespago) {
	case 'Enero':
		$diasmulta = 31;
		$mespagoaux = 1;
		break;
	case 'Febrero':
		$diasmulta = 28;
		$mespagoaux = 2;
		break;
	case 'Marzo':
		$diasmulta = 31;
		$mespagoaux = 3;
		break;
	case 'Abril':
		$diasmulta = 30;
		$mespagoaux = 4;
		break;
	case 'Mayo':
		$diasmulta = 31;
		$mespagoaux = 5;
		break;
	case 'Junio':
		$diasmulta = 30;
		$mespagoaux = 6;
		break;
	case 'Julio':
		$diasmulta = 31;
		$mespagoaux = 7;
		break;
	case 'Agosto':
		$diasmulta = 31;
		$mespagoaux = 8;
		break;
	case 'Septiembre':
		$diasmulta = 30;
		$mespagoaux = 9;
		break;
	case 'Octubre':
		$diasmulta = 31;
		$mespagoaux = 10;
		break;
	case 'Noviembre':
		$diasmulta = 30;
		$mespagoaux = 11;
		break;
	case 'Diciembre':
		$diasmulta = 31;
		$mespagoaux = 12;
		break;
	
}

$mespago= $mespago." del ".$ano;
// obtenemos la cuota del alumno si el pago a realizar es de la mensualidad
if ($tipomovimiento=='1') {
	$sql="SELECT cuota from convenio where id_alumno='$nocontrol'";
$result =  mysql_query($sql); 
$row = mysql_fetch_row($result);

$cuot = $row[0];
$sql="SELECT SUM(monto) FROM `alumnopago` WHERE `id_alumno`='$nocontrol' and `fecha`='$mespago' and id_pago='3'";
$result =  mysql_query($sql); 
$row1 = mysql_fetch_row($result);
$rest = $cuot - $import-$row1[0];
}

if ($row1[0]>=$cuot and $movimiento==1) {
	header("location:inicio.php");
}
else
{
	if($mespagoaux<$mesaux)
	{
		if (($mesaux-$mespagoaux)==1) {
			$diasmulta=$dia;
		}
	}
	else
	{
		$diasmulta=0;
	}
}


// obtenemos el nombre completo del alumno y el area en el que se ubica, por ejemplo preparatoria, profesional o secretariado
$sql="SELECT CONCAT(nombre_alumno, ' ', apellido_alumno), area FROM alumnos where id_alumno='$nocontrol'";
$result =  mysql_query($sql); 
$row1 = mysql_fetch_row($result);

$fecha = $dia." de ".$mes." de ".$ano;

$import = $import.".00";



// creacion del documento PDF como reporte de pago de alumno
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('reportealumno.jpg', 10 ,10, 190 , 30,'JPG');
$pdf->ln(40);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(190, 10, $fecha, 0, 'r', true);
$pdf->Ln(20);
$pdf->Cell(70, 10, 'numero de control: ', 1, 'r', true);
$pdf->Cell(40, 10, $nocontrol, 0);
$pdf->Ln(10);
$pdf->Cell(70, 10, 'Nombre del Alumno: ', 1, 'r', true);
$pdf->Cell(40, 10, $row1[0], 0);
$pdf->Ln(10);
$pdf->Cell(70, 10, 'Area del Alumno: ', 1, 'r', true);
$pdf->Cell(40, 10, $row1[1], 0);
$pdf->Ln(10);
$pdf->Cell(70, 10, 'Tipo de pago: ', 1, 'r', true);
$pdf->Cell(40, 10, $movimiento, 0);
$pdf->Ln(10);
$pdf->Cell(70, 10, 'Importe: ', 1, 'r', true);
$pdf->Cell(40, 10, $import, 0);
$pdf->Ln(10);

//verificamos  si el tipo de movimiento es de pago de colegiatura
if ($tipomovimiento == 1) 
{
	//se verifica que se requiera multa
	if ($diasmulta!=0) 
	{
	$sql = "SELECT * FROM alumnopago where id_alumno='$nocontrol' and id_pago='5' and fecha='$mespago'";
	// se calcula el costo de la multa siempre y cuando no se haya pagado ya de ese mes
	$result =  mysql_query($sql); 
	$num = mysql_num_rows($result);
	//Verificamos si existe o no registro del pago de una multa de ese mes, si no existe se calcula el costo de la multa y se inserta el dato en la base de datos
		if($num==0)
		{
			$multa= $diasmulta*5;
			$sql = "INSERT INTO alumnopago (id_alumno, id_pago, monto, fecha) VALUES ('$nocontrol', '5', '$multa', '$mespago')";
			mysql_query($sql);
			$pdf->Cell(70, 10, 'Multa: ', 1, 'r', true);
			$pdf->Cell(40, 10, $multa, 0);
			$pdf->Ln(10);
			$pdf->Cell(70, 10, 'Importe total: ', 1, 'r', true);
			$importotal = $import+$multa;
			$pdf->Cell(40, 10, $importotal, 0);
			$pdf->Ln(10);
		}
	}
}
// salimos de la verificacion de la multa
// verificamos si existe un residuo a pagar del mes
	if($rest != 0){
		$rest = $rest.".00";
$pdf->Cell(70, 10, 'Restante: ', 1, 'r', true);
$pdf->Cell(40, 10, $rest, 0);
$pdf->Ln(10);}


$pdf->Ln(30);
$pdf->Cell(70, 10, '______________________________________', 0);
$pdf->Ln(10);
$pdf->Cell(70, 10, $variable, 0, 'c', true);
$pdf->Ln(50);
$pdf->Cell(70, 10, '_____________________________________', 0);
$pdf->Ln(10);
$pdf->Cell(70, 10, $row1[0], 0, 'c', true);
$pdf->Output();

$sql = "INSERT INTO alumnopago (id_alumno, id_pago, monto, fecha) VALUES ('$nocontrol', '3', '$import', '$mespago')";
mysql_query($sql); 

?>