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
            'tipo' => 'hackathon',
            'data' => '2026-11-06',
            'local' => 'Auditório Principal',
            'descricao' => 'Evento de hackathon com duração de 24 horas.',
            'vagas' => 60,
            'inscritos' => 41,
            'created_at' => now(),
            'updated_at' => now(),
        [
            'titulo' => 'Workshop de Laravel',
            'tipo' => 'workshop',
            'data' => '2026-10-14',
            'local' => 'Laboratório 2.05',
            'descricao' => 'Aprenda os fundamentos do framework Laravel em um workshop prático.',
            'vagas' => 20,
            'inscritos' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Palestra: Carreiras em Cibersegurança',
            'tipo' => 'palestra',
            'data' => '2026-10-21',
            'local' => 'Auditório',
            'descricao' => 'Descubra as oportunidades e desafios na área de cibersegurança.',
            'vagas' => 120,
            'inscritos' => 120,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Git e GitHub para iniciantes',
            'tipo' => 'workshop',
            'data' => '2026-09-30',
            'local' => 'Laboratório 1.02',
            'descricao' => 'Aprenda a usar Git e GitHub para controle de versão e colaboração em projetos.',
            'vagas' => 25,
            'inscritos' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Conversa com antigos alunos DWDM',
            'tipo' => 'palestra',
            'data' => '2026-12-02',
            'local' => 'Sala 3.10',
            'descricao' => 'Uma oportunidade de ouvir experiências e conselhos de ex-alunos do curso de Desenvolvimento Web e Dispositivos Móveis.',
            'vagas' => 40,
            'inscritos' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Workshop de desenvolvimento web',
            'tipo' => 'workshop',
            'data' => '2026-12-10',
            'local' => 'Laboratório 2.01',
            'descricao' => 'Aprenda a criar aplicações web modernas com as tecnologias mais recentes.',
            'vagas' => 30,
            'inscritos' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ]);

        // chamar o seeder de eventos
        $this->call(EventoSeeder::class);
    }
}
