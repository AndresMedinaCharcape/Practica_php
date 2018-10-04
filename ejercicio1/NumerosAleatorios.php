<?php

class GeneradorNumerosAleatorios
{
    private $array_valores = array();
    private $longitud_array = 0;


    public function __construct($valor_min , $valor_max)
    {
        for ($i=0;$i<20;$i++)
        {
            $numeros = rand($valor_min,$valor_max);
            array_push($this->array_valores,$numeros);

        }
        $this->longitud_array = count($this->array_valores);
    }

    public function MostrarValores()
    {
        echo 'Numeros Aleatorios: ';
        foreach ($this->array_valores as $numeros)
        {
            echo $numeros . ' ';

        }


    }

    public function MostrarPromedio()
    {
        $suma_valores = array_sum($this->array_valores);
        $promedio = round($suma_valores/20,2);
        echo '<br> El promedio de los Numeros Aleatorios es: ' . ($promedio) .'<br>';
    }

    public function MostrarMayorMenor()
    {
        $max = -99999999;
        $min = 999999999;

        foreach ($this->array_valores as $numeros) {
            if ($max < $numeros) {
                $max = $numeros;
            }


            if ($min > $numeros) {
                $min = $numeros;
            }
        }

        echo 'Mayor Numero: ' .($max). '<br>';
        echo 'Menor Numero:'  .($min) .'<br>';
    }

    public function MultiplosSeven()
    {
        echo 'Numeros Multiplos de 7: ';
        foreach ($this->array_valores as $numeros)
        {
            if ($numeros%7 == 0)
            {
                echo $numeros . ' ';
            }
        }
    }

    public function OrdenamientoNumeros()
    {

        for ($i=1;$i< $this->longitud_array;$i++)
        {
            $aux = $this->array_valores[$i];
            $p = $i -1;

            while ($aux < $this->array_valores[$p] && $p>=1)
            {
                $this->array_valores[$p+1] = $this->array_valores[$p];
                $p--;
            }

            if ($this->array_valores[$p] <= $aux)
            {
                $this->array_valores[$p+1] = $aux;
            }else{
                $this->array_valores[$p+1] = $this->array_valores[$p];
                $this->array_valores[$p] = $aux;
            }
        }

        echo '<br> Numeros Ordenados: ';
        foreach ($this->array_valores as $numeros)
        {
            echo $numeros . ' ';
        }
    }

}


?>