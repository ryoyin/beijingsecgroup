<?php

use Illuminate\Database\Seeder;

class SystemparamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = array(
            'initial_value' => '36000',
            'next_value' => '36000'
        );

        DB::table('systemparams')->insert([
            'param_name' => 'trading_system_account_no',
            'param_value' => serialize($data),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
