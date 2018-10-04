<?php
require_once "Empleado.php";
class Boleta extends Empleado
{
    private $descuentos = array();
    private $codigos = array();
    private $conceptos= array();
    private $cantidad = array();
    private $ingresos = array();
    private $aportes = array();


    public function RegistrarBoleta(String...$Registro)
    {
        array_push($this->codigos, $Registro[0]);
        array_push($this->conceptos, $Registro[1]);
        array_push($this->cantidad, $Registro[2]);
        array_push($this->ingresos, $Registro[3]);
        array_push($this->descuentos, $Registro[4]);
        array_push($this->aportes, $Registro[5]);
    }

    public function ImprimirDetalle()
    {
        echo '<link rel="stylesheet" type="text/css" href="estilos.css">';
        echo '<tr>
                <td >CC-N <br></td>
                <td>COMCEPTO<br></td>
                <td>CANTIDAD<br></td>
                <td>INGRESOS<br></td>
                <td>DESCUENTOS<br></td>
                <td>APORTES<br></td>
            </tr>';
        for ($i=0;$i<sizeof($this->codigos);$i++)
        {
            echo '<tr>
                <td >'.($this->codigos[$i]).'</td>
                <td>'.($this->conceptos[$i]).'</td>
                <td>'.($this->cantidad[$i]).'</td>
                <td>'.($this->ingresos[$i]).'</td>
                <td>'.($this->descuentos[$i]).'</td>
                <td>'.($this->aportes[$i]).'</td>
            </tr>';
        }
        $total_ingresos = array_sum($this->ingresos);
        $total_descuentos = array_sum($this->descuentos);
        $total_aportes = array_sum($this->aportes);
        echo '<tr>
           <td colspan="3">Total S/.'.($total_aportes).'</td>
           <td>'.($total_ingresos).'</td>
           <td>'.($total_descuentos).'</td>
           <td>'.($total_aportes).'</td> 
        </tr>';
        echo '<tr>
           <td colspan="4">Neto a Pagar S/</td>
           <td>'.($total_ingresos-$total_descuentos).'</td>
        </tr>';
        echo '</table>';

    }





}

 ?>