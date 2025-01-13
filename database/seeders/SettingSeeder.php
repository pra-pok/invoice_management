<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            
                'company_name' => 'Example Corp',
                'company_email' => 'contact@example.com',
                'company_phone' => '9866064728',
                'company_address_1'=>'ktm',
                'company_address_2'=>'khara',
                'company_address_3'=>'chitwan',
            'company_country'=>'udra',
                'company_postcode'=>'22222',
                'currency'=>'n',
                'enable_tax'=>'true',
                'include_tax'=>'false',
                'tax_rate'=>10,
                'invoice_prefix'=>'INV',
                'invoice_initial_value'=>100,
                'invoice_theme'=>'222222',
                'company_logo'=>'',
                'company_logo_width'=>300,
                'company_logo_height'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
           
    }
}
