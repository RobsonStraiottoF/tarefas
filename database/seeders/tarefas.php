<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarefa;

class tarefas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarefas = [
            ['tarefa' => 'Estudar Api', 'status' => 0],
            ['tarefa' => 'Aula de web', 'status' => 1],
            ['tarefa' => 'fazer compras', 'status' => 0],
            ['tarefa' => 'comprar carro', 'status' => 0],
            ['tarefa' => 'pagar um chocolate para o professor', 'status' => 0],
            ['tarefa' => 'recarregar o celular', 'status' => 1]



        ];

        foreach ($tarefas as $tarefa) {
            Tarefa::create($tarefa);
        }
        //
    }
}
