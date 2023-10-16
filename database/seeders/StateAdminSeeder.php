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
        $stateAdmins=
        [

       [ 'email'=> 'jihjamaatap@gmail.com',
       'name' => 'Andhra Pradesh',
   ],[        'email'=> 'jihassamnorth100@gmail.com',
           'name' => 'Assam North',
   ],[        'email'=> 'jihassamsouth@gmail.com',
           'name' => 'Assam South',
   ],[        'email'=> 'jihbihar@gmail.com',
           'name' => 'Bihar',
   ],[        'email'=> 'jihcgzone@yahoo.co.in',
           'name' => 'Chattisgarh',
   ],[        'email'=> 'jihdelhi@gmail.com',
           'name' => 'Delhi',
   ],[        'email'=> 'jihgoa@gmail.com',
           'name' => 'Goa',
   ],[        'email'=> 'jih.guj@gmail.com',
           'name' => 'Gujrat',
   ],[        'email'=> 'jihharyana@gmail.com',
           'name' => 'Haryana',
   ],[        'email'=> 'jharkhandjih@gmail.com',
           'name' => 'Jharkhand',
   ],[        'email'=> 'jihkar@gmail.com',
           'name' => 'Karnataka',
   ],[        'email'=> 'orgn@jihkerala.org',
           'name' => 'Kerala',
   ],[        'email'=> 'mpjamaatislami@gmail.com',
           'name' => 'Madhya Pradesh',
   ],[        'email'=> 'office@jihmaharashtra.org',
           'name' => 'Maharashtra',
   ],[        'email'=> 'markazjih@gmail.com',
           'name' => 'Markaz',
   ],[        'email'=> 'jihpunjab@yahoo.com',
           'name' => 'Punjab',
   ],[        'email'=> 'jihraj@hotmail.com',
           'name' => 'Rajasthan',
   ],[        'email'=> 'jihtnzone@gmail.com',
           'name' => 'Tamil Nadu',
   ],[        'email'=> 'jihtelanganastate@gmail.com',
           'name' => 'Telangana',
   ],[        'email'=> 'jihupeastlucknow@gmail.com',
           'name' => 'U.P. East',
   ],[        'email'=> 'upwestjih@yahoo.in',
           'name' => 'U.P. West',
   ],[        'email'=> 'jamaatwb@gmail.com',
           'name' => 'West Bengal',
   ]

    ];

        foreach($stateAdmins as $stateAdmin){
        $state=User::where('email',$stateAdmin['email'])->first();
        StateAdmin::create(['name'=>$stateAdmin['name'],'user_id'=>$state->id]);}

    }
}
