<?php
namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $priorities = [
            'Low', 'Medium', 'High'
        ];

        foreach($priorities as $priority)
        {
            Priority::factory()->create([
                'name'  => $priority,
            ]);
        }
    }
}
