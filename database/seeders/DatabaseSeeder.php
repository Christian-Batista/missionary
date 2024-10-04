<?php

namespace Database\Seeders;

use App\Models\Mission;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::factory(10)->create();
        Mission::factory(50)->create();
        $users = User::factory(10)->create();
        foreach ($users as $user) {
            $missionId = Mission::inRandomOrder()->value('id');
            Profile::factory()->create([
                'user_id' => $user->id,
                'mission_id' => $missionId
            ]);
        }
    }
}
