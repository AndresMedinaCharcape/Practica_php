<?php

class Empleado
{
    private $codigo;
    private $apellidos;
    private $nombres;
    private $fecha_ingreso;
    private $fecha_cese;
    private $sueldo;
    private $DNI;
    private const SEGURO_SALUD = 'ESSALUD';
    private const REG_PENSIONES = 'SEP PRIMA CON.MIXTA';
    private const CUSPP  = '620471MELRE3';
    private const SEDE  = 'OFICINA CENTRAL';
    private $area;
    private $cargo;
    private $centro_desarollo;
    private $condicion;
    private $cant_dias_laborables;
    private $cant_horas_laborables;
    private $cant_horas_extras_25;
    private $cant_horas_extras_35;
    private $cant_horas_extras_100;

    private $inicio_vacaciones1;
    private $fin_vacaciones1;
    private $inicio_vacaciones2;
    private $fin_vacaciones2;
    private $inicio_vacaciones3;
    private $fin_vacaciones3;

    public function DefinirEmpleado($codigo,$apellidos,$nombres,$fecha_ingreso,$fecha_cese,$sueldo,$DNI)
    {
        $this->codigo = $codigo;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->fecha_cese = $fecha_cese;
        $this->sueldo = $sueldo;
        $this->DNI = $DNI;
    }



    public function Datos_EmpleadoEmpresa($area,$cargo,$centro_desarollo)
    {
        $this->area = $area;
        $this->cargo = $cargo;
        $this->centro_desarollo = $centro_desarollo;
    }

    public function EvaluarCondicion()
    {
        $cargo_superior = 'Jefe';
        $posicion_busqueda_cadena = strrpos($this->cargo,$cargo_superior);
        if ($posicion_busqueda_cadena === false )
        {
            $this->condicion = 'Fiscalizable';
        }else{
            $this->condicion = 'No Fiscalizable';
        }
    }

    public function CargaTrabajo($valor1,$valor2,$valor3,$valor4,$valor5)
    {
        $this->cant_dias_laborables = $valor1;
        $this->cant_horas_laborables = $valor2;
        $this->cant_horas_extras_25 = $valor3;
        $this->cant_horas_extras_35 = $valor4;
        $this->cant_horas_extras_100 = $valor5;
    }

    public function ImprimirCabecera()
    {
        echo '<link rel="stylesheet" type="text/css" href="estilos.css">';
        echo '<img src="Logo-PECSA.png" alt="Logo Pecsa">';
        echo '<div class="informacion_empresa">
             <p>PERUANA DE COMBUSTIBLES S.A.</p>
             <p class="ruc">RUC: 20259033072</p>
             <p class="calle">Calle Coronel Andrés Reyes N° 360 LIMA</p>   
             </div>';
        echo '<div class="title_boleta">
             <p>BOLETA DE PAGO.</p>
             <p>Del 01.09.2016 al 30.09.2016</p> 
             </div>';
        echo '<table>
            <tr>
                <td >CODIGO <br>'.($this->codigo).'</td>
                <td>APELLIDOS Y NOMBRES <br>'.($this->apellidos).($this->nombres).'</td>
                <td>FECHA ING<br>'.($this->fecha_ingreso).'</td>
                <td>FECHA CESE<br>'.($this->fecha_cese).'</td>
                <td>SUELDO<br>'.($this->sueldo).'</td>
            </tr>
            <tr>
                <td>DOC. IDENTIDAD <br>'.($this->DNI).'</td>
                <td>SEG. SALUD <br>'.(self::SEGURO_SALUD).'</td>
                <td>REG. PENSIONES/CUSPP<br>'.(self::REG_PENSIONES).'</td>
                <td>SEDE<br>'.(self::SEDE).'</td>
            </tr>
            <tr>
                <td>AREA <br>'.($this->area).'</td>
                <td>CARGO <br>'.($this->cargo).'</td>
            </tr>
            <tr>
                <td>CENTRO DE COSTO (PRINCIPAL)<br>'.($this->centro_desarollo).'</td>
                <td>DIAS TRAB. <br>'.($this->cant_dias_laborables).'</td>
                <td>HORAS TRAB.<br>'.($this->cant_horas_laborables).'</td>
                <td>H.EX. 25%<br>'.($this->cant_horas_extras_25).'</td>
                <td>H.EX. 35%<br>'.($this->cant_horas_extras_35).'</td>
                <td>H.EX. 100%<br>'.($this->cant_horas_extras_100).'</td>
            </tr>
            <tr>
                <td>CALIFICACION<br>'.($this->condicion).'</td>
                <td>INIC.VAC.1. <br>'.($this->inicio_vacaciones1).'</td>
                <td>FIN. VAC.1..<br>'.($this->fin_vacaciones1).'</td>
                <td>INIC.VAC.2<br>'.($this->inicio_vacaciones2).'</td>
                <td>FIN. VAC.2<br>'.($this->fin_vacaciones2).'</td>
                <td>INIC.VAC.3<br>'.($this->inicio_vacaciones3).'</td>
                <td>FIN. VAC.3<br>'.($this->fin_vacaciones3).'</td>
            </tr>';

    }

}



?>