<?php
namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Open', 'Closed'
        ];

        foreach($statuses as $status)
        {
            Status::factory()->create([
                'name'  => $status,
//                'color' => $faker->hexcolor
            ]);
        }
    }
}
