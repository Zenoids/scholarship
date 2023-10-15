<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\StateAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ap = StateAdmin::where('name', 'Andhra Pradesh')->first();
           District::create(['name' => 'Anantapur','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Annamayya','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Bapatla','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Chittoor Dist','state_admin_id' => $ap->id,]);
           District::create(['name' => 'East Godavaari','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Eluru','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Guntur','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Kakinada','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Konaseema','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Krishna','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Kurnool','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Nandyal','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Ntr','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Palnadu','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Prakasam','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Spsr Nellore','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Sri Balaji Tirupati','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Sri Satya Sai','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Vijayanagaram','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Visakhapatnam','state_admin_id' => $ap->id,]);
           District::create(['name' => 'West Godavari','state_admin_id' => $ap->id,]);
           District::create(['name' => 'Ysr Kadapa','state_admin_id' => $ap->id,]);

           $an = StateAdmin::where('name','Assam North')->first();
           District::create(['name' => 'Bajali','state_admin_id' => $an->id,]);
           District::create(['name' => 'Barpeta','state_admin_id' => $an->id,]);
           District::create(['name' => 'Bongaigaon','state_admin_id' => $an->id,]);
           District::create(['name' => 'Darrang','state_admin_id' => $an->id,]);
           District::create(['name' => 'Goalpara','state_admin_id' => $an->id,]);
           District::create(['name' => 'Hojai','state_admin_id' => $an->id,]);
           District::create(['name' => 'Kamrup Metro','state_admin_id' => $an->id,]);
           District::create(['name' => 'Lakhimpur','state_admin_id' => $an->id,]);
           District::create(['name' => 'Nalbari','state_admin_id' => $an->id,]);
           District::create(['name' => 'Sonitpur','state_admin_id' => $an->id,]);
           District::create(['name' => 'South Salmara','state_admin_id' => $an->id,]);



$as = StateAdmin::where('name','Assam South')->first();
District::create(['name' => 'Bajali','state_admin_id' => $as->id,]);
District::create(['name'=>'Cachar','state_admin_id' => $as->id,]);
District::create(['name'=>'Gomati Tripura','state_admin_id' => $as->id,]);
District::create(['name'=>'Hailakandi','state_admin_id' => $as->id,]);
District::create(['name'=>'Karimganj','state_admin_id' => $as->id,]);
District::create(['name'=>'North Tripura','state_admin_id' => $as->id,]);
District::create(['name'=>'Unakoti','state_admin_id' => $as->id,]);

$br = StateAdmin::where('name','Bihar')->first();
District::create(['name'=>'Araria','state_admin_id' => $br->id,]);
District::create(['name'=>'Banka','state_admin_id' => $br->id,]);
District::create(['name'=>'Begusarai','state_admin_id' => $br->id,]);
District::create(['name'=>'Bhagalpur','state_admin_id' => $br->id,]);
District::create(['name'=>'Bhojpur','state_admin_id' => $br->id,]);
District::create(['name'=>'Buxar','state_admin_id' => $br->id,]);
District::create(['name'=>'Darbhanga','state_admin_id' => $br->id,]);
District::create(['name'=>'East Champaran','state_admin_id' => $br->id,]);
District::create(['name'=>'Gaya','state_admin_id' => $br->id,]);
District::create(['name'=>'Katihar','state_admin_id' => $br->id,]);
District::create(['name'=>'Kishanganj','state_admin_id' => $br->id,]);
District::create(['name'=>'Madhubani','state_admin_id' => $br->id,]);
District::create(['name'=>'Munger','state_admin_id' => $br->id,]);
District::create(['name'=>'Muzaffarpur','state_admin_id' => $br->id,]);
District::create(['name'=>'Nalanda','state_admin_id' => $br->id,]);
District::create(['name'=>'Nawada','state_admin_id' => $br->id,]);
District::create(['name'=>'Patna City','state_admin_id' => $br->id,]);
District::create(['name'=>'Purnea','state_admin_id' => $br->id,]);
District::create(['name'=>'Rohtas','state_admin_id' => $br->id,]);
District::create(['name'=>'Saharsa','state_admin_id' => $br->id,]);
District::create(['name'=>'Samastipur','state_admin_id' => $br->id,]);
District::create(['name'=>'Saran','state_admin_id' => $br->id,]);
District::create(['name'=>'Sitamarhi','state_admin_id' => $br->id,]);
District::create(['name'=>'Siwan','state_admin_id' => $br->id,]);
District::create(['name'=>'Supaul','state_admin_id' => $br->id,]);
District::create(['name'=>'Vaishali','state_admin_id' => $br->id,]);
District::create(['name'=>'West Champaran','state_admin_id' => $br->id,]);


$ch = StateAdmin::where('name','Chattisgarh')->first();
District::create(['name'=>'Bilaspur','state_admin_id' => $ch->id,]);
District::create(['name'=>'Durg','state_admin_id' => $ch->id,]);
District::create(['name'=>'Korba','state_admin_id' => $ch->id,]);
District::create(['name'=>'Raipur','state_admin_id' => $ch->id,]);
District::create(['name'=>'Surguja','state_admin_id' => $ch->id,]);

$dl = StateAdmin::where('name','Delhi')->first();
District::create(['name'=>'Central Delhi','state_admin_id' => $dl->id,]);
District::create(['name'=>'East Delhi','state_admin_id' => $dl->id,]);
District::create(['name'=>'North East','state_admin_id' => $dl->id,]);
District::create(['name'=>'North West','state_admin_id' => $dl->id,]);
District::create(['name'=>'Shahdara','state_admin_id' => $dl->id,]);
District::create(['name'=>'South East','state_admin_id' => $dl->id,]);
District::create(['name'=>'West Delhi','state_admin_id' => $dl->id,]);

$go = StateAdmin::where('name','Goa')->first();
District::create(['name'=>'North Goa','state_admin_id' => $go->id,]);
District::create(['name'=>'South Goa','state_admin_id' => $go->id,]);


$gj = StateAdmin::where('name','Gujrat')->first();
District::create(['name'=>'Ahmedabad City','state_admin_id' => $gj->id,]);
District::create(['name'=>'Aravali','state_admin_id' => $gj->id,]);
District::create(['name'=>'Baroda','state_admin_id' => $gj->id,]);
District::create(['name'=>'Junagadh','state_admin_id' => $gj->id,]);
District::create(['name'=>'Kutchh','state_admin_id' => $gj->id,]);
District::create(['name'=>'Mehsana','state_admin_id' => $gj->id,]);
District::create(['name'=>'Sabarkantha','state_admin_id' => $gj->id,]);
District::create(['name'=>'Surat','state_admin_id' => $gj->id,]);
District::create(['name'=>'Valsad','state_admin_id' => $gj->id,]);

$hr = StateAdmin::where('name','Haryana')->first();
District::create(['name'=>'Faridabad','state_admin_id' => $hr->id,]);
District::create(['name'=>'Gurugram','state_admin_id' => $hr->id,]);
District::create(['name'=>'Nuh','state_admin_id' => $hr->id,]);
District::create(['name'=>'Palwal','state_admin_id' => $hr->id,]);
District::create(['name'=>'Panipat','state_admin_id' => $hr->id,]);

$jk = StateAdmin::where('name','Jharkhand')->first();
District::create(['name'=>'Bokaro','state_admin_id' => $jk->id,]);
District::create(['name'=>'Dhanbad','state_admin_id' => $jk->id,]);
District::create(['name'=>'Dhanbad City','state_admin_id' => $jk->id,]);
District::create(['name'=>'East Singhbhum','state_admin_id' => $jk->id,]);
District::create(['name'=>'Godda','state_admin_id' => $jk->id,]);
District::create(['name'=>'Gridih','state_admin_id' => $jk->id,]);
District::create(['name'=>'Hazaribagh','state_admin_id' => $jk->id,]);
District::create(['name'=>'Pakur','state_admin_id' => $jk->id,]);
District::create(['name'=>'Palamu','state_admin_id' => $jk->id,]);
District::create(['name'=>'Ramgarh','state_admin_id' => $jk->id,]);
District::create(['name'=>'Ranchi','state_admin_id' => $jk->id,]);
District::create(['name'=>'Ranchi City','state_admin_id' => $jk->id,]);
District::create(['name'=>'Sahibganj','state_admin_id' => $jk->id,]);

$kar = StateAdmin::where('name','Karnataka')->first();
District::create(['name'=>'Bagalkot','state_admin_id' => $kar->id,]);
District::create(['name'=>'Bangalore Metro','state_admin_id' => $kar->id,]);
District::create(['name'=>'Belgaum','state_admin_id' => $kar->id,]);
District::create(['name'=>'Bellary','state_admin_id' => $kar->id,]);
District::create(['name'=>'Bidar','state_admin_id' => $kar->id,]);
District::create(['name'=>'Bijapur','state_admin_id' => $kar->id,]);
District::create(['name'=>'Chikmagalur','state_admin_id' => $kar->id,]);
District::create(['name'=>'Chitradurga','state_admin_id' => $kar->id,]);
District::create(['name'=>'D.K.','state_admin_id' => $kar->id,]);
District::create(['name'=>'Davangere','state_admin_id' => $kar->id,]);
District::create(['name'=>'Dharwad','state_admin_id' => $kar->id,]);
District::create(['name'=>'Gadag','state_admin_id' => $kar->id,]);
District::create(['name'=>'Gulbarga','state_admin_id' => $kar->id,]);
District::create(['name'=>'Hassan','state_admin_id' => $kar->id,]);
District::create(['name'=>'Havery','state_admin_id' => $kar->id,]);
District::create(['name'=>'Kodagu','state_admin_id' => $kar->id,]);
District::create(['name'=>'Kolar','state_admin_id' => $kar->id,]);
District::create(['name'=>'Koppal','state_admin_id' => $kar->id,]);
District::create(['name'=>'Mysore','state_admin_id' => $kar->id,]);
District::create(['name'=>'Raichur','state_admin_id' => $kar->id,]);
District::create(['name'=>'Shimoga','state_admin_id' => $kar->id,]);
District::create(['name'=>'Tumkur','state_admin_id' => $kar->id,]);
District::create(['name'=>'U.K','state_admin_id' => $kar->id,]);
District::create(['name'=>'Udupi','state_admin_id' => $kar->id,]);
District::create(['name'=>'Yadgir','state_admin_id' => $kar->id,]);

$ker = StateAdmin::where('name','Kerala')->first();


$mp = StateAdmin::where('name','Madhya Pradesh')->first();
District::create(['name'=>'Anuppur','state_admin_id' => $mp->id,]);
District::create(['name'=>'Balaghat','state_admin_id' => $mp->id,]);
District::create(['name'=>'Bhopal','state_admin_id' => $mp->id,]);
District::create(['name'=>'Bhopal City','state_admin_id' => $mp->id,]);
District::create(['name'=>'Burhanpur','state_admin_id' => $mp->id,]);
District::create(['name'=>'Chhindwara','state_admin_id' => $mp->id,]);
District::create(['name'=>'Damoh','state_admin_id' => $mp->id,]);
District::create(['name'=>'Dewas','state_admin_id' => $mp->id,]);
District::create(['name'=>'Gwalior','state_admin_id' => $mp->id,]);
District::create(['name'=>'Harda','state_admin_id' => $mp->id,]);
District::create(['name'=>'Indore City','state_admin_id' => $mp->id,]);
District::create(['name'=>'Jabalpur City','state_admin_id' => $mp->id,]);
District::create(['name'=>'Khandwa','state_admin_id' => $mp->id,]);
District::create(['name'=>'Khargone','state_admin_id' => $mp->id,]);
District::create(['name'=>'Mandla','state_admin_id' => $mp->id,]);
District::create(['name'=>'Narsinghpur','state_admin_id' => $mp->id,]);
District::create(['name'=>'Raisen','state_admin_id' => $mp->id,]);
District::create(['name'=>'Rajgarh','state_admin_id' => $mp->id,]);
District::create(['name'=>'Rewa','state_admin_id' => $mp->id,]);
District::create(['name'=>'Satna','state_admin_id' => $mp->id,]);
District::create(['name'=>'Sehore','state_admin_id' => $mp->id,]);
District::create(['name'=>'Seoni','state_admin_id' => $mp->id,]);
District::create(['name'=>'Shahdol','state_admin_id' => $mp->id,]);
District::create(['name'=>'Shajapur','state_admin_id' => $mp->id,]);
District::create(['name'=>'Sheopur','state_admin_id' => $mp->id,]);
District::create(['name'=>'Shivpuri','state_admin_id' => $mp->id,]);
District::create(['name'=>'Ujjain','state_admin_id' => $mp->id,]);

$mr = StateAdmin::where('name','Maharashtra')->first();
District::create(['name'=>'Ahmed Nagar','state_admin_id' => $mr->id,]);
District::create(['name'=>'Akola','state_admin_id' => $mr->id,]);
District::create(['name'=>'Amravati','state_admin_id' => $mr->id,]);
District::create(['name'=>'Aurangabad','state_admin_id' => $mr->id,]);
District::create(['name'=>'Aurangabad City','state_admin_id' => $mr->id,]);
District::create(['name'=>'Beed','state_admin_id' => $mr->id,]);
District::create(['name'=>'Bhandara','state_admin_id' => $mr->id,]);
District::create(['name'=>'Buldana','state_admin_id' => $mr->id,]);
District::create(['name'=>'Buldhana','state_admin_id' => $mr->id,]);
District::create(['name'=>'Chandrapur','state_admin_id' => $mr->id,]);
District::create(['name'=>'Dhule','state_admin_id' => $mr->id,]);
District::create(['name'=>'Gadhchiroli','state_admin_id' => $mr->id,]);
District::create(['name'=>'Hingoli','state_admin_id' => $mr->id,]);
District::create(['name'=>'Jalgaon','state_admin_id' => $mr->id,]);
District::create(['name'=>'Jalna','state_admin_id' => $mr->id,]);
District::create(['name'=>'Kolhapur','state_admin_id' => $mr->id,]);
District::create(['name'=>'Latur','state_admin_id' => $mr->id,]);
District::create(['name'=>'Mumbai Metro','state_admin_id' => $mr->id,]);
District::create(['name'=>'Nagpur City','state_admin_id' => $mr->id,]);
District::create(['name'=>'Nanded','state_admin_id' => $mr->id,]);
District::create(['name'=>'Nashik','state_admin_id' => $mr->id,]);
District::create(['name'=>'Nasik','state_admin_id' => $mr->id,]);
District::create(['name'=>'Osmanabad','state_admin_id' => $mr->id,]);
District::create(['name'=>'Parbhani','state_admin_id' => $mr->id,]);
District::create(['name'=>'Pune City','state_admin_id' => $mr->id,]);
District::create(['name'=>'Rai Gadh','state_admin_id' => $mr->id,]);
District::create(['name'=>'Ratnagiri','state_admin_id' => $mr->id,]);
District::create(['name'=>'Sangli','state_admin_id' => $mr->id,]);
District::create(['name'=>'Satara','state_admin_id' => $mr->id,]);
District::create(['name'=>'Sholapur','state_admin_id' => $mr->id,]);
District::create(['name'=>'Thane','state_admin_id' => $mr->id,]);
District::create(['name'=>'Wardha','state_admin_id' => $mr->id,]);
District::create(['name'=>'Washim','state_admin_id' => $mr->id,]);
District::create(['name'=>'Yavatmal','state_admin_id' => $mr->id,]);

$mkz = StateAdmin::where('name','Markaz')->first();
District::create(['name'=>'markaz','state_admin_id' => $mkz->id,]);

$pjb = StateAdmin::where('name','Punjab')->first();
District::create(['name'=>'Kapurthala','state_admin_id' => $pjb->id,]);
District::create(['name'=>'Malerkotla','state_admin_id' => $pjb->id,]);

$rj = StateAdmin::where('name','Rajasthan')->first();
District::create(['name'=>'Ajmer','state_admin_id' => $rj->id,]);
District::create(['name'=>'Baran','state_admin_id' => $rj->id,]);
District::create(['name'=>'Jaipur City','state_admin_id' => $rj->id,]);
District::create(['name'=>'Jhunjhunu','state_admin_id' => $rj->id,]);
District::create(['name'=>'Jodhpur','state_admin_id' => $rj->id,]);
District::create(['name'=>'Kota','state_admin_id' => $rj->id,]);
District::create(['name'=>'Nagour','state_admin_id' => $rj->id,]);
District::create(['name'=>'Sawai Madhopur','state_admin_id' => $rj->id,]);
District::create(['name'=>'Sikar','state_admin_id' => $rj->id,]);
District::create(['name'=>'Tonk','state_admin_id' => $rj->id,]);

$tn = StateAdmin::where('name','Tamil Nadu')->first();
District::create(['name'=>'Chengalpattu','state_admin_id' => $tn->id,]);
District::create(['name'=>'Chennai Metro','state_admin_id' => $tn->id,]);
District::create(['name'=>'Coimbatore City','state_admin_id' => $tn->id,]);
District::create(['name'=>'Dharmapuri','state_admin_id' => $tn->id,]);
District::create(['name'=>'Dindigul','state_admin_id' => $tn->id,]);
District::create(['name'=>'Karur','state_admin_id' => $tn->id,]);
District::create(['name'=>'Krishnagiri','state_admin_id' => $tn->id,]);
District::create(['name'=>'Madurai','state_admin_id' => $tn->id,]);
District::create(['name'=>'Tenkasi','state_admin_id' => $tn->id,]);
District::create(['name'=>'Thanjavur','state_admin_id' => $tn->id,]);
District::create(['name'=>'Theni','state_admin_id' => $tn->id,]);
District::create(['name'=>'Thiruvannamalai','state_admin_id' => $tn->id,]);
District::create(['name'=>'Thiruvarur','state_admin_id' => $tn->id,]);
District::create(['name'=>'Tirupattur','state_admin_id' => $tn->id,]);
District::create(['name'=>'Tiruppur','state_admin_id' => $tn->id,]);
District::create(['name'=>'Trichy','state_admin_id' => $tn->id,]);
District::create(['name'=>'Vellore','state_admin_id' => $tn->id,]);
District::create(['name'=>'Virudhunagar','state_admin_id' => $tn->id,]);

$ts = StateAdmin::where('name','Telangana')->first();
District::create(['name'=>'Adilabad','state_admin_id' => $ts->id,]);
District::create(['name'=>'Greater Hyderabad','state_admin_id' => $ts->id,]);
District::create(['name'=>'Jagtiyal','state_admin_id' => $ts->id,]);
District::create(['name'=>'K.B.Asifabad','state_admin_id' => $ts->id,]);
District::create(['name'=>'Kamareddy','state_admin_id' => $ts->id,]);
District::create(['name'=>'Karimnagar (Rural)','state_admin_id' => $ts->id,]);
District::create(['name'=>'Karimnagar (Urban)','state_admin_id' => $ts->id,]);
District::create(['name'=>'Khammam (Rural)','state_admin_id' => $ts->id,]);
District::create(['name'=>'Khammam (Urban)','state_admin_id' => $ts->id,]);
District::create(['name'=>'Kothagudem','state_admin_id' => $ts->id,]);
District::create(['name'=>'Mahaboobabad','state_admin_id' => $ts->id,]);
District::create(['name'=>'Mahbubnagar','state_admin_id' => $ts->id,]);
District::create(['name'=>'Mancheriyal','state_admin_id' => $ts->id,]);
District::create(['name'=>'Medak','state_admin_id' => $ts->id,]);
District::create(['name'=>'Medchal','state_admin_id' => $ts->id,]);
District::create(['name'=>'Nalgonda','state_admin_id' => $ts->id,]);
District::create(['name'=>'Narayanpet','state_admin_id' => $ts->id,]);
District::create(['name'=>'Nirmal','state_admin_id' => $ts->id,]);
District::create(['name'=>'Nizamabad (Rural)','state_admin_id' => $ts->id,]);
District::create(['name'=>'Nizamabad (Urban)','state_admin_id' => $ts->id,]);
District::create(['name'=>'Peddapalli','state_admin_id' => $ts->id,]);
District::create(['name'=>'Rangareddy','state_admin_id' => $ts->id,]);
District::create(['name'=>'Sangareddy','state_admin_id' => $ts->id,]);
District::create(['name'=>'Siddipet','state_admin_id' => $ts->id,]);
District::create(['name'=>'Suryapet','state_admin_id' => $ts->id,]);
District::create(['name'=>'Vanparthi','state_admin_id' => $ts->id,]);
District::create(['name'=>'Viqarabad','state_admin_id' => $ts->id,]);
District::create(['name'=>'Warangal (Urban)','state_admin_id' => $ts->id,]);

$upe = StateAdmin::where('name','U.P. East')->first();
District::create(['name'=>'Allahabad','state_admin_id' => $upe->id,]);
District::create(['name'=>'Allahabad City','state_admin_id' => $upe->id,]);
District::create(['name'=>'Ambedkar Nagar','state_admin_id' => $upe->id,]);
District::create(['name'=>'Ayodhya','state_admin_id' => $upe->id,]);
District::create(['name'=>'Azamgarh','state_admin_id' => $upe->id,]);
District::create(['name'=>'Bahraich','state_admin_id' => $upe->id,]);
District::create(['name'=>'Balia','state_admin_id' => $upe->id,]);
District::create(['name'=>'Balrampur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Banaras','state_admin_id' => $upe->id,]);
District::create(['name'=>'Banda','state_admin_id' => $upe->id,]);
District::create(['name'=>'Barabanki','state_admin_id' => $upe->id,]);
District::create(['name'=>'Basti','state_admin_id' => $upe->id,]);
District::create(['name'=>'Bhadohi','state_admin_id' => $upe->id,]);
District::create(['name'=>'Chandauli','state_admin_id' => $upe->id,]);
District::create(['name'=>'Chitrkoot','state_admin_id' => $upe->id,]);
District::create(['name'=>'Deoria','state_admin_id' => $upe->id,]);
District::create(['name'=>'Faizabad','state_admin_id' => $upe->id,]);
District::create(['name'=>'Fatehpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Ghazipur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Gonda','state_admin_id' => $upe->id,]);
District::create(['name'=>'Gorakhpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Gorakhpur City','state_admin_id' => $upe->id,]);
District::create(['name'=>'Hamirpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Jaunpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Jhansi','state_admin_id' => $upe->id,]);
District::create(['name'=>'Kanpur City','state_admin_id' => $upe->id,]);
District::create(['name'=>'Kaushambi','state_admin_id' => $upe->id,]);
District::create(['name'=>'Lakhimpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Lalitpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Lucknow City','state_admin_id' => $upe->id,]);
District::create(['name'=>'Lucknow Dihaat','state_admin_id' => $upe->id,]);
District::create(['name'=>'Mahoba','state_admin_id' => $upe->id,]);
District::create(['name'=>'Mau','state_admin_id' => $upe->id,]);
District::create(['name'=>'Mirzapur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Pratapgarh','state_admin_id' => $upe->id,]);
District::create(['name'=>'Raibareli','state_admin_id' => $upe->id,]);
District::create(['name'=>'Santkabir Nagar','state_admin_id' => $upe->id,]);
District::create(['name'=>'Siddharth Nagar','state_admin_id' => $upe->id,]);
District::create(['name'=>'Sitapur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Sultanpur','state_admin_id' => $upe->id,]);
District::create(['name'=>'Unnao','state_admin_id' => $upe->id,]);

$upw = StateAdmin::where('name','U.P. West')->first();
District::create(['name'=>'Agra','state_admin_id' => $upw->id,]);
District::create(['name'=>'Aligarh','state_admin_id' => $upw->id,]);
District::create(['name'=>'Amroha','state_admin_id' => $upw->id,]);
District::create(['name'=>'Baghpat','state_admin_id' => $upw->id,]);
District::create(['name'=>'Bareilly','state_admin_id' => $upw->id,]);
District::create(['name'=>'Bijnor','state_admin_id' => $upw->id,]);
District::create(['name'=>'Budaun','state_admin_id' => $upw->id,]);
District::create(['name'=>'Bulandshahar','state_admin_id' => $upw->id,]);
District::create(['name'=>'Etawah','state_admin_id' => $upw->id,]);
District::create(['name'=>'Farrukhabad','state_admin_id' => $upw->id,]);
District::create(['name'=>'Firozabad','state_admin_id' => $upw->id,]);
District::create(['name'=>'Gautambudh Nagar','state_admin_id' => $upw->id,]);
District::create(['name'=>'Ghaziabad','state_admin_id' => $upw->id,]);
District::create(['name'=>'Hapur','state_admin_id' => $upw->id,]);
District::create(['name'=>'Hardoi','state_admin_id' => $upw->id,]);
District::create(['name'=>'Mainpuri','state_admin_id' => $upw->id,]);
District::create(['name'=>'Mathura','state_admin_id' => $upw->id,]);
District::create(['name'=>'Meerut','state_admin_id' => $upw->id,]);
District::create(['name'=>'Moradabad','state_admin_id' => $upw->id,]);
District::create(['name'=>'Muzaffarnagar','state_admin_id' => $upw->id,]);
District::create(['name'=>'Pilibhit','state_admin_id' => $upw->id,]);
District::create(['name'=>'Rampur','state_admin_id' => $upw->id,]);
District::create(['name'=>'Saharanpur','state_admin_id' => $upw->id,]);
District::create(['name'=>'Sambhal','state_admin_id' => $upw->id,]);
District::create(['name'=>'Shahjahanpur','state_admin_id' => $upw->id,]);
District::create(['name'=>'Shamli','state_admin_id' => $upw->id,]);

$wb = StateAdmin::where('name','West Bengal')->first();
District::create(['name'=>'Alipore Duar','state_admin_id' => $wb->id,]);
District::create(['name'=>'Birbhum','state_admin_id' => $wb->id,]);
District::create(['name'=>'Cooch Behar','state_admin_id' => $wb->id,]);
District::create(['name'=>'Dakshin Dinajpur','state_admin_id' => $wb->id,]);
District::create(['name'=>'Hooghly','state_admin_id' => $wb->id,]);
District::create(['name'=>'Howrah','state_admin_id' => $wb->id,]);
District::create(['name'=>'Kolkata Metro','state_admin_id' => $wb->id,]);
District::create(['name'=>'Malda','state_admin_id' => $wb->id,]);
District::create(['name'=>'Murshidabad','state_admin_id' => $wb->id,]);
District::create(['name'=>'Nadia','state_admin_id' => $wb->id,]);
District::create(['name'=>'North 24 Parganas','state_admin_id' => $wb->id,]);
District::create(['name'=>'Paschim Bardwan','state_admin_id' => $wb->id,]);
District::create(['name'=>'Paschim Medinipur','state_admin_id' => $wb->id,]);
District::create(['name'=>'Purba Bardhaman','state_admin_id' => $wb->id,]);
District::create(['name'=>'Purba Medinipur','state_admin_id' => $wb->id,]);
District::create(['name'=>'South 24 Parganas','state_admin_id' => $wb->id,]);
District::create(['name'=>'Uttar Dinajpur','state_admin_id' => $wb->id,]);

    }
}

