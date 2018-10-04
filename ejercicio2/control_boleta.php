<?php
require_once "Boleta.php";
$Empleado1 = new Boleta;
$Empleado1->DefinirEmpleado('0201614028','Medina Charcape ','Andres','20/09/17','28/10/18','4,250.00','DNI-44577092');
$Empleado1->Datos_EmpleadoEmpresa('Jefatura de Desarrollo de Sistemas','Analista Programador de Sistemas','Desarrollo');
$Empleado1->CargaTrabajo(0,'0',0,0,0);
$Empleado1->EvaluarCondicion();
$Empleado1->RegistrarBoleta('1000','Remuneracion Mensual','',3683.33,'','');
$Empleado1->RegistrarBoleta('1010','Asignacion Familiar','',85.000,'','');
$Empleado1->RegistrarBoleta('1526','Vacaciones','',566.67,'','');
$Empleado1->RegistrarBoleta('5000','Renta de 5ta','','',295.95,'');
$Empleado1->RegistrarBoleta('5011','AFP Comision Regular','','',51.59,'');
$Empleado1->RegistrarBoleta('5012','AFP Aport.Obligatorio','','',433.50,'');
$Empleado1->RegistrarBoleta('5013','AFP Seguro Regular','','',57.66,'');
$Empleado1->RegistrarBoleta('5032','Dscto Convenio Scotiabank','','',1061.06,'');
$Empleado1->RegistrarBoleta('9008','EsSalud','','','',390.15);
$Empleado1->ImprimirCabecera();
$Empleado1->ImprimirDetalle();

?>