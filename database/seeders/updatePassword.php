<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class updatePassword extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('nim',111111)->get();
        foreach($users as $user){
            User::where('id',$user->id)->update(['password'=>bcrypt($user->passwordkirim)]);
        }
    }
}
