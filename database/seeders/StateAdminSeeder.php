<?php

namespace Database\Seeders;

use App\Models\StateAdmin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $andhra = User::where('email', 'jihjamaatap@gmail.com')->first();
        StateAdmin::create([
            'name' => 'Andhra Pradesh',
            'user_id' => $andhra->id,
        ]);
        $an = User::where('email', 'jihassamnorth100@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Assam North',
                'user_id' => $an->id,
            ]);
        $as = User::where('email', 'jihassamsouth@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Assam South',
                'user_id' => $as->id,
            ]);
        $br = User::where('email', 'jihbihar@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Bihar',
                'user_id' => $br->id,
            ]);
        $ch = User::where('email', 'jihcgzone@yahoo.co.in')->first();
           StateAdmin::create([
                'name' => 'Chattisgarh',
                'user_id' => $ch->id,
            ]);
        $dl = User::where('email', 'jihdelhi@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Delhi',
                'user_id' => $dl->id,
            ]);
        $go = User::where('email', 'jihgoa@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Goa',
                'user_id' => $go->id,
            ]);
        $gj = User::where('email', 'jih.guj@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Gujrat',
                'user_id' => $gj->id,
            ]);
        $hr = User::where('email', 'jihharyana@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Haryana',
                'user_id' => $hr->id,
            ]);
        $jk = User::where('email', 'jharkhandjih@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Jharkhand',
                'user_id' => $jk->id,
            ]);
        $kar = User::where('email', 'jihkar@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Karnataka',
                'user_id' => $kar->id,
            ]);
        $ker = User::where('email', 'orgn@jihkerala.org')->first();
           StateAdmin::create([
                'name' => 'Kerala',
                'user_id' => $ker->id,
            ]);
        $mp = User::where('email', 'mpjamaatislami@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Madhya Pradesh',
                'user_id' => $mp->id,
            ]);
        $mr = User::where('email', 'office@jihmaharashtra.org')->first();
           StateAdmin::create([
                'name' => 'Maharashtra',
                'user_id' => $mr->id,
            ]);
        $mkz = User::where('email', 'markazjih@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Markaz',
                'user_id' => $mkz->id,
            ]);
        $pjb = User::where('email', 'jihpunjab@yahoo.com')->first();
           StateAdmin::create([
                'name' => 'Punjab',
                'user_id' => $pjb->id,
            ]);
        $rj = User::where('email', 'jihraj@hotmail.com')->first();
           StateAdmin::create([
                'name' => 'Rajasthan',
                'user_id' => $rj->id,
            ]);
        $tn = User::where('email', 'jihtnzone@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Tamil Nadu',
                'user_id' => $tn->id,
            ]);
        $ts = User::where('email', 'jihtelanganastate@gmail.com')->first();
           StateAdmin::create([
                'name' => 'Telangana',
                'user_id' => $ts->id,
            ]);
        $upe = User::where('email', 'jihupeastlucknow@gmail.com')->first();
           StateAdmin::create([
                'name' => 'U.P. East',
                'user_id' => $upe->id,
            ]);
        $upw = User::where('email', 'upwestjih@yahoo.in')->first();
           StateAdmin::create([
                'name' => 'U.P. West',
                'user_id' => $upw->id,
            ]);
        $wb = User::where('email', 'jamaatwb@gmail.com')->first();
           StateAdmin::create([
                'name' => 'West Bengal',
                'user_id' => $wb->id,
            ]);

    }
}
