<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCriteria;

class SubCriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs = [
            [
                'criteria_id' => '1',
                'sub_criteria' => '> 2 Tahun',
                'bobot' => '4',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '1',
                'sub_criteria' => '> 1 s/d <= 2 Tahun',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '1',
                'sub_criteria' => '<= 1 Tahun',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '2',
                'sub_criteria' => 'Sangat Gemuk',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '2',
                'sub_criteria' => 'Gemuk',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '2',
                'sub_criteria' => 'Normal',
                'bobot' => '4',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '2',
                'sub_criteria' => 'Kurus',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '2',
                'sub_criteria' => 'Sangat Kurus',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '3',
                'sub_criteria' => 'Normal',
                'bobot' => '4',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '3',
                'sub_criteria' => 'Pendek',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'criteria_id' => '3',
                'sub_criteria' => 'Sangat Pendek',
                'bobot' => '5',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        SubCriteria::insert($subs);
    }
}
