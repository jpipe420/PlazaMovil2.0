<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::insert([
            'nombre' => 'Plaza Movil',
            'propietario' => 'Felipe Cañon',
            'ruc' => '420',
            'porcentaje_impuesto' => '15',
            'abreviatura_impuesto' => 'IVA',
            'direccion' => 'La Calle',
            'moneda_id' => 1
        ]);
    }
}
