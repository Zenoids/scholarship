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
        $districtsData = [
            [
                'state' => 'Andhra Pradesh',
                'districts' => ['Anantapur','Annamayya','Bapatla','Chittoor Dist','East Godavaari','Eluru','Guntur','Kakinada','Konaseema','Krishna','Kurnool','Nandyal','Ntr','Palnadu','Prakasam','Spsr Nellore','Sri Balaji Tirupati','Sri Satya Sai','Vijayanagaram','Visakhapatnam','West Godavari','Ysr Kadapa']
            ],
            [
                'state' => 'Assam North',
                'districts' => ['Bajali','Barpeta','Bongaigaon','Darrang','Goalpara','Hojai','Kamrup Metro','Lakhimpur','Nalbari','Sonitpur','South Salmara', ]
            ],
            [
                'state'=>'Assam South',
                'districts'=>['Bajali','Cachar','Gomati Tripura','Hailakandi','Karimganj','North Tripura','Unakoti']
               ],
               ['state'=>'Bihar',
               'districts'=>['Araria','Banka','Begusarai','Bhagalpur','Bhojpur','Buxar','Darbhanga','East Champaran','Gaya','Katihar','Kishanganj','Madhubani','Munger','Muzaffarpur','Nalanda','Nawada','Patna City','Purnea','Rohtas','Saharsa','Samastipur','Saran','Sitamarhi','Siwan','Supaul','Vaishali','West Champaran']],

               [
               'state'=>'Chattisgarh',
               'districts'=>['Bilaspur','Durg','Korba','Raipur','Surguja']
               ],
               [
               'state'=>'Delhi',
               'districts'=>['Central Delhi','East Delhi','North East','North West','Shahdara','South East','West Delhi']
               ],
               [
               'state'=>'Goa',
               'districts'=>['North Goa','South Goa']
               ],

               [
               'state'=>'Gujrat',
               'districts'=>['Ahmedabad City','Aravali','Baroda','Junagadh','Kutchh','Mehsana','Sabarkantha','Surat','Valsad']
               ],
               [
               'state'=>'Haryana',
               'districts'=>['Faridabad','Gurugram','Nuh','Palwal','Panipat']
               ],
               [
               'state'=>'Jharkhand',
               'districts'=>['Bokaro','Dhanbad','Dhanbad City','East Singhbhum','Godda','Gridih','Hazaribagh','Pakur','Palamu','Ramgarh','Ranchi','Ranchi City','Sahibganj']
               ],
               [
               'state'=>'Karnataka',
               'districts'=>['Bagalkot','Bangalore Metro','Belgaum','Bellary','Bidar','Bijapur','Chikmagalur','Chitradurga','D.K','Davangere','Dharwad','Gadag','Gulbarga','Hassan','Havery','Kodagu','Kolar','Koppal','Mysore','Raichur','Shimoga','Tumkur','U.K','Udupi','Yadgir']
               ],
               ['state'=>'Kerala',
               'districts'=>[]
                ],

               [
               'state'=>'Madhya Pradesh',
               'districts'=>['Anuppur','Balaghat','Bhopal','Bhopal City','Burhanpur','Chhindwara','Damoh','Dewas','Gwalior','Harda','Indore City','Jabalpur City','Khandwa','Khargone','Mandla','Narsinghpur','Raisen','Rajgarh','Rewa','Satna','Sehore','Seoni','Shahdol','Shajapur','Sheopur','Shivpuri','Ujjain']
               ],
               [
               'state'=>'Maharashtra',
               'districts'=>['Ahmed Nagar','Akola','Amravati','Aurangabad','Aurangabad City','Beed','Bhandara','Buldana','Buldhana','Chandrapur','Dhule','Gadhchiroli','Hingoli','Jalgaon','Jalna','Kolhapur','Latur','Mumbai Metro','Nagpur City','Nanded','Nashik','Nasik','Osmanabad','Parbhani','Pune City','Rai Gadh','Ratnagiri','Sangli','Satara','Sholapur','Thane','Wardha','Washim','Yavatmal']
               ],
               [
               'state'=>'Markaz',
               'districts'=>['markaz']
               ],
               [
               'state'=>'Punjab',
               'districts'=>['Kapurthala','Malerkotla']
               ],
               [
               'state'=>'Rajasthan',
               'districts'=>['Ajmer','Baran','Jaipur City','Jhunjhunu','Jodhpur','Kota','Nagour','Sawai Madhopur','Sikar','Tonk']
               ],
               [
               'state'=>'Tamil Nadu',
               'districts'=>['Chengalpattu','Chennai Metro','Coimbatore City','Dharmapuri','Dindigul','Karur','Krishnagiri','Madurai','Tenkasi','Thanjavur','Theni','Thiruvannamalai','Thiruvarur','Tirupattur','Tiruppur','Trichy','Vellore','Virudhunagar']
               ],
               [
               'state'=>'Telangana',
               'districts'=>['Adilabad','Greater Hyderabad','Jagtiyal','K.B.Asifabad','Kamareddy','Karimnagar (Rural)','Karimnagar (Urban)','Khammam (Rural)','Khammam (Urban)','Kothagudem','Mahaboobabad','Mahbubnagar','Mancheriyal','Medak','Medchal','Nalgonda','Narayanpet','Nirmal','Nizamabad (Rural','Nizamabad (Urban','Peddapalli','Rangareddy','Sangareddy','Siddipet','Suryapet','Vanparthi','Viqarabad','Warangal (Urban']
               ],
               [
               'state'=>'U.P. East',
               'districts'=>['Allahabad','Allahabad City','Ambedkar Nagar','Ayodhya','Azamgarh','Bahraich','Balia','Balrampur','Banaras','Banda','Barabanki','Basti','Bhadohi','Chandauli','Chitrkoot','Deoria','Faizabad','Fatehpur','Ghazipur','Gonda','Gorakhpur','Gorakhpur City','Hamirpur','Jaunpur','Jhansi','Kanpur City','Kaushambi','Lakhimpur','Lalitpur','Lucknow City','Lucknow Dihaat','Mahoba','Mau','Mirzapur','Pratapgarh','Raibareli','Santkabir Nagar','Siddharth Nagar','Sitapur','Sultanpur','Unnao']
               ],
               [
               'state'=>'U.P. West',
               'districts'=>['Agra','Aligarh','Amroha','Baghpat','Bareilly','Bijnor','Budaun','Bulandshahar','Etawah','Farrukhabad','Firozabad','Gautambudh Nagar','Ghaziabad','Hapur','Hardoi','Mainpuri','Mathura','Meerut','Moradabad','Muzaffarnagar','Pilibhit','Rampur','Saharanpur','Sambhal','Shahjahanpur','Shamli']
               ],
               [
               'state'=>'West Bengal',
               'districts'=>['Alipore Duar','Birbhum','Cooch Behar','Dakshin Dinajpur','Hooghly','Howrah','Kolkata Metro','Malda','Murshidabad','Nadia','North 24 Parganas','Paschim Bardwan','Paschim Medinipur','Purba Bardhaman','Purba Medinipur','South 24 Parganas','Uttar Dinajpur']
               ]
        ];

        foreach ($districtsData as $data) {
            $stateAdmin = StateAdmin::where('name', $data['state'])->first();

            if ($stateAdmin) {
                foreach ($data['districts'] as $districtName) {
                    District::create([
                        'name' => $districtName,
                        'state_admin_id' => $stateAdmin->id
                    ]);
                }
            }
        }




    }
}

