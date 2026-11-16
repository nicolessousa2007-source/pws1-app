<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("eventos")->insert([
            'titulo' => 'Hackathon ISLA 24h',
            'tipo' => 'Hackathon',
            'data' => '2023-11-16',
            'local' => 'Auditório Principal',
            'descricao' => 'Evento de hackathon com duração de 24 horas.',
            'vagas' => 60,
            'inscritos' => 41,
        ]);

        // chamar o seeder de eventos
        $this->call(EventoSeeder::class);
    }
}
