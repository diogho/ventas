<?php 
require ('../includes/fpdf/fpdf.php');
require_once('../includes/jpgraph/jpgraph.php');
require_once('../includes/jpgraph/jpgraph_bar.php');
require_once('../includes/jpgraph/jpgraph_line.php');
require_once('../modelo/mreportePdfUsuario.php');

$a = new musuario;

$paginacion_perfil = $a->selusu();

$query = $a->selusurep();

$perfiles = array();
$cantidad = array();

for($i=0;$i< count($query);$i++){
	$perfiles[]=$query[$i]['nombre'];
	$cantidad[]=$query[$i]['COUNT(*)'];
}

$grafico = new Graph(1000,800, 'auto');
	$grafico->SetScale('textint');
	$grafico->title->Set('USUARIOS DEL SISTEMA');
	$grafico->xaxis->title->Set('Perfil');
	$grafico->xaxis->SetTickLabels($perfiles);
	$grafico->yaxis->title->Set('Cantidad');

	$barplot1 = new BarPlot($cantidad);

	$barplot1->SetFillGradient('#BE81F7','#E3CEF6', GRAD_HOR);
	$barplot1->SetWidth(30);
	$grafico->Add($barplot1);
	$nombre_imagen = '../img/'.uniqid(). '.png';
	$grafico->Stroke($nombre_imagen);


class PDF extends FPDF{

	function Header(){
		//Logo
		$this->Image('../img/logo.png',10,10,25);
		//font
		$this->SetFont('Arial','B',15);
		//go to right
		$this->Cell(80);
		//Title
		$this->Cell(30,10,utf8_decode('SITESIGO'),0,'C');
		//Jump
		$this->Ln(20);

		$this->SetFont('Arial','B',10);
		$this->Cell(0,10,utf8_decode('Line_01'),0,'L');
		$this->Ln(4);
		$this->Cell(0,10,utf8_decode('Line_02'),0,'L');
		$this->Ln(4);
		$this->Cell(0,10,utf8_decode('Line_03'),0,'L');
		$this->Ln(4);
		$fecha = date("d-m-y");
		$this->Cell(0,10,$fecha,0,'L');
		$this->Ln(6);
		$this->Cell(0,10,utf8_decode('LISTADO'),0,'C');
		$this->Ln();
	}

	function basicTable($header, $data){
		//header
		foreach ($header as $col) {
			$this->Cell(37.5,7,$col);
		}

		$this->Ln();

		for ($i=0; $i < sizeof($data); $i++) { 
			$this->Cell(37.5,6,utf8_decode($data[$i]['documento']),1);
			$this->Cell(37.5,6,utf8_decode($data[$i]['nombre']),1);
			$this->Cell(37.5,6,utf8_decode($data[$i]['telefono']),1);
			$this->Cell(37.5,6,utf8_decode($data[$i]['direccion']),1);
			$this->Cell(37.5,6,utf8_decode($data[$i]['nomper']),1);
			$this->Ln();
		}
	}


	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,utf8_decode('Página ').$this->PageNo().' ',0,'C');
	}
}

	$pdf=new PDF();

	$header = array('COCUMENTO','NOMBRE','TELEFONO','DIRECCION','PERFIL');
	$data = $paginacion_perfil;
	$pdf->SetFont('Arial','',10);
	$pdf->AddPage();
	$pdf->BasicTable($header,$data);

	$pdf->Image($nombre_imagen,$pdf->GetX(),$pdf->GetY(),150,100);

	#$pdf->Image('logo.png',10,10,-300);

	$pdf->Output();
	unlink($nombre_imagen);



?>