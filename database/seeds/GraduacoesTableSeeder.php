<?php

use Illuminate\Database\Seeder;

class GraduacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('graduacoes')->truncate();

        DB::select(
            DB::raw("INSERT INTO graduacoes values
                (1,  'TEN BRIG', 'TENENTE BRIGADEIRO',          CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (2,  'MAJ BRIG', 'MAJOR BRIGADEIRO',            CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (3,  'BRIG',     'BRIGADEIRO',                  CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (4,  'CEL',      'CORONEL',                     CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (5,  'TEN CEL',  'TENENTE CORONEL',             CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (6,  'MAJ',      'MAJOR',                       CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (7,  'CAP',      'CAPITÃO',                     CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (8,  '1T',       'PRIMEIRO TENENTE',            CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (9,  '2T',       'SEGUNDO TENENTE',             CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (10, 'ASP',      'ASPIRANTE',                   CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (11, 'SO',       'SUBOFICIAL',                  CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (12, '1S',       'PRIMEIRO-SARGENTO',           CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (13, '2S',       'SEGUNDO-SARGENTO',            CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (14, '3S',       'TERCEIRO-SARGENTO',           CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (15, 'CB',       'CABO',                        CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (16, 'S1',       'SOLDADO DE PRIMEIRA CLASSE',  CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (17, 'S2',       'SOLDADO DE SEGUNDA CLASSE',   CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
                (18, 'RC',       'RECRUTA',                     CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"
            )
        );

        $this->command->info('Graduações Cadastrados!');
    }
}
