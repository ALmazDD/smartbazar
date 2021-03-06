<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        $this->call(RoleSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MeasureSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(WeekdaySeeder::class);
        factory(App\Models\Product::class, 100)->create();
        factory(App\Models\Gallery::class, 100)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
