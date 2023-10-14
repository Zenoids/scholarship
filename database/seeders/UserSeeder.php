<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'SuperAdmin',
        //     'email' => 'superadmin@scholarship.jih.org',
        //     'password' => Hash::make('jih@2023'),
        //     'role'=>'SuperAdmin'
        // ]);
        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('test@example.com'),
        //     'role'=>'State'
        // ]);
        // User::create([
        //     'name' => '1 User',
        //     'email' => 'test1@example.com',
        //     'password' => Hash::make('test@example.com'),
        //     'role'=>'Unit'
        // ]);
        // User::create([
        //     'name' => 'Testqe User',
        //     'email' => 'test2@example.com',
        //     'password' => Hash::make('dommel'),
        //     'role'=>'MarkazAdmin'
        // ]);


        User::create(['email'=>'jihjamaatap@gmail.com',	'number'=>'8309049542'	,'name'=>'ap-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihassamnorth100@gmail.com',	'number'=>'8812967294'	,'name'=>'an-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihassamsouth@gmail.com',	'number'=>'7002436710'	,'name'=>'as-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihbihar@gmail.com',	'number'=>'8651882777'	,'name'=>'br-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihcgzone@yahoo.co.in',	'number'=>'7869261400'	,'name'=>'cg-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihdelhi@gmail.com',	'number'=>'9818409191'	,'name'=>'dl-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihgoa@gmail.com',	'number'=>'9225903427'	,'name'=>'ga-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jih.guj@gmail.com',	'number'=>'9824452565'	,'name'=>'gj-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihharyana@gmail.com',	'number'=>'9910606906'	,'name'=>'hr-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jharkhandjih@gmail.com',	'number'=>'9835344959'	,'name'=>'jk-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihkar@gmail.com',	'number'=>'9844065137'	,'name'=>'ka-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'orgn@jihkerala.org',	'number'=>'9447628077'	,'name'=>'kl-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'mpjamaatislami@gmail.com',	'number'=>'9893626562'	,'name'=>'mp-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'office@jihmaharashtra.org',	'number'=>'9822035262'	,'name'=>'mh-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'markazjih@gmail.com','number'=>'8421008494','name'=>'	markaz'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihpunjab@yahoo.com',	'number'=>'9855040503'	,'name'=>'pb-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihraj@hotmail.com',	'number'=>'7891075756'	,'name'=>'rj-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihtnzone@gmail.com',	'number'=>'8056760308'	,'name'=>'tn-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihtelanganastate@gmail.com',	'number'=>'9866685248'	,'name'=>'ts-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jihupeastlucknow@gmail.com	','number'=>'9695271076	','name'=>'upe-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'upwestjih@yahoo.in	','number'=>'7417449612	','name'=>'upw-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
        User::create(['email'=>'jamaatwb@gmail.com',	'number'=>'9836024416'	,'name'=>'wb-admin'	,'password'=>Hash::make('123456'), 'role'=>'State']);
    }
}



