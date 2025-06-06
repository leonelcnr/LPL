<?php

class Emprensa
{
    // Constantes para los umbrales de salario y factores de porcentaje
    private const SALARIO_UMBRAL_BAJO = 200000;
    private const SALARIO_UMBRAL_MEDIO = 300000;

    private const FACTOR_PORCENTAJE_SALARIO_BAJO = 1;
    private const FACTOR_PORCENTAJE_SALARIO_MEDIO = 0.5;
    private const FACTOR_PORCENTAJE_SALARIO_ALTO = 0.1;

    // Array para definir los porcentajes base por antigüedad
    // Podrías inicializar esto en el constructor si necesitas que sea dinámico
    private $porcentajesAntiguedad = [
        // antiguedad_maxima => porcentaje
        5 => 12,
        10 => 18,
        15 => 15,
        PHP_INT_MAX => 12, // Para antiguedad > 15
    ];

    private $empleados; // array de objetos Empleado

    public function __construct(array $empleados)
    {
        $this->empleados = $empleados;
        // $this->porcentajes ya no es necesario si usamos $porcentajesAntiguedad
    }

    /**
     * Calcula un factor multiplicador basado en el salario.
     * Este factor se usa para ajustar el porcentaje de aumento.
     */
    private function calcularFactorPorcentajeSalario(float $salario): float
    {
        if ($salario <= self::SALARIO_UMBRAL_BAJO) {
            return self::FACTOR_PORCENTAJE_SALARIO_BAJO;
        }

        if ($salario <= self::SALARIO_UMBRAL_MEDIO) {
            return self::FACTOR_PORCENTAJE_SALARIO_MEDIO;
        }

        return self::FACTOR_PORCENTAJE_SALARIO_ALTO;
    }

    /**
     * Define el porcentaje de aumento base según la antigüedad del empleado.
     */
    private function definirPorcentajeBaseAntiguedad(int $antiguedad): float
    {
        foreach ($this->porcentajesAntiguedad as $antiguedadMaxima => $porcentaje) {
            if ($antiguedad <= $antiguedadMaxima) {
                return (float)$porcentaje;
            }
        }
        return 0; // En caso de que no se encuentre un rango (aunque PHP_INT_MAX debería cubrir todos los casos)
    }

    public function aumentoSalario(): void
    {
        foreach ($this->empleados as $empleado) {
            $salarioActual = $empleado->getSalario();
            $antiguedad = $empleado->getAntiguedad();

            $porcentajeBase = $this->definirPorcentajeBaseAntiguedad($antiguedad);
            $factorSalario = $this->calcularFactorPorcentajeSalario($salarioActual);

            $porcentajeFinalAumento = $porcentajeBase * $factorSalario;

            echo "Empleado: " . $empleado->getNombre() . " - Antigüedad: {$antiguedad} años, Salario Actual: {$salarioActual}, Porcentaje de Aumento Aplicado: {$porcentajeFinalAumento}%<br>";

            $aumento = ($salarioActual / 100) * $porcentajeFinalAumento;
            $nuevoSalario = $salarioActual + $aumento;
            $empleado->setSalario($nuevoSalario);
        }
    }

    public function mostrarEmpleados(): void
    {
        echo "<hr><strong>Lista de Empleados Actualizada:</strong><br>";
        foreach ($this->empleados as $empleado) {
            $empleado->mostrarEmpleado();
        }
    }
}
?>

<!-- LE PEDI A LA IA QUE ME PONGA MEJORES PRACTICAS -->