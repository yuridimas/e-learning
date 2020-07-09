<?php

use App\Role;
use App\User;
use App\Course;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();

        foreach ($roles as $item) {
            if ($item->id == 1) {
                $user = factory(User::class, 1)->make();
                $item->users()->saveMany($user);
            } elseif ($item->id == 2) {
                factory(User::class, 4)->create(['role_id' => 2])->each(function ($user) {

                    $courses = factory(Course::class, 6)->make();
                    $user->courses()->saveMany($courses);
                });
            } elseif ($item->id == 3) {
                factory(User::class, 10)->create(['role_id' => 3]);
            }
        }
    }
}
