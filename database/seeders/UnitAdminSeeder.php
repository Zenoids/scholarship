<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\UnitAdmin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    // {        $pjb = User::where('email', 'jihpunjab@yahoo.com')->first();
    {
         $admins = [
            ['email'=>'17rukn@jihwb.org','number'=>'South 24 Parganas','name'=>'wb-nabason'],
['email'=>'1abcd@gmail.com','number'=>'East Delhi','name'=>'dl-trilokpuri'],
['email'=>'1anisairfan1967@gmail.com','number'=>'Mumbai Metro','name'=>'mh-kurla'],
['email'=>'1atiqurrahmanislahi@gmail.com','number'=>'Azamgarh','name'=>'upe-mahul'],
['email'=>'1craftpassanger@gmail.com','number'=>'Shamli','name'=>'upw-jhinjhana'],
['email'=>'1iyaz.j75@gmail.com','number'=>'North Goa','name'=>'ga-bicholim'],
['email'=>'1jihafesouth@gmail.com','number'=>'South East','name'=>'dl-abulfazaleS'],
['email'=>'1rizwanzahoor2003@yahoo.com','number'=>'Allahabad City','name'=>'upe-atala'],
['email'=>'1Safwanzx2@gmail.com','number'=>'Ahmedabad City','name'=>'gj-danilimda'],
['email'=>'2d@gmail.com','number'=>'Aurangabad City','name'=>'mh-qadeemshaher'],
['email'=>'2tdrt@gmail.com','number'=>'Thane','name'=>'mh-mumbra'],
['email'=>'32@gh.i','number'=>'Kolhapur','name'=>'mh-uchgaon'],
['email'=>'4rs@gmail.com','number'=>'Aurangabad City','name'=>'mh-railwaystation'],
['email'=>'5almuzammil580@gmail.com','number'=>'Allahabad City','name'=>'upe-bamrauli'],
['email'=>'5ssd@gmail.com','number'=>'Aurangabad City','name'=>'mh-padegaon'],
['email'=>'71zain@gmail.com','number'=>'Aurangabad City','name'=>'mh-cnaka'],
['email'=>'7ssd@gmail.com','number'=>'Aurangabad City','name'=>'mh-lalmasjid'],
['email'=>'977453@gmail.com','number'=>'Gomati Tripura','name'=>'as-udaipur'],
['email'=>'9902617422ps@gmail.com','number'=>'Shimoga','name'=>'ka-sagar'],
['email'=>'9dg@gmail.com','number'=>'Aurangabad City','name'=>'mh-delhigate'],
['email'=>'a_mshaikh@rediffmail.com','number'=>'Junagadh','name'=>'gj-junagadh'],
['email'=>'a.aleem.huda@gmail.com','number'=>'Indore City','name'=>'mp-khajrana'],
['email'=>'a.karim.jihvyr123@gmail.com','number'=>'Vijayawada City (Ntr)','name'=>'ap-gangur'],
['email'=>'A@jihwb.org','number'=>'Birbhum','name'=>'wb-bishia'],
['email'=>'aabidalia9@gmail.com','number'=>'Bahraich','name'=>'upe-nanpara'],
['email'=>'aakhtarazad@gamil.com','number'=>'Chandrapur','name'=>'mh-newmajri'],
['email'=>'Aamir.malegaon@gmail.com','number'=>'Nashik','name'=>'mh-malegaon'],
['email'=>'aamirumri79@gmail.com','number'=>'Davangere','name'=>'ka-hosur'],
['email'=>'aarif_jatoo@yahoo.co.in','number'=>'Sikar','name'=>'rj-sikar'],
['email'=>'aarifsirlatur@gmail.com','number'=>'Latur','name'=>'mh-latur'],
['email'=>'abasith.sk@gmail.com','number'=>'Kothagudem','name'=>'ts-rudrampur'],
['email'=>'abc@gmail.com','number'=>'Akola','name'=>'mh-murtuzapur'],
['email'=>'abc14355@gmail.com','number'=>'Nanded','name'=>'mh-bhokar'],
['email'=>'abcd@gmail.com','number'=>'Central Delhi','name'=>'dl-nabikarim'],
['email'=>'abdul_yesh10@reditt.com','number'=>'Rewa','name'=>'mp-rewa'],
['email'=>'abdul.quddus2010@gmail.com','number'=>'Siddipet','name'=>'ts-siddipet'],
['email'=>'abdul.razzaque121@gmail.com','number'=>'Harda','name'=>'mp-harda'],
['email'=>'Abdul59rauf@gmail.com','number'=>'Gautambudh Nagar','name'=>'upw-chhajarsi'],
['email'=>'abdulahad6040@gmail.com','number'=>'Katihar','name'=>'br-patninarainpur'],
['email'=>'abdulansari967@gmail.com','number'=>'Balia','name'=>'upe-rasra'],
['email'=>'abdularif1968@gmail.com','number'=>'Akola','name'=>'mh-akot'],
['email'=>'abdulgffark812@gmail.com','number'=>'Ambedkar Nagar','name'=>'upe-baskhari'],
['email'=>'abdulgffarr812@gmail.com','number'=>'Faizabad','name'=>'upe-sonkhari'],
['email'=>'Abdulhafeezbagi1@gmail.com','number'=>'Allahabad','name'=>'upe-baagi'],
['email'=>'abdulhakkimjih@gmail.com','number'=>'Madurai','name'=>'tn-thirumangalam'],
['email'=>'abdulhali196201@gmail.com','number'=>'Basti','name'=>'upe-kusaurabazar'],
['email'=>'abdulhameed0190@gmail.com','number'=>'Lakhimpur','name'=>'upe-badagawon'],
['email'=>'abduljabbarkhawas48@gmail.com','number'=>'Gadag','name'=>'ka-gadag'],
['email'=>'abdulkabirruksana@gmail.com','number'=>'Prakasam','name'=>'ap-donakonda'],
['email'=>'abdulkadiransari1966@gmail.com','number'=>'Rohtas','name'=>'br-bikramganj'],
['email'=>'abdulkareemua3@gmail.com','number'=>'D.K.','name'=>'ka-ullal'],
['email'=>'Abdulkhaderjih@gmail.com','number'=>'Shimoga','name'=>'ka-thirthahalli'],
['email'=>'abdullaharehalli@gmail.com','number'=>'Hassan','name'=>'ka-arehalli'],
['email'=>'abdullahkkhan9795@gmail.com','number'=>'Pratapgarh','name'=>'upe-mahuwar'],
['email'=>'abdullahssrm@gmail.com','number'=>'Rohtas','name'=>'br-sasaram'],
['email'=>'abdulmalik10063@gmail.com','number'=>'Faridabad','name'=>'hr-ballabgarh'],
['email'=>'abdulmannan34378@gmail.com','number'=>'U.K','name'=>'ka-sirsi'],
['email'=>'AbdulMateen761@gmail.com','number'=>'Sawai Madhopur','name'=>'rj-wazeerpur'],
['email'=>'abdulnasser2005@gmail.com','number'=>'Chengalpattu','name'=>'tn-medavakkam'],
['email'=>'abdulqadirs904@gmail.com','number'=>'Chandrapur','name'=>'mh-ballarpur'],
['email'=>'abdulqayum221967@gmail.com','number'=>'Davangere','name'=>'ka-harihar'],
['email'=>'abdulraheem10021993@gmail.com','number'=>'Kothagudem','name'=>'ts-monuguru'],
['email'=>'abdulraheman@gmail.com','number'=>'Raichur','name'=>'ka-manvi'],
['email'=>'Abdulrajjakmastar@gmail.com','number'=>'Damoh','name'=>'mp-damoh'],
['email'=>'abdulsamath351@gmail.com','number'=>'Chennai Metro','name'=>'tn-royapuram'],
['email'=>'Abdurraufjih@gmail.com','number'=>'Jalgaon','name'=>'mh-faizpur'],
['email'=>'abdusalehmazumdar32@gmail.com','number'=>'Hailakandi','name'=>'as-nhailakandi'],
['email'=>'abdussamad9401@gmail.com','number'=>'Nalbari','name'=>'an-rampur'],
['email'=>'abidfarooqui9@gmail.com','number'=>'Araria','name'=>'br-rajokhar'],
['email'=>'abrarahmad2658@gmail.com','number'=>'Azamgarh','name'=>'upe-agmohammadpur'],
['email'=>'abrauf8750@gmail.com','number'=>'Hingoli','name'=>'mh-basmath'],
['email'=>'absarfalahi1984@gmail.com','number'=>'Bhopal City','name'=>'mp-baghdilkusha'],
['email'=>'abuauthif@rediffmail.com','number'=>'Vellore','name'=>'tn-vellore'],
['email'=>'abudhahir61@gmail.com','number'=>'Theni','name'=>'tn-theni'],
['email'=>'abuhamida80@gmail.com','number'=>'D.K.','name'=>'ka-uppinangady'],
['email'=>'abusumera@gmail.com','number'=>'Tirupattur','name'=>'tn-vaniyambadi'],
['email'=>'adbussattar@gmail.com','number'=>'Barpeta','name'=>'an-kadong'],
['email'=>'adilshaik8116@gmail.com','number'=>'Eluru','name'=>'ap-jngrdygdm'],
['email'=>'aejazrafique@gmail.com','number'=>'Amravati','name'=>'mh-anjangaonsurji'],
['email'=>'afsarahmad9794@gmail.com','number'=>'Unnao','name'=>'upe-aasat'],
['email'=>'afsarch@gmail.com','number'=>'Kodagu','name'=>'ka-madikeri'],
['email'=>'afsarmasood65@gmail.com','number'=>'Shahdara','name'=>'dl-seemapuri'],
['email'=>'Afserbeg0512@gmail.com','number'=>'Khargone','name'=>'mp-khargone'],
['email'=>'aftabahmad13.1970@gmail.com','number'=>'Sitapur','name'=>'upe-mahmoodabad'],
['email'=>'afzal.hasan7777@gmail.com','number'=>'Ghazipur','name'=>'upe-sammanpur'],
['email'=>'afzalomar251@gmail.com','number'=>'Mahoba','name'=>'upe-mahoba'],
['email'=>'ahai74651@gmail.com','number'=>'Kanpur City','name'=>'upe-babupurwa'],
['email'=>'ahamid@gmail.com','number'=>'Buldhana','name'=>'mh-dhamangaonbadhe'],
['email'=>'ahaque1979@gmail.com','number'=>'Vaishali','name'=>'br-chiknauta'],
['email'=>'ahk9704@gmail.com','number'=>'Basti','name'=>'upe-basti'],
['email'=>'ahkhancwa@rediffmail.com','number'=>'Chhindwara','name'=>'mp-chhindwara'],
['email'=>'ahmadalifalahi121336@gmail.com','number'=>'Siddharth Nagar','name'=>'upe-khoriya'],
['email'=>'ahmadkaleem45@gmail.com','number'=>'Azamgarh','name'=>'upe-azamgarhcity'],
['email'=>'ahmadowais0021@gmail.com','number'=>'Allahabad City','name'=>'upe-naini'],
['email'=>'ahmadrazambm@gmail.com','number'=>'Darbhanga','name'=>'br-darbhanga'],
['email'=>'ahmadsameerair@gmail.com','number'=>'Gorakhpur City','name'=>'upe-gorakhpurs'],
['email'=>'ahmedfarooque@gmail.com','number'=>'Kolkata Metro','name'=>'wb-taltala'],
['email'=>'ahmedkhan.aziz@gmail.com','number'=>'Bareilly','name'=>'upw-bareillye'],
['email'=>'ahqamer83xt@gmail.com','number'=>'Nizamabad (Urban)','name'=>'ts-ahmadibazar'],
['email'=>'ahs.sio@gmail.com','number'=>'Surat','name'=>'gj-surat'],
['email'=>'ahsantarique56@gmail.com','number'=>'Gaya','name'=>'br-khandail'],
['email'=>'aijazqureshi1712@gmail.com','number'=>'Khandwa','name'=>'mp-khandwa'],
['email'=>'aiyyubmemonaiyyub@gmail.com','number'=>'Sabarkantha','name'=>'gj-himatnagar'],
['email'=>'ajazplaystore17@gmail.com','number'=>'Santkabir Nagar','name'=>'upe-semariyawan'],
['email'=>'ajmalkhadeer@gmail.com','number'=>'Kolar','name'=>'ka-kolar'],
['email'=>'akadirsanthel@gmail.com','number'=>'','name'=>'mn-st'],
['email'=>'Akbarkhan7887@gmail.com','number'=>'North Goa','name'=>'ga-ponda'],
['email'=>'akbarmyh@gmail.com','number'=>'Parbhani','name'=>'mh-parbhani'],
['email'=>'akhan476175@gmail.com','number'=>'Meerut','name'=>'upw-lalyana'],
['email'=>'akhtar.arafat786@gmail.com','number'=>'West Champaran','name'=>'br-betia'],
['email'=>'akhtarfalahi136@gmail.com','number'=>'Siddharth Nagar','name'=>'upe-nogarh'],
['email'=>'akhtarmohkhan@gmail.com','number'=>'Bhopal','name'=>'mp-berasia'],
['email'=>'akm1246@gmail.com','number'=>'Trichy','name'=>'tn-trichy'],
['email'=>'aknadwi@yahoo.in','number'=>'Rampur','name'=>'upw-rampur'],
['email'=>'aknifal20@gmail.com','number'=>'Udupi','name'=>'ka-hoode'],
['email'=>'aksed@gmail.com','number'=>'Bongaigaon','name'=>'an-salabila'],
['email'=>'aktarikhatun631@gmail.com','number'=>'Murshidabad','name'=>'wb-saidapur'],
['email'=>'alammdmushtaque786@gmail.com','number'=>'Bokaro','name'=>'jh-bokaro'],
['email'=>'alauddeenhamza786@gmail.com','number'=>'Barabanki','name'=>'upe-bbfatehpur'],
['email'=>'albadarbookcentre@gmail.com','number'=>'Azamgarh','name'=>'upe-saraimeer'],
['email'=>'aleemahmad0682@gmail.com','number'=>'Bahraich','name'=>'upe-jarwal'],
['email'=>'aleemuddinahmed742010@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-shaikpet'],
['email'=>'aliahmed7213@gmail.com','number'=>'Etawah','name'=>'upw-jaswantnagar'],
['email'=>'aliasim7252@gmail.com','number'=>'Sehore','name'=>'mp-ashta'],
['email'=>'aliffaihemi@gmail.com','number'=>'Sultanpur','name'=>'upe-sultanpur'],
['email'=>'aliibrahim121975@gmail.com','number'=>'Darrang','name'=>'an-dhula'],
['email'=>'aliimmsiddique@gmail.com','number'=>'Palamu','name'=>'jh-daltonganj'],
['email'=>'alimeharban180@gmail.com','number'=>'Kapurthala','name'=>'pb-kapurthala'],
['email'=>'alimubarak58651@gmail.com','number'=>'Mirzapur','name'=>'upe-mirzapur'],
['email'=>'alimuddinmd047@gmail.com','number'=>'Pakur','name'=>'jh-narottampur'],
['email'=>'altafshahgoa@gmail.com','number'=>'South Goa','name'=>'ga-vascodagama'],
['email'=>'amanullakhantke@gmail.com','number'=>'D.K.','name'=>'ka-b.croad'],
['email'=>'amiriqbal9622@gmail.com','number'=>'Sitamarhi','name'=>'br-sitamarhi'],
['email'=>'amjadhussain208@gmail.com','number'=>'Yadgir','name'=>'ka-shahpur'],
['email'=>'amjadp101@gmail.com','number'=>'Beed','name'=>'mh-majalgaon'],
['email'=>'amjadsadiq077@gmail.com','number'=>'Hapur','name'=>'upw-hapur'],
['email'=>'amusavvir969@gmail.com','number'=>'Konaseema','name'=>'ap-mandapeta'],
['email'=>'anaazhar@gmail.com','number'=>'Mumbai Metro','name'=>'mh-nallasoparaw'],
['email'=>'aneesonly@gmail.com','number'=>'South Goa','name'=>'ga-margao'],
['email'=>'anoormansuri@gmail.com','number'=>'Ujjain','name'=>'mp-nagda'],
['email'=>'Ansari.ra@gmail.com','number'=>'Bilaspur','name'=>'cg-bilaspur'],
['email'=>'Ansari.zubairm@gmail.com','number'=>'Chitradurga','name'=>'ka-chitradurga'],
['email'=>'ansarimujahidali811@gmail.com','number'=>'Budaun','name'=>'upw-jagat'],
['email'=>'ansarjihrjy@gmail.com','number'=>'East Godavaari','name'=>'ap-Rjmndry'],
['email'=>'Anvarmalik0987@gmail.com','number'=>'Valsad','name'=>'gj-vapi'],
['email'=>'anwarali.jih@gmail.com','number'=>'Udupi','name'=>'ka-kapu'],
['email'=>'anwarindori123456@gmail.com','number'=>'Baroda','name'=>'gj-baroda'],
['email'=>'apmpeer81@gmai.com','number'=>'Coimbatore City','name'=>'tn-coimbatorec'],
['email'=>'aqueelsiddiqui2017@gmail.com','number'=>'Balaghat','name'=>'mp-balaghat'],
['email'=>'aquilahmed51@gmail.com','number'=>'Nuh','name'=>'hr-nuh'],
['email'=>'arasheedmngl@gmail.com','number'=>'Guntur','name'=>'ap-mangalgiri'],
['email'=>'arasidshah@gmail.com','number'=>'Gonda','name'=>'upe-islampur'],
['email'=>'arcbelagali9@gmail.com','number'=>'Dharwad','name'=>'ka-hubli'],
['email'=>'arfafarid@gmail.com','number'=>'Thane','name'=>'mh-kalyan'],
['email'=>'arifalahi@gmail.com','number'=>'Chandauli','name'=>'upe-katesar'],
['email'=>'armaan318484@gmail.com','number'=>'North Goa','name'=>'ga-panaji'],
['email'=>'arshdoct@gmail.com','number'=>'Sri Satya Sai','name'=>'ap-kadiri'],
['email'=>'asadullah30@gmail.com','number'=>'Tumkur','name'=>'ka-tumkur'],
['email'=>'asd@as.in','number'=>'Howrah','name'=>'wb-mejuti'],
['email'=>'asgharali555shaikh@gmail.com','number'=>'Azamgarh','name'=>'upe-chandpatti'],
['email'=>'ashabulyameen1955@gmail.com','number'=>'Indore City','name'=>'mp-nayapura'],
['email'=>'asharhamidilkn@gmail.com','number'=>'Begusarai','name'=>'br-lakhminia'],
['email'=>'ashdwh@gmail.com','number'=>'Pune City','name'=>'mh-punes'],
['email'=>'ashfaqlahuti@gmail.com','number'=>'Sangareddy','name'=>'ts-sadashivpet'],
['email'=>'Asifmohiuddin@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-bahadurpura'],
['email'=>'asifmudagal@gmail.com','number'=>'Bagalkot','name'=>'ka-bagalkot'],
['email'=>'asifsiddique706@gmail.com','number'=>'Lucknow City','name'=>'upe-campbellroad'],
['email'=>'asimuddin.a@gmail.com','number'=>'Raichur','name'=>'ka-raichur'],
['email'=>'aslam.carepharma@gmail.com','number'=>'Mysore','name'=>'ka-mysore'],
['email'=>'aslambinmohsin@gmail.com','number'=>'Nizamabad (Rural)','name'=>'ts-aarmoor'],
['email'=>'asrafansari999183@gmail.com','number'=>'Panipat','name'=>'hr-panipat'],
['email'=>'atharabdullah093@gmail.com','number'=>'Sheopur','name'=>'mp-baroda'],
['email'=>'atikurrahman6084@gmail.com','number'=>'Balia','name'=>'upe-barwan'],
['email'=>'atiqurrahmanislahi@gmail.com','number'=>'Azamgarh','name'=>'upe-badharia'],
['email'=>'ayazanwar98@gmail.com','number'=>'Supaul','name'=>'br-balbhadarpur'],
['email'=>'ayubkhanperfect@gmail.com','number'=>'Davangere','name'=>'ka-davangere'],
['email'=>'azazahmadstar@gmail.com','number'=>'Durg','name'=>'cg-bhilainagar'],
['email'=>'azeemfalahi@gmail.com','number'=>'Adilabad','name'=>'ts-adilabad'],
['email'=>'azharabdulla2@gmail.com','number'=>'Moradabad','name'=>'upw-bilari'],
['email'=>'azizfalahi12@gmail.com','number'=>'Ranchi City','name'=>'jh-khijurtola'],
['email'=>'azizurrahman4226@gmail.com','number'=>'Unakoti','name'=>'as-baburbazar'],
['email'=>'azmatalam408@gmail.com','number'=>'Dhanbad City','name'=>'jh-jharia'],
['email'=>'azmathpasha@gmail.com','number'=>'Alluri Sitarama Raju','name'=>'ap-yetapaka'],
['email'=>'azmathudai84@gmail.com','number'=>'Mumbai Metro','name'=>'mh-malad'],
['email'=>'baigm870@gmail.com','number'=>'Nandyal','name'=>'ap-banaganapalli'],
['email'=>'bajinrt@gmail.com','number'=>'Visakhapatnam','name'=>'ap-visakhapatnamw'],
['email'=>'bariksa@yahoo.com','number'=>'Greater Hyderabad','name'=>'ts-charminar'],
['email'=>'barque.rashid@gmail.com','number'=>'East Champaran','name'=>'br-motihari'],
['email'=>'basheerahahmed@gmail.com','number'=>'Madurai','name'=>'tn-madurai'],
['email'=>'bdlari123@gmail.com','number'=>'Deoria','name'=>'upe-lar'],
['email'=>'biharjih@gmail.com','number'=>'Araria','name'=>'br-jogbani'],
['email'=>'blueocean.nets@gmail.com','number'=>'Shimoga','name'=>'ka-shimoga'],
['email'=>'bokharisio@gmail.com','number'=>'Murshidabad','name'=>'wb-aurangabad'],
['email'=>'bphjalapur@gmail.com','number'=>'Cachar','name'=>'as-jalalpur'],
['email'=>'bvmmadharsha@gmail.com','number'=>'Coimbatore City','name'=>'tn-coimbatores'],
['email'=>'c@23gmail.com','number'=>'Uttar Dinajpur','name'=>'wb-kapasia'],
['email'=>'c@8gmail.com','number'=>'Guntur','name'=>'ap-gunturcity'],
['email'=>'c21@gmail.com','number'=>'Cachar','name'=>'as-gumra'],
['email'=>'c22@gmail.com','number'=>'Birbhum','name'=>'wb-ekdala'],
['email'=>'c23@gmail.com','number'=>'North 24 Parganas','name'=>'wb-bagjola'],
['email'=>'Chandanna1973@gmail.com','number'=>'Kurnool','name'=>'ap-yemmiganur'],
['email'=>'chandbabushaik@gmail.com','number'=>'Sri Balaji Tirupati','name'=>'ap-kotavkd'],
['email'=>'citymediaudt@gmail.com','number'=>'Tiruppur','name'=>'tn-udumalpet'],
['email'=>'connectnawaz@gmail.com','number'=>'Anantapur','name'=>'ap-anantapur'],
['email'=>'d.m.shareef2@gmail.com','number'=>'Ysr Kadapa','name'=>'ap-proddatur'],
['email'=>'darsequranbysalahuddin@gmail.com','number'=>'Kanpur City','name'=>'upe-chamanganj'],
['email'=>'darsgahislamimaroofpur@gmail.com','number'=>'Jaunpur','name'=>'upe-karakat'],
['email'=>'deekeyibrahim1@gmail.com','number'=>'D.K.','name'=>'ka-kalladka'],
['email'=>'dfe@gmail.com','number'=>'Amravati','name'=>'mh-achalpur'],
['email'=>'dfsasd@gmail.com','number'=>'Akola','name'=>'mh-balapur'],
['email'=>'dilwar@gmail.com','number'=>'Sonitpur','name'=>'an-bhojkhuwa'],
['email'=>'dr_imran_ulhaque@hotmail.com','number'=>'Patna City','name'=>'br-patnaw'],
['email'=>'dr.aejazumaransari@gmail.com','number'=>'Raibareli','name'=>'upe-salon'],
['email'=>'dr.mnhaque1935@gmail.com','number'=>'Ghazipur','name'=>'upe-fakhanpura'],
['email'=>'dr.uroojakola@gmail.com','number'=>'Akola','name'=>'mh-akola'],
['email'=>'draafarooqui@gmail.com','number'=>'Hazaribagh','name'=>'jh-hazaribagh'],
['email'=>'dralamgeer902@gmail.com','number'=>'Meerut','name'=>'upw-radhna'],
['email'=>'drifti.sio@gmail.com','number'=>'Aravali','name'=>'gj-modasa'],
['email'=>'drismail955@gmail.com','number'=>'Sholapur','name'=>'mh-sholapur'],
['email'=>'drmansaransar@gmail.com','number'=>'Buldhana','name'=>'mh-shegaon'],
['email'=>'drrahmani.gzb@gmail.com','number'=>'Ghaziabad','name'=>'upw-ghaziabadcity'],
['email'=>'drwaqifhusain@gmail.com','number'=>'Agra','name'=>'upw-agracity'],
['email'=>'er.mujahidkhan@gmail.com','number'=>'Bareilly','name'=>'upw-thiryanijabatkhan'],
['email'=>'expansion.jihmarkaz@gmail.com','number'=>'South','name'=>'an-wg'],
['email'=>'f1980ahmad@gmail.com','number'=>'West Champaran','name'=>'br-ramnagar'],
['email'=>'faialsaud239@gmail.com','number'=>'Balrampur','name'=>'upe-dhankharpur'],
['email'=>'faiyaz@gmail.com','number'=>'Kamrup Metro','name'=>'an-hedayetpur'],
['email'=>'faizanhamad786@gmail.com','number'=>'Barabanki','name'=>'upe-mohammadpur'],
['email'=>'fakp2006@gmail.com','number'=>'Shahjahanpur','name'=>'upw-shahjahanpur'],
['email'=>'falahisaquib@gmail.com','number'=>'Budaun','name'=>'upw-bilhari'],
['email'=>'farazkhan23078@gmail.com','number'=>'Allahabad City','name'=>'upe-kareli'],
['email'=>'fareedshaik953@gmail.com','number'=>'West Godavari','name'=>'ap-koyyalagudem'],
['email'=>'farhaan505@gmail.com','number'=>'West Godavari','name'=>'ap-bhimavaram'],
['email'=>'farhanmk@hotmail.com','number'=>'Greater Hyderabad','name'=>'ts-nampalli'],
['email'=>'farooq011@gmail.com','number'=>'East Godavaari','name'=>'ap-goplprm'],
['email'=>'farrukhsheakh@gmail.com','number'=>'Jaunpur','name'=>'upe-jaunpurcity'],
['email'=>'fayazmd040@gmail.com','number'=>'Viqarabad','name'=>'ts-viqarabad'],
['email'=>'fislamfalahi@gmail.com','number'=>'Lucknow Dihaat','name'=>'upe-malihabad'],
['email'=>'fmd446936@gmail.com','number'=>'Ntr','name'=>'ap-kondapalli'],
['email'=>'Galibhssan@gmail.com','number'=>'Saharanpur','name'=>'upw-budhakhera'],
['email'=>'gayasuddenshaikh82@gmail.com','number'=>'Ahmedabad City','name'=>'gj-narodapatiya'],
['email'=>'gburansha@gmail.com','number'=>'Chennai Metro','name'=>'tn-annanagar'],
['email'=>'gfy@gmail.com','number'=>'Amravati','name'=>'mh-amravati'],
['email'=>'ghayasanwark746@gmail.com','number'=>'Jaipur City','name'=>'rj-sanganer'],
['email'=>'ghazalarisha2@gmail.com','number'=>'Bhagalpur','name'=>'br-bhagalpur'],
['email'=>'ghufranahmad44223@gmail.com','number'=>'Unnao','name'=>'upe-bangarmau'],
['email'=>'gilman331@gmail.com','number'=>'Madhubani','name'=>'br-bardaha'],
['email'=>'Gkhan7031@gmail.com','number'=>'Durg','name'=>'cg-durg'],
['email'=>'gm8297227@gmail.com','number'=>'Satna','name'=>'mp-satna'],
['email'=>'gmkhayyat@gmail.com','number'=>'Yadgir','name'=>'ka-yadgir'],
['email'=>'goodlmp97@gmail.com','number'=>'Lakhimpur','name'=>'upe-lakhimpur'],
['email'=>'gulfadstpg@gmail.com','number'=>'West Godavari','name'=>'ap-tadepallegudem'],
['email'=>'gulzarahmad55954@gmail.com','number'=>'Hardoi','name'=>'upw-shahbad'],
['email'=>'h.ahmad63@gmail.com','number'=>'Lucknow City','name'=>'upe-indiranagar'],
['email'=>'ha4156502@gmail.com','number'=>'Lucknow City','name'=>'upe-sherwaninagar'],
['email'=>'habeebmd25@gmail.com','number'=>'Vijayanagaram','name'=>'ap-vijayangrm'],
['email'=>'hadis03031952@gmail.com','number'=>'Dhanbad City','name'=>'jh-dhanbad'],
['email'=>'hafeezarts@gmail.com','number'=>'Shimoga','name'=>'ka-bhadravathi'],
['email'=>'hafizmuhammadamin62@gmail.com','number'=>'Unnao','name'=>'upe-newtani'],
['email'=>'Hafizmujahidqureshi313@gmail.com','number'=>'Buldhana','name'=>'mh-buldhana'],
['email'=>'haidarali90946@gmail.com','number'=>'Bajali','name'=>'an-majgaon'],
['email'=>'haijaveed@gmail.com','number'=>'Peddapalli','name'=>'ts-peddapalli'],
['email'=>'hakeemmohdriyaz@gmail.com','number'=>'Unnao','name'=>'upe-madaarnagar'],
['email'=>'hakramul67@gmail.com','number'=>'Gonda','name'=>'upe-gurrah'],
['email'=>'Hameed17452@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-kapra'],
['email'=>'hameedaliimami@gmail.com','number'=>'Narayanpet','name'=>'ts-gundmal'],
['email'=>'hameedd99@gmail.com','number'=>'Santkabir Nagar','name'=>'upe-khalilabad'],
['email'=>'Hamid316075@gmail.com','number'=>'Shajapur','name'=>'mp-maksi'],
['email'=>'hamidhasan4493@gmail.com','number'=>'Nalanda','name'=>'br-islampur'],
['email'=>'hanif@gmail.com','number'=>'Hojai','name'=>'an-rahmatnagar'],
['email'=>'hanzala9031@gmail.com','number'=>'Hazaribagh','name'=>'jh-banha'],
['email'=>'haroonmohd301@gmail.com','number'=>'Hapur','name'=>'upw-bajherakalan'],
['email'=>'hasanulbannaalirfan@gmail.com','number'=>'Bijnor','name'=>'upw-basta'],
['email'=>'hashmathsio@gmail.com','number'=>'Sangareddy','name'=>'ts-sangareddy'],
['email'=>'hashsham.tarique58@gmail.com','number'=>'Muzaffarpur','name'=>'br-muzaffarpur'],
['email'=>'hmnabisambhal@gmail.com','number'=>'Sambhal','name'=>'upw-saraitareen'],
['email'=>'husnaharoon2005@gmail.com','number'=>'Karur','name'=>'tn-karur'],
['email'=>'hussain.advt@gmail.com','number'=>'Vijayawada City (Ntr)','name'=>'ap-VJe'],
['email'=>'hussainmeerjapur@gmail.com','number'=>'West Godavari','name'=>'ap-meerzapur'],
['email'=>'ibrahimcocoa123@gmail.com','number'=>'Eluru','name'=>'ap-eluru'],
['email'=>'iftisambhal4@gmail.com','number'=>'Sambhal','name'=>'upw-sambhal'],
['email'=>'Ik9425175473@gmai.com','number'=>'Seoni','name'=>'mp-seoni'],
['email'=>'ikram121963@gmail.com','number'=>'Ahmedabad City','name'=>'gj-ahmedabadc'],
['email'=>'ilahianwar66@gmail.com','number'=>'Bhopal City','name'=>'mp-ibraheempura'],
['email'=>'Iliassharief90436@gmail.com','number'=>'East Godavaari','name'=>'ap-nallajarla'],
['email'=>'iliyasmsc117@gmail.com','number'=>'Krishna','name'=>'ap-vuyyuru'],
['email'=>'impex7766@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-yakutpura'],
['email'=>'imraanehsaan@gmail.com','number'=>'Udupi','name'=>'ka-malpe'],
['email'=>'Imrafikahmed@gmail.com','number'=>'Palwal','name'=>'hr-palwal'],
['email'=>'imranbagdal@gmail.com','number'=>'Bidar','name'=>'ka-bagdal'],
['email'=>'imransheikh886@gmail.com','number'=>'Thane','name'=>'mh-shahpur'],
['email'=>'imtiyaznakade2@gmail.com','number'=>'Ratnagiri','name'=>'mh-ratnagiri'],
['email'=>'imumtazjih@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-amberpet'],
['email'=>'intikhab.falahi@gmail.com','number'=>'Madhubani','name'=>'br-khajuri'],
['email'=>'iqbalahmedqsm@gmail.com','number'=>'Bangalore Metro','name'=>'ka-btm'],
['email'=>'iqbalaltamash024@gmail.com','number'=>'Lucknow Dihaat','name'=>'upe-rahimabad'],
['email'=>'iqbalgodiyal@gmail.com','number'=>'Bangalore Metro','name'=>'ka-mysoreroad'],
['email'=>'iqhulikatti.1786@gmail.com','number'=>'Bijapur','name'=>'ka-bijapur'],
['email'=>'iqrar@gmail.com','number'=>'Jabalpur City','name'=>'mp-jabalpurc'],
['email'=>'irfankhan2k7@gmail.com','number'=>'South East','name'=>'dl-abulfazaleN'],
['email'=>'irkhaavc741@gmail.com','number'=>'Balrampur','name'=>'upe-sadullahnagar'],
['email'=>'irs003@hotmail.com','number'=>'Madhubani','name'=>'br-malmal'],
['email'=>'irs003@yahoo.com','number'=>'Buxar','name'=>'br-dumraon'],
['email'=>'irshadmohammad54@gmail.com','number'=>'Malerkotla','name'=>'pb-malerkotla'],
['email'=>'isaqkp@yahoo.com','number'=>'D.K.','name'=>'ka-mangalore'],
['email'=>'ismailharis017@gmail.com','number'=>'Balrampur','name'=>'upe-balrampurcity'],
['email'=>'ismailshariffmd06@gmail.com','number'=>'West Godavari','name'=>'ap-venkatapuram'],
['email'=>'ismailsk9420824445@gmail.com','number'=>'Jalna','name'=>'mh-jalna'],
['email'=>'israilansari121635@gmail.com','number'=>'Barabanki','name'=>'upe-barabanki'],
['email'=>'issaqitc@gmail.com','number'=>'Kothagudem','name'=>'ts-sarapaka'],
['email'=>'jaffarulla26@gmail.com','number'=>'Trichy','name'=>'tn-manapparai'],
['email'=>'jahangeersharief@gmail.com','number'=>'Kothagudem','name'=>'ts-kothagudem'],
['email'=>'Jakir7503@gmail.com','number'=>'Faridabad','name'=>'hr-vinaynagar'],
['email'=>'Jamaateislamiindervelly@gmail.com','number'=>'Adilabad','name'=>'ts-indervelli'],
['email'=>'Jameel0ahmed1975@gmail.Com','number'=>'Burhanpur','name'=>'mp-burhanpur'],
['email'=>'jameelahmadadab@gmail.com','number'=>'Rampur','name'=>'upw-kashipuranga'],
['email'=>'jameelahmadfalahi@gmail.com','number'=>'Azamgarh','name'=>'upe-naseerpur'],
['email'=>'jameelahmed7999927317@gmail.com','number'=>'Jabalpur City','name'=>'mp-jabalpure'],
['email'=>'Jameelparwaz331@gmai.com','number'=>'Samastipur','name'=>'br-tajpur'],
['email'=>'jami.fa@gmail.com','number'=>'Bhopal City','name'=>'mp-shahjahanabad'],
['email'=>'Jamiatulsadeqat@gmail.com','number'=>'Gaya','name'=>'br-kothi'],
['email'=>'jasim4124@gmail.com','number'=>'North Tripura','name'=>'as-dharmanagar'],
['email'=>'javedali424@gmail.com','number'=>'Beed','name'=>'mh-beed'],
['email'=>'javedasila@gmail.com','number'=>'Central Delhi','name'=>'dl-jamamasjid'],
['email'=>'jawaidakhterjp@gmail.com','number'=>'Nawada','name'=>'br-nawada'],
['email'=>'jeelani.md575@gmail.com','number'=>'Nalgonda','name'=>'ts-miryalguda'],
['email'=>'jih.sind@gmail.com','number'=>'Raichur','name'=>'ka-sindhanur'],
['email'=>'jih100973@jihwb.org','number'=>'South 24 Parganas','name'=>'wb-kashirampur'],
['email'=>'jih4chand@gmail.com','number'=>'Kurnool','name'=>'ap-kurnoolS'],
['email'=>'jihbagewadi@gmail.com','number'=>'Bijapur','name'=>'ka-basavanabagewadi'],
['email'=>'jihglb@gmail.com','number'=>'Gulbarga','name'=>'ka-gulbarga'],
['email'=>'jihgonda@gmail.com','number'=>'Gonda','name'=>'upe-gondacity'],
['email'=>'jihhanamasagar@gmail.com','number'=>'Koppal','name'=>'ka-hanumsagar'],
['email'=>'Jihjpt@gmail.com','number'=>'Medak','name'=>'ts-jogipet'],
['email'=>'jihkerebelchi12@gmail.com','number'=>'Davangere','name'=>'ka-kerebilchi'],
['email'=>'Jihkmpt@gmail.com','number'=>'Nagpur City','name'=>'mh-kampti'],
['email'=>'Jihmapusa@gmail.com','number'=>'North Goa','name'=>'ga-mapusa'],
['email'=>'jihmbnr@gmail.com','number'=>'Mahbubnagar','name'=>'ts-mahbubnagar'],
['email'=>'jihmillatnagar@gmail.com','number'=>'Mumbai Metro','name'=>'mh-millatnagar'],
['email'=>'jihpmarru@gmail.com','number'=>'Krishna','name'=>'ap-pamaru'],
['email'=>'jihrajura@gmail.com','number'=>'Chandrapur','name'=>'mh-rajura'],
['email'=>'jmansari261946@gmail.com','number'=>'Jabalpur City','name'=>'mp-jabalpurw'],
['email'=>'jmo9651@gmail.com','number'=>'Amravati','name'=>'mh-chikhaldara'],
['email'=>'johirulislam114@gmail.com','number'=>'Darrang','name'=>'an-mangaldoi'],
['email'=>'jokhanansari7@gmail.com','number'=>'Chandauli','name'=>'upe-syedraja'],
['email'=>'junaidvision@gmail.com','number'=>'Aligarh','name'=>'upw-amu'],
['email'=>'k.hafeez.khan.zm@gmail.com','number'=>'Chittoor Dist','name'=>'ap-punganur'],
['email'=>'ka9593937@gmail.com','number'=>'Bahraich','name'=>'upe-bahraich'],
['email'=>'kafeeljih@gmail.com','number'=>'Bijnor','name'=>'upw-najibabad'],
['email'=>'kahamed.jih@gmail.com','number'=>'North 24 Parganas','name'=>'wb-raigachi'],
['email'=>'Kaifruman801@gmail.com','number'=>'Korba','name'=>'cg-korba'],
['email'=>'kalim.madina@gmail.com','number'=>'Ahmedabad City','name'=>'gj-ahmedabadw'],
['email'=>'kalimqureshi976@gmail.com','number'=>'Dewas','name'=>'mp-dewas'],
['email'=>'Kamarrijwan2029@gmail.com','number'=>'Satna','name'=>'mp-maihar'],
['email'=>'kamranextrovert00@gmail.com','number'=>'Gwalior','name'=>'mp-gwalior'],
['email'=>'kareem1072@gmail.com','number'=>'Akola','name'=>'mh-patur'],
['email'=>'kasyedibrahim@gmail.com','number'=>'Coimbatore City','name'=>'tn-coimbatoren'],
['email'=>'khajaahamad911@gmail.com','number'=>'Spsr Nellore','name'=>'ap-kaligiri'],
['email'=>'Khaleelullahbapatla@gmail.com','number'=>'Bapatla','name'=>'ap-bapatla'],
['email'=>'khalid523.1960@gmail.com','number'=>'Karimganj','name'=>'as-karimganj'],
['email'=>'khalid85@gmail.com','number'=>'Ysr Kadapa','name'=>'ap-kadapa'],
['email'=>'khalidanwar961@gmail.com','number'=>'Nalanda','name'=>'br-biharsharif'],
['email'=>'khalidsajjad3@gmail.com','number'=>'Ranchi City','name'=>'jh-bariatu'],
['email'=>'Khanabdullah10444@gmail.com','number'=>'Nanded','name'=>'mh-ardhapur'],
['email'=>'khanmohdshakir@gmail.com','number'=>'Mau','name'=>'upe-maucity'],
['email'=>'khanziankhan855@gmail.com','number'=>'Unnao','name'=>'upe-jhalotar'],
['email'=>'khatikjamil111@gmail.com','number'=>'Nasik','name'=>'mh-nasik'],
['email'=>'khonpajih@gmail.com','number'=>'Kaushambi','name'=>'upe-khonpa'],
['email'=>'khosburali@jihwb.org','number'=>'Malda','name'=>'wb-tofi'],
['email'=>'khursheedalamjih17@gmail.com','number'=>'Shahdara','name'=>'dl-loni'],
['email'=>'khyder75@yahoo.com','number'=>'D.K.','name'=>'ka-vitla'],
['email'=>'krk@gmail.com','number'=>'Buldana','name'=>'mh-badnerabholji'],
['email'=>'liyakhatalibaigbaig@gmail.com','number'=>'Tumkur','name'=>'ka-tiptur'],
['email'=>'liyaqatali118@gmail.com','number'=>'Buldhana','name'=>'mh-chikhli'],
['email'=>'luthfullah@gmail.com','number'=>'Chennai Metro','name'=>'tn-perambur'],
['email'=>'m.a.abdulrafay2012@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-rajendernagar'],
['email'=>'m.muneer119@gmail.com','number'=>'Barabanki','name'=>'upe-husainmau'],
['email'=>'m22@gmail.com','number'=>'Markaz','name'=>'markaz-testunit'],
['email'=>'m83@gmail.com','number'=>'Akola','name'=>'mh-hathroon'],
['email'=>'m88@gmail.com','number'=>'Trichy','name'=>'tn-thuvarankurichi'],
['email'=>'ma8729362@gmail.com','number'=>'Siddharth Nagar','name'=>'upe-mohammednagar'],
['email'=>'maaribmaab331267@gmail.com','number'=>'Azamgarh','name'=>'upe-jairajpur'],
['email'=>'mahaboob.mba@gmail.com','number'=>'Spsr Nellore','name'=>'ap-kavali'],
['email'=>'main9917uddin@gmail.com','number'=>'Bulandshahar','name'=>'upw-gulaothi'],
['email'=>'mainuddinkampli70@gmail.com','number'=>'Bagalkot','name'=>'ka-badami'],
['email'=>'malambihar@gmail.com','number'=>'Araria','name'=>'br-araria'],
['email'=>'maqasonakar@gmail.com','number'=>'Sahibganj','name'=>'jh-gumani'],
['email'=>'marjanbiswas@gmail.com','number'=>'Murshidabad','name'=>'wb-sahabajpur'],
['email'=>'Masood314@gmail.com','number'=>'Shahdara','name'=>'dl-jafarabad'],
['email'=>'masood4u99@gmail.com','number'=>'K.B.Asifabad','name'=>'ts-kaghaznagar'],
['email'=>'masroormehar@gmail.com','number'=>'Gaya','name'=>'br-gaya'],
['email'=>'masroorms786@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-wadiehuda'],
['email'=>'matloobmgs@gmail.com','number'=>'Ranchi City','name'=>'jh-ranchicity'],
['email'=>'mayyub116@gmail.com','number'=>'Pilibhit','name'=>'upw-daang'],
['email'=>'mazharhusaim160@gmail.com','number'=>'Moradabad','name'=>'upw-milakpallupura'],
['email'=>'md_shahzad64@yahoo.com','number'=>'Patna City','name'=>'br-patnac'],
['email'=>'md.abdullah.sio@gmail.com','number'=>'Annamayya','name'=>'ap-grmknda'],
['email'=>'md.dadashar1623@gmail.com','number'=>'East Godavaari','name'=>'ap-kadiem'],
['email'=>'md7657563@gmail.com','number'=>'Ranchi','name'=>'jh-chakla'],
['email'=>'md9132349@gmail.com','number'=>'Buldana','name'=>'mh-mehkar'],
['email'=>'mdanwarbaig123@gmail.com','number'=>'Spsr Nellore','name'=>'ap-nellore'],
['email'=>'mdasifahmed777@gmail.com','number'=>'Sangareddy','name'=>'ts-narayankhed'],
['email'=>'mdaslam.j@gmail.com','number'=>'Bidar','name'=>'ka-basavakalyan'],
['email'=>'mdfarooquebgp16@gmail.com','number'=>'Araria','name'=>'br-dehti'],
['email'=>'mdfazil6797@gmail.com','number'=>'Medak','name'=>'ts-medak'],
['email'=>'mdiftekharahmed57@gmail.com','number'=>'Bidar','name'=>'ka-humnabad'],
['email'=>'mdiqbal47351@gmail.com','number'=>'Hingoli','name'=>'mh-hingoli'],
['email'=>'mdkhurshidalamhjp123@gmail.com','number'=>'Vaishali','name'=>'br-hajipur'],
['email'=>'mdkhusro_pasha@ymail.com','number'=>'Greater Hyderabad','name'=>'ts-nanalnagar'],
['email'=>'mdmugleazamansari@gmail.com','number'=>'Purnea','name'=>'br-sadhweli'],
['email'=>'mdsabb786@gmail.com','number'=>'Sonitpur','name'=>'an-tezpur'],
['email'=>'mdserajddin644wd3@gmail.com','number'=>'Azamgarh','name'=>'upe-zameenrasoolpur'],
['email'=>'mdshakilbihar@gmail.com','number'=>'Banka','name'=>'br-babura'],
['email'=>'mdshoaibalam48@gmail.com','number'=>'West Champaran','name'=>'br-raibarimahua'],
['email'=>'mdshoaibalamnadvi@gmail.com','number'=>'Ranchi','name'=>'jh-banapiri'],
['email'=>'mdyakubpasha2206@gmail.com','number'=>'Mancheriyal','name'=>'ts-mandamarri'],
['email'=>'mdyusuf160476@gmail.com','number'=>'East Champaran','name'=>'br-siswa'],
['email'=>'mea-mai.39@gmail.com','number'=>'Warangal (Urban)','name'=>'ts-warangalcity'],
['email'=>'meera.sheik509@gmail.com','number'=>'Konaseema','name'=>'ap-raulapalem'],
['email'=>'meetsayeed223.k@gmail.com','number'=>'Bagalkot','name'=>'ka-ilkal'],
['email'=>'meraj.002@gmail.com','number'=>'Unnao','name'=>'upe-unnaocity'],
['email'=>'merajahmed12@gmail.com','number'=>'Karimnagar (Rural)','name'=>'ts-godawarikhani'],
['email'=>'mfarooqazam1234@gmail.com','number'=>'Bijnor','name'=>'upw-dhampur'],
['email'=>'mfazululla@gmail.com','number'=>'Anantapur','name'=>'ap-gooty'],
['email'=>'mgr@jihwb.org','number'=>'Paschim Medinipur','name'=>'wb-kharkusma'],
['email'=>'mgvgetco@yahoo.co.in','number'=>'Mehsana','name'=>'gj-vijapur'],
['email'=>'miansari955@gmail.com','number'=>'Sheopur','name'=>'mp-sheopur'],
['email'=>'mikcuttack@gmail.com','number'=>'','name'=>'od-ctk'],
['email'=>'mimranfalahi@gmail.com','number'=>'Azamgarh','name'=>'upe-jamiatulfalah'],
['email'=>'Mirzafarhat313@gmail.com','number'=>'Jalna','name'=>'mh-ranjani'],
['email'=>'mirzanaved632@gmail.com','number'=>'Yavatmal','name'=>'mh-pusad'],
['email'=>'misbauddinmaster@gmail.com','number'=>'Budaun','name'=>'upw-sedpur'],
['email'=>'miumair@yahoo.com','number'=>'Jagtiyal','name'=>'ts-jagtiyal'],
['email'=>'mmakhter203@gmail.com','number'=>'Rangareddy','name'=>'ts-maheshwaram'],
['email'=>'mmkkhan@hotmail.com','number'=>'Bangalore Metro','name'=>'ka-saraipalya'],
['email'=>'mmohsin67189@gmail.com','number'=>'Azamgarh','name'=>'upe-bilariaganj'],
['email'=>'modrenfurtinurr@gmail.com','number'=>'South 24 Parganas','name'=>'wb-ashuti'],
['email'=>'mohammad69shahid@gmail.com','number'=>'East Singhbhum','name'=>'jh-jamshedpur'],
['email'=>'mohammadiqbal9989@gmail.com','number'=>'Mahaboobabad','name'=>'ts-mahaboobabad'],
['email'=>'mohammadshareeffalahi@gmail.com','number'=>'Siddharth Nagar','name'=>'upe-bansi'],
['email'=>'mohammadtalha473@gmail.com','number'=>'Chitrkoot','name'=>'upe-manikpur'],
['email'=>'Mohammadyusuf8551@gmail.com','number'=>'Bijnor','name'=>'upw-rajakatajpur'],
['email'=>'mohammedabdulaleem99@gmail.com','number'=>'Warangal (Urban)','name'=>'ts-kazipet'],
['email'=>'mohammedmuazzam580@gmail.com','number'=>'Bidar','name'=>'ka-bidar'],
['email'=>'mohammedsiddiqshaik842@gmai.com','number'=>'Spsr Nellore','name'=>'ap-udaygiri'],
['email'=>'mohd.nnazeer@gmail.com','number'=>'Siddharth Nagar','name'=>'upe-dumariyaganj'],
['email'=>'mohd.obaid.mo@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-khairtabad'],
['email'=>'mohdakbar0624@gmail.com','number'=>'Banaras','name'=>'upe-banarascity'],
['email'=>'mohdaslam110410@gmail.com','number'=>'Moradabad','name'=>'upw-kanth'],
['email'=>'Mohdfarooqbij@gmail.com','number'=>'Bijnor','name'=>'upw-bijnorcity'],
['email'=>'mohdghouse.1058@reddifmail.com','number'=>'Nizamabad (Urban)','name'=>'ts-habeebnagar'],
['email'=>'mohdmansoorali7788@gmail.com','number'=>'Narayanpet','name'=>'ts-utkoor'],
['email'=>'mohdrizwan125@gmail.com','number'=>'Narsinghpur','name'=>'mp-rankai'],
['email'=>'mohdsajid_2001@yahoo.com','number'=>'','name'=>'uk-hw'],
['email'=>'mohdshahid78868@gmail.com','number'=>'Muzaffarnagar','name'=>'upw-bahedasadat'],
['email'=>'mohdvakeel789@gmail.com','number'=>'Sitapur','name'=>'upe-tambour'],
['email'=>'mohdyakoobkhan123@gmail.com','number'=>'Balrampur','name'=>'upe-tulsipur'],
['email'=>'mohdyaseen028@gmail.com','number'=>'Shimoga','name'=>'ka-sorab'],
['email'=>'mohdyousuf365365@gmail.com','number'=>'Nalgonda','name'=>'ts-nalgonda'],
['email'=>'mohdyunushkhan@gmail.com','number'=>'Gurugram','name'=>'hr-gurugram'],
['email'=>'mohmmadzafar8888@gmail.com','number'=>'Akola','name'=>'mh-aalegaon'],
['email'=>'Mohmsalim01@gmail.com','number'=>'Mandla','name'=>'mp-mandla'],
['email'=>'moinuddinunnao@gmail.com','number'=>'Unnao','name'=>'upe-miyanganj'],
['email'=>'moizakhtar3589@gmail.com','number'=>'Ranchi City','name'=>'jh-baragain'],
['email'=>'mojubaid97323@gmail.com','number'=>'Allahabad City','name'=>'upe-jhunsi'],
['email'=>'mollahzohurul2014@gmail.com','number'=>'Goalpara','name'=>'an-lakhipur'],
['email'=>'momaaz7388@gmail.com','number'=>'Mau','name'=>'upe-mausultanpur'],
['email'=>'mquasim731@gmail.com','number'=>'Siwan','name'=>'br-barharia'],
['email'=>'msaeedahmed83@gmail.com','number'=>'Gonda','name'=>'upe-haldharmau'],
['email'=>'msaleemmujahidkurawali@gmail.com','number'=>'Mainpuri','name'=>'upw-kurawali'],
['email'=>'msali84@gmail.com','number'=>'Araria','name'=>'br-hayatpur'],
['email'=>'msskanke@gmail.com','number'=>'Ranchi','name'=>'jh-kanke'],
['email'=>'mubarakbagbanbpet@gmail.com','number'=>'Kolar','name'=>'ka-bangarpet'],
['email'=>'mubarakswm@gmail.com','number'=>'Sawai Madhopur','name'=>'rj-sawaimadhopur'],
['email'=>'Mubeenahmedfirdousi@gmail.com','number'=>'Nirmal','name'=>'ts-bhainsa'],
['email'=>'mudassirrana2@gmail.com','number'=>'Meerut','name'=>'upw-sardhana'],
['email'=>'mudassirullahkhanishtiaque@gmail.com','number'=>'Akola','name'=>'mh-barsitakli'],
['email'=>'mujahid8372@gmail.com','number'=>'Nirmal','name'=>'ts-nirmal'],
['email'=>'mujahidnamajkatti@gmail.com','number'=>'Bijapur','name'=>'ka-talikot'],
['email'=>'mukhtar.kotwal@gmail.com','number'=>'Dharwad','name'=>'ka-navalgund'],
['email'=>'mukhtarshab@gmail.com','number'=>'D.K.','name'=>'ka-panemangalore'],
['email'=>'mumtazali3000@gmail.com','number'=>'Jhunjhunu','name'=>'rj-jhunjhunu'],
['email'=>'mumtazsafiurrahman@gmail.com','number'=>'Hazaribagh','name'=>'jh-azadnagarkajri'],
['email'=>'munawwar60@gmail.com','number'=>'Bangalore Metro','name'=>'ka-shivajinagar'],
['email'=>'munir7334@gmail.com','number'=>'Beed','name'=>'mh-ambajogai'],
['email'=>'muqtharwork@gmail.com','number'=>'Kurnool','name'=>'ap-kurnoolN'],
['email'=>'murtuzaak@gmail.com','number'=>'Kothagudem','name'=>'ts-palvancha'],
['email'=>'musharrafjih@gmail.com','number'=>'South East','name'=>'dl-zakirnagar'],
['email'=>'mushtaqathar@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-malakpet'],
['email'=>'mushtaque161961@gmail.com','number'=>'Ahmed Nagar','name'=>'mh-ahmednagar'],
['email'=>'mushtaqueahd@gmail.com','number'=>'Jalgaon','name'=>'mh-jalgaon'],
['email'=>'mushtaqueahm72@gmail.com','number'=>'Siddharth Nagar','name'=>'upe-itwabazar'],
['email'=>'mushtaquehaveripeth@gmail.com','number'=>'Dharwad','name'=>'ka-dharwad'],
['email'=>'mustafa@gmail.com','number'=>'South Salmara','name'=>'an-dewkandiT'],
['email'=>'Mutiurrahmankhan18@gmail.com','number'=>'Budaun','name'=>'upw-uraulia'],
['email'=>'muzakkirrafeeq7@gmail.com','number'=>'Medchal','name'=>'ts-singapurtownship'],
['email'=>'muzamilrafeek@gmail.com','number'=>'Chennai Metro','name'=>'tn-poonamallee'],
['email'=>'mzafardesh@gmail.com','number'=>'Aurangabad City','name'=>'mh-roshangate'],
['email'=>'NA@gmail.com','number'=>'Nashik','name'=>'mh-yeola'],
['email'=>'naansari932@gmail.com','number'=>'','name'=>'uk-rn'],
['email'=>'nabbasi.sarfaraj@gmail.com','number'=>'Budaun','name'=>'upw-budauncity'],
['email'=>'nabidhar@gmail.com','number'=>'Kakinada','name'=>'ap-repur'],
['email'=>'nadim.anw@gmail.com','number'=>'Kolkata Metro','name'=>'wb-shibpur'],
['email'=>'nadviarif@gmail.com','number'=>'South East','name'=>'dl-shaheenbagh'],
['email'=>'najish.farooqui@gmail.com','number'=>'Ujjain','name'=>'mp-mahidpur'],
['email'=>'najmuddinarshad@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-muradnagar'],
['email'=>'naseemkauser50@gmail.com','number'=>'Siwan','name'=>'br-siwan'],
['email'=>'nasersyed1956@gmail.com','number'=>'Chennai Metro','name'=>'tn-royapettah'],
['email'=>'nasimakhtarbhk@gmail.com','number'=>'Ramgarh','name'=>'jh-riverside'],
['email'=>'nasirataurrahman@gmail.com','number'=>'Lucknow City','name'=>'upe-molviganj'],
['email'=>'nasirmbd72@gmail.com','number'=>'Moradabad','name'=>'upw-moradabad'],
['email'=>'navedazhar@gmail.com','number'=>'Sehore','name'=>'mp-sehore'],
['email'=>'nayeemfuad@gmail.com','number'=>'South','name'=>'an-sg'],
['email'=>'Nayeemsiraj6@gmail.com','number'=>'Kolar','name'=>'ka-k.g.f'],
['email'=>'nayeemuddinahmed88@gmail.com','number'=>'Karimnagar (Urban)','name'=>'ts-mukarrampura'],
['email'=>'nazarneyazi@gmail.com','number'=>'Dhanbad','name'=>'jh-kumardhubi'],
['email'=>'nazimghouri88@gmail.com','number'=>'Sangareddy','name'=>'ts-zaheerabad'],
['email'=>'nesarahnad01@gmail.com','number'=>'West Champaran','name'=>'br-mathiamehwal'],
['email'=>'niaurangabad@gmail.com','number'=>'Aurangabad','name'=>'mh-gadhejalgaon'],
['email'=>'niqbalgym602@gmail.com','number'=>'Vellore','name'=>'tn-gudiyatham'],
['email'=>'nisarudupi@gmail.com','number'=>'Udupi','name'=>'ka-udupi'],
['email'=>'nkkhwaja67@gmail.com','number'=>'Nagpur City','name'=>'mh-nagpurw'],
['email'=>'nomanijih@gmail.com','number'=>'Bijnor','name'=>'upw-nagina'],
['email'=>'noor001300@gmail.com','number'=>'Gorakhpur','name'=>'upe-urwabazar'],
['email'=>'nrasheed5504@gmail.com','number'=>'South','name'=>'an-np'],
['email'=>'nrpt93@gmail.com','number'=>'Narayanpet','name'=>'ts-narayanpet'],
['email'=>'oi@qw.ao','number'=>'Aurangabad','name'=>'mh-ajanta'],
['email'=>'orahman367@gmail.com','number'=>'Mumbai Metro','name'=>'mh-govandi'],
['email'=>'Pakiza.dukan@gmail.com','number'=>'Aurangabad','name'=>'mh-fardapur'],
['email'=>'parvez03121968@gmail.com','number'=>'Mumbai Metro','name'=>'mh-sakinaka'],
['email'=>'parvezsachora989898@gmail.com','number'=>'Sabarkantha','name'=>'gj-lambadiya'],
['email'=>'parwaktasayeed@gmail.com','number'=>'Nawada','name'=>'br-hissua'],
['email'=>'Pathanmukhtar4u@gmail.com','number'=>'Jalna','name'=>'mh-badnapur'],
['email'=>'peermdappa@gmail.com','number'=>'Theni','name'=>'tn-cumbum'],
['email'=>'pettrenmastersiddiq@gmail.com','number'=>'Ghaziabad','name'=>'upw-muradnagar'],
['email'=>'pkhasimkhan47@gmail.com','number'=>'Palnadu','name'=>'ap-peddakrpd'],
['email'=>'pms.shareef@gmail.com','number'=>'Anantapur','name'=>'ap-guntakal'],
['email'=>'psiddiqui33@gmail.com','number'=>'North East','name'=>'dl-mustafabad'],
['email'=>'quamrulhasan786k@gmail.com','number'=>'Katihar','name'=>'br-katihar'],
['email'=>'quasim.jaan@gmail.com','number'=>'Mainpuri','name'=>'upw-karhal'],
['email'=>'r31@gmail.com','number'=>'Balrampur','name'=>'upe-nagwa'],
['email'=>'r46@gmail.com','number'=>'Chandauli','name'=>'upe-dharaon'],
['email'=>'raeeskhan8791871915@gmail.com','number'=>'Firozabad','name'=>'upw-firozabad'],
['email'=>'Rafiahmedappapillai@gmail.com','number'=>'Chennai Metro','name'=>'tn-puzhal'],
['email'=>'rahimuddinansari57@gmail.com','number'=>'Sitapur','name'=>'upe-shekhwapur'],
['email'=>'rahmatata.in@gmail.com','number'=>'Jaunpur','name'=>'upe-shahganj'],
['email'=>'raissir7588@gmail.com','number'=>'Nanded','name'=>'mh-degloor'],
['email'=>'raisuzzaman841403@gmail.com','number'=>'Saran','name'=>'br-chhapra'],
['email'=>'rajqureshi82@gmail.com','number'=>'Narsinghpur','name'=>'mp-kareli'],
['email'=>'rasheedfarooqui367@gmail.com','number'=>'West Delhi','name'=>'dl-uttamnagar'],
['email'=>'rasheedsd1951@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-pathancheru'],
['email'=>'rashid.sio@gmail.com','number'=>'Ahmedabad City','name'=>'gj-ahmedabade'],
['email'=>'rashidulkherchem1984@gmail.com','number'=>'','name'=>'uk-rk'],
['email'=>'rasool.jih@gmail.com','number'=>'Prakasam','name'=>'ap-yerragndpLm'],
['email'=>'rehamanvirajpet@gamil.com','number'=>'Kodagu','name'=>'ka-virajpet'],
['email'=>'rehanahmadvic@gmail.com','number'=>'Deoria','name'=>'upe-salempur'],
['email'=>'rehanali123.md@gmail.com','number'=>'West Godavari','name'=>'ap-tanuku'],
['email'=>'Rgdaimi2228@gmail.com','number'=>'Latur','name'=>'mh-udgir'],
['email'=>'Riyazbabu01@gmail.com','number'=>'Mumbai Metro','name'=>'mh-Vkrlparksite'],
['email'=>'rizwaneluru6787@gmail.com','number'=>'Vijayawada City (Ntr)','name'=>'ap-VJc'],
['email'=>'rizwankhalid.ckm@gmail.com','number'=>'Chikmagalur','name'=>'ka-chikmagalur'],
['email'=>'rizwanmungeri786@gmail.com','number'=>'Munger','name'=>'br-munger'],
['email'=>'rizwansk195@gmail.com','number'=>'Washim','name'=>'mh-risod'],
['email'=>'rkhan@gmail.com','number'=>'Balrampur','name'=>'upe-pachpedwa'],
['email'=>'ruhulamin30011980@gmail.com','number'=>'Murshidabad','name'=>'wb-kasbagoas'],
['email'=>'ruk101122n@jihwb.org','number'=>'Paschim Bardwan','name'=>'wb-asansole'],
['email'=>'rukh@jihwb.org','number'=>'Cooch Behar','name'=>'wb-baniatari'],
['email'=>'rukhann@jihwb.org','number'=>'Kolkata Metro','name'=>'wb-belgachia'],
['email'=>'Rukma78@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-jublihills'],
['email'=>'rukn@gmail.com','number'=>'Purba Medinipur','name'=>'wb-uttarsonamui'],
['email'=>'rukn@jihwb.org','number'=>'Hooghly','name'=>'wb-amgram'],
['email'=>'rukn100636@jihwb.org','number'=>'Murshidabad','name'=>'wb-kamurdiar'],
['email'=>'rukn100646@jihwb.org','number'=>'Murshidabad','name'=>'wb-nowda'],
['email'=>'rukn100647@jihwb.org','number'=>'Murshidabad','name'=>'wb-komnager'],
['email'=>'rukn100684@jihwb.org','number'=>'Nadia','name'=>'wb-barbakpur'],
['email'=>'rukn100743@jihwb.org','number'=>'Kolkata Metro','name'=>'wb-tantibagh'],
['email'=>'rukn101132@jihwb.org','number'=>'Purba Medinipur','name'=>'wb-louhajang'],
['email'=>'rukn884@jihwb.org','number'=>'North 24 Parganas','name'=>'wb-gadpukuria'],
['email'=>'ruknjihkmm@gmail.com','number'=>'Khammam (Urban)','name'=>'ts-qilakhammam'],
['email'=>'saahilbinnizam@gmail.com','number'=>'Chennai Metro','name'=>'tn-kaladipet'],
['email'=>'saajhi@gmail.com','number'=>'Nagpur City','name'=>'mh-nagpurn'],
['email'=>'sabihakhursheed70@gmail.com','number'=>'Pratapgarh','name'=>'upe-pratapgarh'],
['email'=>'sabirfaran3@gmail.com','number'=>'Santkabir Nagar','name'=>'upe-kaitholiya'],
['email'=>'sachora@gmail.com','number'=>'Ahmedabad City','name'=>'gj-sarkhej'],
['email'=>'sadullahoque11@gmail.com','number'=>'Barpeta','name'=>'an-howlyw'],
['email'=>'Saeeddeulghat@gmail.com','number'=>'Buldana','name'=>'mh-devalghat'],
['email'=>'saeedquadri@gmail.com','number'=>'Aurangabad','name'=>'mh-sillod'],
['email'=>'sagheer1972@gmail.com','number'=>'Vellore','name'=>'tn-pernambut'],
['email'=>'sahadulquddus@gmail.com','number'=>'North 24 Parganas','name'=>'wb-haroa'],
['email'=>'sahulsio@gmail.com','number'=>'Tiruppur','name'=>'tn-tirupur'],
['email'=>'saifulla6531@gmail.com','number'=>'Mau','name'=>'upe-dhelaifirozpur'],
['email'=>'sajidhsayyad@gmail.com','number'=>'Ahmed Nagar','name'=>'mh-shreerampur'],
['email'=>'sajjadqasmi393@gmail.com','number'=>'Gulbarga','name'=>'ka-sedam'],
['email'=>'salahuddinkhansk4592@gmail.com','number'=>'Shahjahanpur','name'=>'upw-miranpurkatra'],
['email'=>'saleemfarooqui.sf@gmail.com','number'=>'Parbhani','name'=>'mh-pathri'],
['email'=>'saleemkovai733@gmail.com','number'=>'Coimbatore City','name'=>'tn-coimbatoree'],
['email'=>'saleemyunus023@gmail.com','number'=>'Aurangabad','name'=>'mh-ghatnandra'],
['email'=>'salmansiddiqui118@gmail.com','number'=>'Muzaffarnagar','name'=>'upw-muzaffarnagarcity'],
['email'=>'samadawaz@gmail.com','number'=>'Nandyal','name'=>'ap-nandyal'],
['email'=>'samitpt@gmail.com','number'=>'Tirupattur','name'=>'tn-tirupattur'],
['email'=>'sattaramjad@gmail.com','number'=>'Nizamabad (Urban)','name'=>'ts-yaqubpura'],
['email'=>'Sawlatfahad@gmail.com','number'=>'Ramgarh','name'=>'jh-barkakana'],
['email'=>'sayedabdulmunaff12@gmail.com','number'=>'Kothagudem','name'=>'ts-bhadrachalam'],
['email'=>'sayyadgg@gmail.com','number'=>'Ahmed Nagar','name'=>'mh-parner'],
['email'=>'sdf@gmail.com','number'=>'Rai Gadh','name'=>'mh-mahad'],
['email'=>'Sdhusain32@gmail.com','number'=>'Raisen','name'=>'mp-raisen'],
['email'=>'sdn19921@gmail.com','number'=>'Nuh','name'=>'hr-shikrawa'],
['email'=>'sferozuddin@yahoo.com','number'=>'Greater Hyderabad','name'=>'ts-secunderabad'],
['email'=>'Shabbair07@gmail.com','number'=>'Kothagudem','name'=>'ts-chandrugunda'],
['email'=>'shabbir@alialnassarco.com','number'=>'Hassan','name'=>'ka-hassan'],
['email'=>'shabbirahmed786b@gmail.com','number'=>'Vijayawada City (Ntr)','name'=>'ap-vijayawadaw'],
['email'=>'shabeer2001@yahoo.com','number'=>'Dindigul','name'=>'tn-dindigul'],
['email'=>'shadabmoosa2@gmail.com','number'=>'Aurangabad City','name'=>'mh-timescolony'],
['email'=>'shafi.shahdol@gmail.com','number'=>'Shahdol','name'=>'mp-shahdol'],
['email'=>'shafiquegodda@gmail.com','number'=>'Godda','name'=>'jh-godda'],
['email'=>'shagafkhot@gmail.com','number'=>'Thane','name'=>'mh-padgha'],
['email'=>'shahabuddeenssd@gmail.com','number'=>'Lucknow City','name'=>'upe-phoolbagh'],
['email'=>'Shahabytl@gmail.com','number'=>'Yavatmal','name'=>'mh-yavatmal'],
['email'=>'shaheen.kalokhe@gmail.com','number'=>'Thane','name'=>'mh-bhiwandi'],
['email'=>'shahidjalal7@gmail.com','number'=>'Saharsa','name'=>'br-saharsa'],
['email'=>'shahidmemon7891@gmail.com','number'=>'Belgaum','name'=>'ka-belgaum'],
['email'=>'shahkhalils@gmail.com','number'=>'Mumbai Metro','name'=>'mh-andheri'],
['email'=>'Shahnawazahmadgori@gmail.com','number'=>'Muzaffarnagar','name'=>'upw-budhana'],
['email'=>'shaikh.imtiyaz61@gmail.com','number'=>'Pune City','name'=>'mh-pimpri'],
['email'=>'shaikhasankmm@gmail.com','number'=>'Khammam (Urban)','name'=>'ts-islampet'],
['email'=>'shaikjaveed3677@gmail.com','number'=>'Chikmagalur','name'=>'ka-tarikere'],
['email'=>'shaikvali7919@gmail.com','number'=>'East Godavaari','name'=>'ap-bommuru'],
['email'=>'shaikyousuf01733@gmail.com','number'=>'Adilabad','name'=>'ts-echoda'],
['email'=>'shakeelsaljuki@gmail.com','number'=>'Barabanki','name'=>'upe-dariyabad'],
['email'=>'Shakeelshibani85651@gmail.com','number'=>'Shivpuri','name'=>'mp-shivpuri'],
['email'=>'shakilahmad9973@gmail.com','number'=>'Palamu','name'=>'jh-deorih'],
['email'=>'shakir909@gmail.com','number'=>'Jodhpur','name'=>'rj-jodhpur'],
['email'=>'Shamim.akhtar0789@gmail.com','number'=>'Surguja','name'=>'cg-ambikapur'],
['email'=>'shamimahmadansari.nnn@gmail.com','number'=>'Allahabad','name'=>'upe-phoolpur'],
['email'=>'shamsheerpashafalahi@gmail.com','number'=>'Hassan','name'=>'ka-mansura'],
['email'=>'shamshulhasan6666@gmail.com','number'=>'Sitapur','name'=>'upe-khairabad'],
['email'=>'Shareef818@gmail.com','number'=>'West Godavari','name'=>'ap-sanivarpet'],
['email'=>'sharfelectrical@gmail.com','number'=>'Chennai Metro','name'=>'tn-konimedu'],
['email'=>'sharifqureshi8048@gmail.com','number'=>'Ujjain','name'=>'mp-unhel'],
['email'=>'shariqahmad7737@gmail.com','number'=>'Jaipur City','name'=>'rj-karbala'],
['email'=>'Shehzadqasmi129@gmail.com','number'=>'Jaipur City','name'=>'rj-jhotwara'],
['email'=>'sheikbasha250@gmail.com','number'=>'Chennai Metro','name'=>'tn-ennore'],
['email'=>'sheikhharoon71@gmail.com','number'=>'Durg','name'=>'cg-bhilai-3'],
['email'=>'shekhchand74@gmail.com','number'=>'Anuppur','name'=>'mp-bhaloomada'],
['email'=>'shkhnaser@gmail.com','number'=>'Aurangabad City','name'=>'mh-usmanpura'],
['email'=>'shoaibsameer@gmail.com','number'=>'Vijayawada City (Ntr)','name'=>'ap-VJN'],
['email'=>'shsriqm@gmail.com','number'=>'Kanpur City','name'=>'upe-jaajmau'],
['email'=>'shuhood.sayyed@gmail.com','number'=>'Ujjain','name'=>'mp-ujjain'],
['email'=>'shujathussaini@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-tolichowki'],
['email'=>'si_hussaini@hotmail.com','number'=>'Greater Hyderabad','name'=>'ts-goshamahal'],
['email'=>'siba2511bf@Gmail.com','number'=>'Krishnagiri','name'=>'tn-krishnagiri'],
['email'=>'siddiqui.abuhurairah@gmail.com','number'=>'Mumbai Metro','name'=>'mh-charkopkandivali'],
['email'=>'siddiquinaeem683@gmail.com','number'=>'Rajgarh','name'=>'mp-narsinghgarh'],
['email'=>'sifalahi@gmail.com','number'=>'Barpeta','name'=>'an-howly'],
['email'=>'Sirajhusain0001@gmail.com','number'=>'Saharanpur','name'=>'upw-saharanpurcity'],
['email'=>'sirajuddinnadwibijnor@gmail.com','number'=>'Bijnor','name'=>'upw-sarkara'],
['email'=>'sk.ibm78@gmail.com','number'=>'Kakinada','name'=>'ap-kakinada'],
['email'=>'skabdulhameed0797@gmail.com','number'=>'Ntr','name'=>'ap-tiruvur'],
['email'=>'skfreal@yahoo.com','number'=>'Pune City','name'=>'mh-punen'],
['email'=>'skirbabag@gmail.com','number'=>'Baghpat','name'=>'upw-khekhra'],
['email'=>'sknaseer1972@gmail.com','number'=>'Krishna','name'=>'ap-Hjunction'],
['email'=>'skshafiuddin787@gmail.com','number'=>'Jalgaon','name'=>'mh-raver'],
['email'=>'sns144988@gmail.com','number'=>'Bijapur','name'=>'ka-moratgi'],
['email'=>'Srahmani8174@gmal.com','number'=>'Siddharth Nagar','name'=>'upe-chaukoniya'],
['email'=>'ssd@gmail.com','number'=>'Buldhana','name'=>'mh-malkapur'],
['email'=>'ssultanmohiuddin@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-golconda'],
['email'=>'strocare@gmail.com','number'=>'Gridih','name'=>'jh-gridih'],
['email'=>'subbu.buddu@gmail.com','number'=>'Guntur','name'=>'ap-palkalur'],
['email'=>'sufiyankohanda@gmail.com','number'=>'Azamgarh','name'=>'upe-kohanda'],
['email'=>'suhailafsha@gmail.com','number'=>'Bangalore Metro','name'=>'ka-yeshvantpur'],
['email'=>'suhailquddusi@gmail.com','number'=>'Saharanpur','name'=>'upw-gangoh'],
['email'=>'sumaiyabriyani88@gmail.com','number'=>'Thanjavur','name'=>'tn-kumbakonam'],
['email'=>'sumaiyatrad@gmail.com','number'=>'Tenkasi','name'=>'tn-kadayanallur'],
['email'=>'syed.ehtishamuddin@gmail.com','number'=>'Bangalore Metro','name'=>'ka-rtnagar'],
['email'=>'syed1959.sb@gmail.com','number'=>'Chennai Metro','name'=>'tn-choolaimedu'],
['email'=>'syedanwar685@gmail.com','number'=>'Beed','name'=>'mh-parli'],
['email'=>'syedbabarali441@gmail.com','number'=>'Raichur','name'=>'ka-maski'],
['email'=>'syedfarooqroyalautomobiles@gmail.com','number'=>'West Godavari','name'=>'ap-akiveedu'],
['email'=>'syedgouse9957@gmail.com','number'=>'Vijayawada City (Ntr)','name'=>'ap-VJbhavaniprm'],
['email'=>'syedh09@gmail.com','number'=>'Thiruvannamalai','name'=>'tn-cheyyar'],
['email'=>'syedhasan6366@gmail.com','number'=>'Bijnor','name'=>'upw-nehtour'],
['email'=>'Syedhidayatali490@gmail.com','number'=>'Koppal','name'=>'ka-koppal'],
['email'=>'syedkabirahmed1971@gmail.com','number'=>'Dharmapuri','name'=>'tn-dharmapuri'],
['email'=>'syednasserali@gmail.com','number'=>'Bellary','name'=>'ka-bellary'],
['email'=>'szafrulhasan@yahoo.co.in','number'=>'Bangalore Metro','name'=>'ka-acroad'],
['email'=>'takhtarradchem@gmail.com','number'=>'Samastipur','name'=>'br-samastipur'],
['email'=>'tarique.bk68@gmail.com','number'=>'','name'=>'mn-imp'],
['email'=>'tauqeerkhan1970@gmail.com','number'=>'Ramgarh','name'=>'jh-chitarpur'],
['email'=>'tayyab.k74@gmail.com','number'=>'Budaun','name'=>'upw-kakrala'],
['email'=>'tayyebamaryam2003@gmail.com','number'=>'Fatehpur','name'=>'upe-fatehpur'],
['email'=>'Tazaif@gmail.com','number'=>'Jaipur City','name'=>'rj-ramganj'],
['email'=>'tdrt@gmail.com','number'=>'Mumbai Metro','name'=>'mh-cheetacamp'],
['email'=>'tdrthhh@gmail.com','number'=>'Sangli','name'=>'mh-miraj'],
['email'=>'tmsiddiqui001@gmail.com','number'=>'Ambedkar Nagar','name'=>'upe-indaipur'],
['email'=>'tooba93@yahoo.com','number'=>'Greater Hyderabad','name'=>'ts-chandrayangutta'],
['email'=>'Ubaidsio269@gmail.com','number'=>'Raipur','name'=>'cg-raipur'],
['email'=>'ukdzaheer3@gmai.com','number'=>'Yavatmal','name'=>'mh-umarkhed'],
['email'=>'umair_kgn@rediffmail.com','number'=>'Buldana','name'=>'mh-khamgaon'],
['email'=>'umairkoti@gmail.com','number'=>'South East','name'=>'dl-jaitpur'],
['email'=>'umardarazbeg@gmail.com','number'=>'West Delhi','name'=>'dl-vikasnagar'],
['email'=>'ummes8884@gmail.com','number'=>'Gonda','name'=>'upe-khuransa'],
['email'=>'usmanishamsuzzama38@gmail.com','number'=>'Gorakhpur City','name'=>'upe-gorakhpurn'],
['email'=>'Vasairotoplast@gmail.com','number'=>'Mumbai Metro','name'=>'mh-nalasoparae'],
['email'=>'vasimap@rocketmail.com','number'=>'Bangalore Metro','name'=>'ka-kormangla'],
['email'=>'wadood_aa@rediffmail.com','number'=>'Tiruppur','name'=>'tn-mangalam'],
['email'=>'Wahajulhaq428@gmail.com','number'=>'Warangal (Urban)','name'=>'ts-hanamkonda'],
['email'=>'wahidurrahaman1997@gmail.com','number'=>'Kamrup Metro','name'=>'an-dispur'],
['email'=>'wajeehnusrat@gmail.com','number'=>'Lucknow Dihaat','name'=>'upe-sandeela'],
['email'=>'wajidhus@yahoo.com','number'=>'Bangalore Metro','name'=>'ka-jaynagar'],
['email'=>'wakeel.mohd1989@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-serilingampalli'],
['email'=>'walihafizullah12@gmail.com','number'=>'Bahraich','name'=>'upe-amwajauhar'],
['email'=>'waquarazeem1@gmail.com','number'=>'Jalgaon','name'=>'mh-pachora'],
['email'=>'x33@gmail.com','number'=>'South East','name'=>'dl-okhlagaon'],
['email'=>'x5@gmail.com','number'=>'Aurangabad','name'=>'mh-kannad'],
['email'=>'xyz@jh.hrd','number'=>'Aligarh','name'=>'upw-aligarh'],
['email'=>'yak363@gmail.com','number'=>'Greater Hyderabad','name'=>'ts-khilwat'],
['email'=>'yousufislahi@gmail.com','number'=>'Pune City','name'=>'mh-akurdi'],
['email'=>'yousufsart@gmail.com','number'=>'Bagalkot','name'=>'ka-nawnagar'],
['email'=>'yunusjih995@gmail.com','number'=>'Bijnor','name'=>'upw-badhapur'],
['email'=>'yunusshaikh051@gmail.com','number'=>'Amravati','name'=>'mh-paratwada'],
['email'=>'zahakkhan16@gmail.com','number'=>'Karimnagar (Urban)','name'=>'ts-karkhanagadda'],
['email'=>'zaheerltp@gmail.com','number'=>'Lalitpur','name'=>'upe-lalitpur'],
['email'=>'zahidalijhansi@gmail.com','number'=>'Jhansi','name'=>'upe-jhansi'],
['email'=>'zakiahmadzaki034@gmail.com','number'=>'Unnao','name'=>'upe-maurawan'],
['email'=>'zakir.msc@gmail.com','number'=>'Aurangabad','name'=>'mh-paithan'],
['email'=>'zeyauddinzeya2260@gmail.com','number'=>'Bhojpur','name'=>'br-piro'],
['email'=>'ziaalikhankhan@gmail.com','number'=>'Visakhapatnam','name'=>'ap-visakhapatname'],
['email'=>'ziauddinirfanzi@gmail.com','number'=>'Nanded','name'=>'mh-biloli'],
['email'=>'Ziauddinkgn@gmail.com','number'=>'Aurangabad','name'=>'mh-khuldabad'],
['email'=>'ziaullahm67@gmail.com','number'=>'Gulbarga','name'=>'ka-shahbad'],
['email'=>'zn8663@gmail.com','number'=>'Ramgarh','name'=>'jh-ramgarh'],
['email'=>'zrehman373@gmail.com','number'=>'Bijnor','name'=>'upw-sherkot'],
['email'=>'zubair9970902409@gmail.com','number'=>'Buldana','name'=>'mh-pipalgaonraja'],
['email'=>'zubairsm01@gmail.com','number'=>'U.K','name'=>'ka-bhatkal'],


        ];

        foreach ($admins as $admin) {
            $user = User::where('email', $admin['email'])->first();
            $district = District::where('name',$admin['number'] )->first();

            if ($user && $district) {
                UnitAdmin::create([
                    'user_id' => $user->id,
                    'district_id' => $district->id,
                    'name' => $admin['name']
                ]);
            }
        }
    }
}


// UnitAdmin::create(['user_id'=>User::where('email','nrasheed5504@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-np' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nayeemfuad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-sg' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tarique.bk68@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mn-imp' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akadirsanthel@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mn-st' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mikcuttack@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'od-ctk' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdsajid_2001@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'uk-hw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','naansari932@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'uk-rn' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rashidulkherchem1984@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'uk-rk' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azmathpasha@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-yetapaka' ]);

// //
// UnitAdmin::create(['user_id'=>User::where('email','connectnawaz@gmail.com')->first()->id,'district_id'=>District::where('name','Anantapur')->first()->id,'name'=>'ap-anantapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mfazululla@gmail.com')->first()->id,'district_id'=>District::where('name','Anantapur')->first()->id,'name'=>'ap-gooty' ]);
// UnitAdmin::create(['user_id'=>User::where('email','pms.shareef@gmail.com')->first()->id,'district_id'=>District::where('name','Anantapur')->first()->id,'name'=>'ap-guntakal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','md.abdullah.sio@gmail.com')->first()->id,'district_id'=>District::where('name','Annamayya')->first()->id,'name'=>'ap-grmknda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Khaleelullahbapatla@gmail.com')->first()->id,'district_id'=>District::where('name','Bapatla')->first()->id,'name'=>'ap-bapatla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','k.hafeez.khan.zm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-punganur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shaikvali7919@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-bommuru' ]);
// UnitAdmin::create(['user_id'=>User::where('email','farooq011@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-goplprm' ]);
// UnitAdmin::create(['user_id'=>User::where('email','md.dadashar1623@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kadiem' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Iliassharief90436@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-nallajarla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ansarjihrjy@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-Rjmndry' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ibrahimcocoa123@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-eluru' ]);
// UnitAdmin::create(['user_id'=>User::where('email','adilshaik8116@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-jngrdygdm' ]);
// UnitAdmin::create(['user_id'=>User::where('email','c@8gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-gunturcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','arasheedmngl@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-mangalgiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','subbu.buddu@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-palkalur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sk.ibm78@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kakinada' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nabidhar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-repur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','amusavvir969@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-mandapeta' ]);
// UnitAdmin::create(['user_id'=>User::where('email','meera.sheik509@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-raulapalem' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sknaseer1972@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-Hjunction' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihpmarru@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-pamaru' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iliyasmsc117@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-vuyyuru' ]);
// UnitAdmin::create(['user_id'=>User::where('email','muqtharwork@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kurnoolN' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jih4chand@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kurnoolS' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Chandanna1973@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-yemmiganur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','baigm870@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-banaganapalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','samadawaz@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-nandyal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','fmd446936@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kondapalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','skabdulhameed0797@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-tiruvur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','pkhasimkhan47@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-peddakrpd' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulkabirruksana@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-donakonda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rasool.jih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-yerragndpLm' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khajaahamad911@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kaligiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mahaboob.mba@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kavali' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdanwarbaig123@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-nellore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammedsiddiqshaik842@gmai.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-udaygiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','chandbabushaik@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kotavkd' ]);
// UnitAdmin::create(['user_id'=>User::where('email','arshdoct@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kadiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','habeebmd25@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-vijayangrm' ]);
// UnitAdmin::create(['user_id'=>User::where('email','a.karim.jihvyr123@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-gangur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedgouse9957@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-VJbhavaniprm' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rizwaneluru6787@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-VJc' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hussain.advt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-VJe' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shoaibsameer@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-VJN' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shabbirahmed786b@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-vijayawadaw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ziaalikhankhan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-visakhapatname' ]);
// UnitAdmin::create(['user_id'=>User::where('email','bajinrt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-visakhapatnamw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedfarooqroyalautomobiles@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-akiveedu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','farhaan505@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-bhimavaram' ]);
// UnitAdmin::create(['user_id'=>User::where('email','fareedshaik953@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-koyyalagudem' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hussainmeerjapur@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-meerzapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shareef818@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-sanivarpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gulfadstpg@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-tadepallegudem' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rehanali123.md@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-tanuku' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ismailshariffmd06@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-venkatapuram' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khalid85@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-kadapa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','d.m.shareef2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ap-proddatur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','haidarali90946@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-majgaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sifalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-howly' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sadullahoque11@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-howlyw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','adbussattar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-kadong' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aksed@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-salabila' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aliibrahim121975@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-dhula' ]);
// UnitAdmin::create(['user_id'=>User::where('email','johirulislam114@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-mangaldoi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mollahzohurul2014@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-lakhipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hanif@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-rahmatnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','wahidurrahaman1997@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-dispur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','faiyaz@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-hedayetpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdussamad9401@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-rampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dilwar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-bhojkhuwa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdsabb786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-tezpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mustafa@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'an-dewkandiT' ]);
// UnitAdmin::create(['user_id'=>User::where('email','c21@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-gumra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','bphjalapur@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-jalalpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','977453@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-udaipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdusalehmazumdar32@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-nhailakandi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khalid523.1960@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-karimganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jasim4124@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-dharmanagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azizurrahman4226@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'as-baburbazar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','malambihar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-araria' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdfarooquebgp16@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-dehti' ]);
// UnitAdmin::create(['user_id'=>User::where('email','msali84@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-hayatpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abidfarooqui9@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-rajokhar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdshakilbihar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-babura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asharhamidilkn@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-lakhminia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ghazalarisha2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-bhagalpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zeyauddinzeya2260@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-piro' ]);
// UnitAdmin::create(['user_id'=>User::where('email','irs003@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-dumraon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmadrazambm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-darbhanga' ]);
// UnitAdmin::create(['user_id'=>User::where('email','barque.rashid@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-motihari' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdyusuf160476@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-siswa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','masroormehar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-gaya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahsantarique56@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-khandail' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jamiatulsadeqat@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-kothi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','quamrulhasan786k@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-katihar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulahad6040@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-patninarainpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gilman331@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-bardaha' ]);
// UnitAdmin::create(['user_id'=>User::where('email','intikhab.falahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-khajuri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','irs003@hotmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-malmal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rizwanmungeri786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-munger' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hashsham.tarique58@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-muzaffarpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khalidanwar961@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-biharsharif' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hamidhasan4493@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-islampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','parwaktasayeed@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-hissua' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jawaidakhterjp@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-nawada' ]);
// UnitAdmin::create(['user_id'=>User::where('email','md_shahzad64@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-patnac' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dr_imran_ulhaque@hotmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-patnaw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdmugleazamansari@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-sadhweli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulkadiransari1966@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-bikramganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdullahssrm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-sasaram' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shahidjalal7@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-saharsa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','takhtarradchem@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-samastipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jameelparwaz331@gmai.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-tajpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','raisuzzaman841403@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-chhapra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','amiriqbal9622@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-sitamarhi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mquasim731@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-barharia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','naseemkauser50@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-siwan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ayazanwar98@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-balbhadarpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahaque1979@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-chiknauta' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdkhurshidalamhjp123@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-hajipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akhtar.arafat786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-betia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nesarahnad01@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-mathiamehwal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdshoaibalam48@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-raibarimahua' ]);
// UnitAdmin::create(['user_id'=>User::where('email','f1980ahmad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'br-ramnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Ansari.ra@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'cg-bilaspur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azazahmadstar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'cg-bhilainagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Gkhan7031@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'cg-durg' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Kaifruman801@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'cg-korba' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Ubaidsio269@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'cg-raipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shamim.akhtar0789@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'cg-ambikapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','javedasila@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-jamamasjid' ]);
// UnitAdmin::create(['user_id'=>User::where('email','psiddiqui33@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-mustafabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Masood314@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-jafarabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khursheedalamjih17@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-loni' ]);
// UnitAdmin::create(['user_id'=>User::where('email','afsarmasood65@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-seemapuri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','irfankhan2k7@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-abulfazaleN' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1jihafesouth@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-abulfazaleS' ]);
// UnitAdmin::create(['user_id'=>User::where('email','umairkoti@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-jaitpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','x33@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-okhlagaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nadviarif@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-shaheenbagh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','musharrafjih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-zakirnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rasheedfarooqui367@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-uttamnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','umardarazbeg@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'dl-vikasnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1iyaz.j75@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ga-bicholim' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jihmapusa@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ga-mapusa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','armaan318484@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ga-panaji' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Akbarkhan7887@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ga-ponda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aneesonly@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ga-margao' ]);
// UnitAdmin::create(['user_id'=>User::where('email','altafshahgoa@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ga-vascodagama' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ikram121963@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-ahmedabadc' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rashid.sio@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-ahmedabade' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kalim.madina@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-ahmedabadw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1Safwanzx2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-danilimda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gayasuddenshaikh82@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-narodapatiya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sachora@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-sarkhej' ]);
// UnitAdmin::create(['user_id'=>User::where('email','drifti.sio@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-modasa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','anwarindori123456@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-baroda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','a_mshaikh@rediffmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-junagadh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mgvgetco@yahoo.co.in')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-vijapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aiyyubmemonaiyyub@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-himatnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','parvezsachora989898@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-lambadiya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahs.sio@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-surat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Anvarmalik0987@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'gj-vapi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulmalik10063@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-ballabgarh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jakir7503@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-vinaynagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdyunushkhan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-gurugram' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aquilahmed51@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-nuh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sdn19921@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-shikrawa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Imrafikahmed@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-palwal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asrafansari999183@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'hr-panipat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','alammdmushtaque786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-bokaro' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nazarneyazi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-kumardhubi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hadis03031952@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-dhanbad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azmatalam408@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-jharia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammad69shahid@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-jamshedpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shafiquegodda@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-godda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','strocare@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-gridih' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mumtazsafiurrahman@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-azadnagarkajri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hanzala9031@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-banha' ]);
// UnitAdmin::create(['user_id'=>User::where('email','draafarooqui@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-hazaribagh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','alimuddinmd047@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-narottampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aliimmsiddique@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-daltonganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shakilahmad9973@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-deorih' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Sawlatfahad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-barkakana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tauqeerkhan1970@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-chitarpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zn8663@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-ramgarh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nasimakhtarbhk@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-riverside' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdshoaibalamnadvi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-banapiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','md7657563@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-chakla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','msskanke@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-kanke' ]);
// UnitAdmin::create(['user_id'=>User::where('email','moizakhtar3589@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-baragain' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khalidsajjad3@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-bariatu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azizfalahi12@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-khijurtola' ]);
// UnitAdmin::create(['user_id'=>User::where('email','matloobmgs@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-ranchicity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','maqasonakar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'jh-gumani' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mainuddinkampli70@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-badami' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asifmudagal@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bagalkot' ]);
// UnitAdmin::create(['user_id'=>User::where('email','meetsayeed223.k@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-ilkal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','yousufsart@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-nawnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','szafrulhasan@yahoo.co.in')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-acroad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iqbalahmedqsm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-btm' ]);
// UnitAdmin::create(['user_id'=>User::where('email','wajidhus@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-jaynagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','vasimap@rocketmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-kormangla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iqbalgodiyal@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-mysoreroad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syed.ehtishamuddin@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-rtnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mmkkhan@hotmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-saraipalya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','munawwar60@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-shivajinagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','suhailafsha@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-yeshvantpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shahidmemon7891@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-belgaum' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syednasserali@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bellary' ]);
// UnitAdmin::create(['user_id'=>User::where('email','imranbagdal@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bagdal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdaslam.j@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-basavakalyan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammedmuazzam580@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bidar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdiftekharahmed57@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-humnabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihbagewadi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-basavanabagewadi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iqhulikatti.1786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bijapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sns144988@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-moratgi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mujahidnamajkatti@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-talikot' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rizwankhalid.ckm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-chikmagalur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shaikjaveed3677@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-tarikere' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Ansari.zubairm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-chitradurga' ]);
// UnitAdmin::create(['user_id'=>User::where('email','deekeyibrahim1@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-kalladka' ]);
// UnitAdmin::create(['user_id'=>User::where('email','isaqkp@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-mangalore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mukhtarshab@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-panemangalore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulkareemua3@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-ullal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abuhamida80@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-uppinangady' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khyder75@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-vitla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ayubkhanperfect@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-davangere' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulqayum221967@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-harihar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aamirumri79@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-hosur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihkerebelchi12@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-kerebilchi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mushtaquehaveripeth@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-dharwad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','arcbelagali9@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-hubli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mukhtar.kotwal@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-navalgund' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abduljabbarkhawas48@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-gadag' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihglb@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-gulbarga' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sajjadqasmi393@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-sedam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ziaullahm67@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-shahbad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdullaharehalli@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-arehalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shabbir@alialnassarco.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-hassan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shamsheerpashafalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-mansura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','afsarch@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-madikeri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rehamanvirajpet@gamil.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-virajpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mubarakbagbanbpet@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bangarpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ajmalkhadeer@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-kolar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihhanamasagar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-hanumsagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Syedhidayatali490@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-koppal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aslam.carepharma@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-mysore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulraheman@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-manvi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedbabarali441@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-maski' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asimuddin.a@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-raichur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jih.sind@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-sindhanur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hafeezarts@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bhadravathi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','9902617422ps@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-sagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','blueocean.nets@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-shimoga' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Abdulkhaderjih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-thirthahalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','liyakhatalibaigbaig@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-tiptur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asadullah30@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-tumkur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zubairsm01@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-bhatkal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulmannan34378@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-sirsi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aknifal20@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-hoode' ]);
// UnitAdmin::create(['user_id'=>User::where('email','anwarali.jih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-kapu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','imraanehsaan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-malpe' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nisarudupi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-udupi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','amjadhussain208@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-shahpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gmkhayyat@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ka-yadgir' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shekhchand74@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-bhaloomada' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aqueelsiddiqui2017@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-balaghat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akhtarmohkhan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-berasia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','absarfalahi1984@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-baghdilkusha' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ilahianwar66@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-ibraheempura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jami.fa@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-shahjahanabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jameel0ahmed1975@gmail.Com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-burhanpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahkhancwa@rediffmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-chhindwara' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Abdulrajjakmastar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-damoh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kalimqureshi976@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-dewas' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kamranextrovert00@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-gwalior' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdul.razzaque121@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-harda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','a.aleem.huda@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-khajrana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ashabulyameen1955@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-nayapura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iqrar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-jabalpurc' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jameelahmed7999927317@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-jabalpure' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jmansari261946@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-jabalpurw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aijazqureshi1712@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-khandwa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Afserbeg0512@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-khargone' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Mohmsalim01@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-mandla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rajqureshi82@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-kareli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdrizwan125@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-rankai' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Sdhusain32@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-raisen' ]);
// UnitAdmin::create(['user_id'=>User::where('email','siddiquinaeem683@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-narsinghgarh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdul_yesh10@reditt.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-rewa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Kamarrijwan2029@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-maihar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gm8297227@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-satna' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aliasim7252@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-ashta' ]);
// UnitAdmin::create(['user_id'=>User::where('email','navedazhar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-sehore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Ik9425175473@gmai.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-seoni' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shafi.shahdol@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-shahdol' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Hamid316075@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-maksi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','atharabdullah093@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-baroda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','miansari955@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-sheopur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shakeelshibani85651@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-shivpuri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','najish.farooqui@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-mahidpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','anoormansuri@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-nagda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shuhood.sayyed@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-ujjain' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sharifqureshi8048@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mp-unhel' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mushtaque161961@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ahmednagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sayyadgg@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-parner' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sajidhsayyad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-shreerampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohmmadzafar8888@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-aalegaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dr.uroojakola@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-akola' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdularif1968@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-akot' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dfsasd@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-balapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mudassirullahkhanishtiaque@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-barsitakli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','m83@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-hathroon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abc@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-murtuzapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kareem1072@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-patur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aejazrafique@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-anjangaonsurji' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jmo9651@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-chikhaldara' ]);
// UnitAdmin::create(['user_id'=>User::where('email','yunusshaikh051@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-paratwada' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Pakiza.dukan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-fardapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','niaurangabad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-gadhejalgaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saleemyunus023@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ghatnandra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','x5@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-kannad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Ziauddinkgn@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-khuldabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zakir.msc@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-paithan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saeedquadri@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-sillod' ]);
// UnitAdmin::create(['user_id'=>User::where('email','71zain@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-cnaka' ]);
// UnitAdmin::create(['user_id'=>User::where('email','9dg@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-delhigate' ]);
// UnitAdmin::create(['user_id'=>User::where('email','2d@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-qadeemshaher' ]);
// UnitAdmin::create(['user_id'=>User::where('email','4rs@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-railwaystation' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mzafardesh@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-roshangate' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shadabmoosa2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-timescolony' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shkhnaser@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-usmanpura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','munir7334@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ambajogai' ]);
// UnitAdmin::create(['user_id'=>User::where('email','javedali424@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-beed' ]);
// UnitAdmin::create(['user_id'=>User::where('email','amjadp101@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-majalgaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedanwar685@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-parli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','krk@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-badnerabholji' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Saeeddeulghat@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-devalghat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','umair_kgn@rediffmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-khamgaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','md9132349@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-mehkar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zubair9970902409@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-pipalgaonraja' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Hafizmujahidqureshi313@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-buldhana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','liyaqatali118@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-chikhli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahamid@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-dhamangaonbadhe' ]);
// UnitAdmin::create(['user_id'=>User::where('email','drmansaransar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-shegaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulqadirs904@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ballarpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aakhtarazad@gamil.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-newmajri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihrajura@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-rajura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abrauf8750@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-basmath' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdiqbal47351@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-hingoli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Abdurraufjih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-faizpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mushtaqueahd@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-jalgaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','waquarazeem1@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-pachora' ]);
// UnitAdmin::create(['user_id'=>User::where('email','skshafiuddin787@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-raver' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Pathanmukhtar4u@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-badnapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ismailsk9420824445@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-jalna' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Mirzafarhat313@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ranjani' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aarifsirlatur@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-latur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Rgdaimi2228@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-udgir' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shahkhalils@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-andheri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','siddiqui.abuhurairah@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-charkopkandivali' ]);
// UnitAdmin::create(['user_id'=>User::where('email','orahman367@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-govandi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1anisairfan1967@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-kurla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azmathudai84@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-malad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihmillatnagar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-millatnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Vasairotoplast@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-nalasoparae' ]);
// UnitAdmin::create(['user_id'=>User::where('email','anaazhar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-nallasoparaw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','parvez03121968@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-sakinaka' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Riyazbabu01@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-Vkrlparksite' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jihkmpt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-kampti' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saajhi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-nagpurn' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nkkhwaja67@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-nagpurw' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Khanabdullah10444@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ardhapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abc14355@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-bhokar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ziauddinirfanzi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-biloli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','raissir7588@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-degloor' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Aamir.malegaon@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-malegaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','NA@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-yeola' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khatikjamil111@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-nasik' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akbarmyh@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-parbhani' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saleemfarooqui.sf@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-pathri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','yousufislahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-akurdi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shaikh.imtiyaz61@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-pimpri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','skfreal@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-punen' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ashdwh@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-punes' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sdf@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-mahad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','imtiyaznakade2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-ratnagiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tdrthhh@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-miraj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','drismail955@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-sholapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shaheen.kalokhe@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-bhiwandi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','arfafarid@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-kalyan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shagafkhot@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-padgha' ]);
// UnitAdmin::create(['user_id'=>User::where('email','imransheikh886@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-shahpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rizwansk195@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-risod' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mirzanaved632@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-pusad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ukdzaheer3@gmai.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-umarkhed' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shahabytl@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'mh-yavatmal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','m22@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'markaz-testunit' ]);
// UnitAdmin::create(['user_id'=>User::where('email','alimeharban180@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'pb-kapurthala' ]);
// UnitAdmin::create(['user_id'=>User::where('email','irshadmohammad54@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'pb-malerkotla' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shehzadqasmi129@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-jhotwara' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shariqahmad7737@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-karbala' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Tazaif@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-ramganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ghayasanwark746@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-sanganer' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mumtazali3000@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-jhunjhunu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shakir909@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-jodhpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mubarakswm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-sawaimadhopur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','AbdulMateen761@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-wazeerpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aarif_jatoo@yahoo.co.in')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'rj-sikar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulnasser2005@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-medavakkam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gburansha@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-annanagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syed1959.sb@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-choolaimedu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sheikbasha250@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-ennore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saahilbinnizam@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-kaladipet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sharfelectrical@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-konimedu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','luthfullah@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-perambur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','muzamilrafeek@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-poonamallee' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Rafiahmedappapillai@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-puzhal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nasersyed1956@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-royapettah' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulsamath351@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-royapuram' ]);
// UnitAdmin::create(['user_id'=>User::where('email','apmpeer81@gmai.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-coimbatorec' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saleemkovai733@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-coimbatoree' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kasyedibrahim@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-coimbatoren' ]);
// UnitAdmin::create(['user_id'=>User::where('email','bvmmadharsha@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-coimbatores' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedkabirahmed1971@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-dharmapuri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shabeer2001@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-dindigul' ]);
// UnitAdmin::create(['user_id'=>User::where('email','husnaharoon2005@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-karur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','siba2511bf@Gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-krishnagiri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','basheerahahmed@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-madurai' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulhakkimjih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-thirumangalam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sumaiyatrad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-kadayanallur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sumaiyabriyani88@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-kumbakonam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','peermdappa@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-cumbum' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abudhahir61@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-theni' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedh09@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-cheyyar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','samitpt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-tirupattur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abusumera@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-vaniyambadi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','wadood_aa@rediffmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-mangalam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sahulsio@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-tirupur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','citymediaudt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-udumalpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jaffarulla26@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-manapparai' ]);
// UnitAdmin::create(['user_id'=>User::where('email','m88@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-thuvarankurichi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akm1246@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-trichy' ]);
// UnitAdmin::create(['user_id'=>User::where('email','niqbalgym602@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-gudiyatham' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sagheer1972@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-pernambut' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abuauthif@rediffmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'tn-vellore' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azeemfalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-adilabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shaikyousuf01733@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-echoda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jamaateislamiindervelly@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-indervelli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','imumtazjih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-amberpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Asifmohiuddin@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-bahadurpura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tooba93@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-chandrayangutta' ]);
// UnitAdmin::create(['user_id'=>User::where('email','bariksa@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-charminar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ssultanmohiuddin@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-golconda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','si_hussaini@hotmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-goshamahal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Rukma78@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-jublihills' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Hameed17452@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-kapra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohd.obaid.mo@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-khairtabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','yak363@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-khilwat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mushtaqathar@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-malakpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','najmuddinarshad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-muradnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','farhanmk@hotmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-nampalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdkhusro_pasha@ymail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-nanalnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rasheedsd1951@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-pathancheru' ]);
// UnitAdmin::create(['user_id'=>User::where('email','m.a.abdulrafay2012@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-rajendernagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sferozuddin@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-secunderabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','wakeel.mohd1989@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-serilingampalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aleemuddinahmed742010@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-shaikpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shujathussaini@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-tolichowki' ]);
// UnitAdmin::create(['user_id'=>User::where('email','masroorms786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-wadiehuda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','impex7766@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-yakutpura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','miumair@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-jagtiyal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','masood4u99@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-kaghaznagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','merajahmed12@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-godawarikhani' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zahakkhan16@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-karkhanagadda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nayeemuddinahmed88@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-mukarrampura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shaikhasankmm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-islampet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ruknjihkmm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-qilakhammam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sayedabdulmunaff12@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-bhadrachalam' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shabbair07@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-chandrugunda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jahangeersharief@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-kothagudem' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulraheem10021993@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-monuguru' ]);
// UnitAdmin::create(['user_id'=>User::where('email','murtuzaak@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-palvancha' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abasith.sk@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-rudrampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','issaqitc@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-sarapaka' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammadiqbal9989@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-mahaboobabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihmbnr@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-mahbubnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdyakubpasha2206@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-mandamarri' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Jihjpt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-jogipet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdfazil6797@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-medak' ]);
// UnitAdmin::create(['user_id'=>User::where('email','muzakkirrafeeq7@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-singapurtownship' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jeelani.md575@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-miryalguda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdyousuf365365@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-nalgonda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hameedaliimami@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-gundmal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nrpt93@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-narayanpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdmansoorali7788@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-utkoor' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Mubeenahmedfirdousi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-bhainsa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mujahid8372@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-nirmal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aslambinmohsin@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-aarmoor' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahqamer83xt@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-ahmadibazar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdghouse.1058@reddifmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-habeebnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sattaramjad@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-yaqubpura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','haijaveed@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-peddapalli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mmakhter203@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-maheshwaram' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdasifahmed777@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-narayankhed' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ashfaqlahuti@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-sadashivpet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hashmathsio@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-sangareddy' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nazimghouri88@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-zaheerabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdul.quddus2010@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-siddipet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','fayazmd040@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-viqarabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Wahajulhaq428@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-hanamkonda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammedabdulaleem99@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-kazipet' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mea-mai.39@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'ts-warangalcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Abdulhafeezbagi1@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-baagi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shamimahmadansari.nnn@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-phoolpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1rizwanzahoor2003@yahoo.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-atala' ]);
// UnitAdmin::create(['user_id'=>User::where('email','5almuzammil580@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-bamrauli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mojubaid97323@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jhunsi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','farazkhan23078@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-kareli' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmadowais0021@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-naini' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulgffark812@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-baskhari' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tmsiddiqui001@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-indaipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmadkaleem45@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-azamgarhcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','atiqurrahmanislahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-badharia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mmohsin67189@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-bilariaganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asgharali555shaikh@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-chandpatti' ]);
// UnitAdmin::create(['user_id'=>User::where('email','maaribmaab331267@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jairajpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mimranfalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jamiatulfalah' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sufiyankohanda@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-kohanda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1atiqurrahmanislahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mahul' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abrarahmad2658@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-agmohammadpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jameelahmadfalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-naseerpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','albadarbookcentre@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-saraimeer' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mdserajddin644wd3@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-zameenrasoolpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','walihafizullah12@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-amwajauhar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ka9593937@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-bahraich' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aleemahmad0682@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jarwal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aabidalia9@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-nanpara' ]);
// UnitAdmin::create(['user_id'=>User::where('email','atikurrahman6084@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-barwan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulansari967@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-rasra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ismailharis017@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-balrampurcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','faialsaud239@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-dhankharpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','r31@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-nagwa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rkhan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-pachpedwa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','irkhaavc741@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-sadullahnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdyakoobkhan123@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-tulsipur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdakbar0624@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-banarascity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','israilansari121635@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-barabanki' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shakeelsaljuki@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-dariyabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','alauddeenhamza786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-bbfatehpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','m.muneer119@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-husainmau' ]);
// UnitAdmin::create(['user_id'=>User::where('email','faizanhamad786@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mohammadpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahk9704@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-basti' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulhali196201@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-kusaurabazar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','r46@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-dharaon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','arifalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-katesar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jokhanansari7@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-syedraja' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammadtalha473@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-manikpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','bdlari123@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-lar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rehanahmadvic@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-salempur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulgffarr812@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-sonkhari' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tayyebamaryam2003@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-fatehpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dr.mnhaque1935@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-fakhanpura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','afzal.hasan7777@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-sammanpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jihgonda@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-gondacity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hakramul67@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-gurrah' ]);
// UnitAdmin::create(['user_id'=>User::where('email','msaeedahmed83@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-haldharmau' ]);
// UnitAdmin::create(['user_id'=>User::where('email','arasidshah@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-islampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ummes8884@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-khuransa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','noor001300@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-urwabazar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','usmanishamsuzzama38@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-gorakhpurn' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmadsameerair@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-gorakhpurs' ]);
// UnitAdmin::create(['user_id'=>User::where('email','farrukhsheakh@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jaunpurcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','darsgahislamimaroofpur@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-maroofpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rahmatata.in@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-shahganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zahidalijhansi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jhansi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahai74651@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-babupurwa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','darsequranbysalahuddin@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-chamanganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shsriqm@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jaajmau' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khonpajih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-saraiaaqil' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdulhameed0190@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-badagawon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','goodlmp97@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-lakhimpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zaheerltp@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-lalitpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asifsiddique706@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-campbellroad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','h.ahmad63@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-indiranagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nasirataurrahman@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-molviganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ha4156502@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-sherwaninagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','fislamfalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-malihabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iqbalaltamash024@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-rahimabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','wajeehnusrat@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-sandeela' ]);
// UnitAdmin::create(['user_id'=>User::where('email','afzalomar251@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mahoba' ]);
// UnitAdmin::create(['user_id'=>User::where('email','saifulla6531@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-dhelaifirozpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khanmohdshakir@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-maucity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','momaaz7388@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mausultanpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','alimubarak58651@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mirzapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','abdullahkkhan9795@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mahuwar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sabihakhursheed70@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-pratapgarh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dr.aejazumaransari@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-salon' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sabirfaran3@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-kaitholiya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hameedd99@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-khalilabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ajazplaystore17@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-semariyawan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohammadshareeffalahi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-bansi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Srahmani8174@gmal.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-chaukoniya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohd.nnazeer@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-dumariyaganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mushtaqueahm72@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-itwabazar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmadalifalahi121336@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-khoriya' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ma8729362@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mohammednagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akhtarfalahi136@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-nogarh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','shamshulhasan6666@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-khairabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aftabahmad13.1970@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-mahmoodabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rahimuddinansari57@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-shekhwapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdvakeel789@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-tambour' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aliffaihemi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-sultanpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','afsarahmad9794@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-aasat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ghufranahmad44223@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-bangarmau' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khanziankhan855@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-jhalotar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hakeemmohdriyaz@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-madaarnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zakiahmadzaki034@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-maurawan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','moinuddinunnao@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-miyanganj' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hafizmuhammadamin62@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-newtani' ]);
// UnitAdmin::create(['user_id'=>User::where('email','meraj.002@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upe-unnaocity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','drwaqifhusain@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-agracity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','junaidvision@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-amu' ]);
// UnitAdmin::create(['user_id'=>User::where('email','skirbabag@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-khekhra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmedkhan.aziz@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-bareillye' ]);
// UnitAdmin::create(['user_id'=>User::where('email','er.mujahidkhan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-thiryanijabatkhan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','yunusjih995@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-badhapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hasanulbannaalirfan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-basta' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Mohdfarooqbij@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-bijnorcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mfarooqazam1234@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-dhampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nomanijih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-nagina' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kafeeljih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-najibabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','syedhasan6366@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-nehtour' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Mohammadyusuf8551@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-rajakatajpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sirajuddinnadwibijnor@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-sarkara' ]);
// UnitAdmin::create(['user_id'=>User::where('email','zrehman373@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-sherkot' ]);
// UnitAdmin::create(['user_id'=>User::where('email','falahisaquib@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-bilhari' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nabbasi.sarfaraj@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-budauncity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ansarimujahidali811@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-jagat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','tayyab.k74@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-kakrala' ]);
// UnitAdmin::create(['user_id'=>User::where('email','misbauddinmaster@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-sedpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Mutiurrahmankhan18@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-uraulia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','main9917uddin@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-gulaothi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aliahmed7213@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-jaswantnagar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','raeeskhan8791871915@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-firozabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Abdul59rauf@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-chhajarsi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','haroonmohd301@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-bajherakalan' ]);
// UnitAdmin::create(['user_id'=>User::where('email','amjadsadiq077@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-hapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','gulzarahmad55954@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-shahbad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','quasim.jaan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-karhal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','msaleemmujahidkurawali@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-kurawali' ]);
// UnitAdmin::create(['user_id'=>User::where('email','akhan476175@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-lalyana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','dralamgeer902@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-radhna' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mudassirrana2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-sardhana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','azharabdulla2@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-bilari' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdaslam110410@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-kanth' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mazharhusaim160@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-milakpallupura' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nasirmbd72@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-moradabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mohdshahid78868@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-bahedasadat' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Shahnawazahmadgori@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-budhana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','salmansiddiqui118@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-muzaffarnagarcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mayyub116@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-daang' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jameelahmadadab@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-kashipuranga' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aknadwi@yahoo.in')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-rampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Galibhssan@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-budhakhera' ]);
// UnitAdmin::create(['user_id'=>User::where('email','suhailquddusi@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-gangoh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','Sirajhusain0001@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-saharanpurcity' ]);
// UnitAdmin::create(['user_id'=>User::where('email','iftisambhal4@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-sambhal' ]);
// UnitAdmin::create(['user_id'=>User::where('email','hmnabisambhal@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-saraitareen' ]);
// UnitAdmin::create(['user_id'=>User::where('email','salahuddinkhansk4592@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-miranpurkatra' ]);
// UnitAdmin::create(['user_id'=>User::where('email','fakp2006@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-shahjahanpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','1craftpassanger@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'upw-jhinjhana' ]);
// UnitAdmin::create(['user_id'=>User::where('email','A@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-bishia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','c22@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-ekdala' ]);
// UnitAdmin::create(['user_id'=>User::where('email','asd@as.in')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-mejuti' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukhann@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-belgachia' ]);
// UnitAdmin::create(['user_id'=>User::where('email','nadim.anw@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-shibpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ahmedfarooque@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-taltala' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn100743@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-tantibagh' ]);
// UnitAdmin::create(['user_id'=>User::where('email','khosburali@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-tofi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','bokharisio@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-aurangabad' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn100636@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-kamurdiar' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ruhulamin30011980@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-kasbagoas' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn100647@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-komnager' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn100646@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-nowda' ]);
// UnitAdmin::create(['user_id'=>User::where('email','marjanbiswas@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-sahabajpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','aktarikhatun631@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-saidapur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn100684@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-barbakpur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','c23@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-bagjola' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn884@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-gadpukuria' ]);
// UnitAdmin::create(['user_id'=>User::where('email','sahadulquddus@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-haroa' ]);
// UnitAdmin::create(['user_id'=>User::where('email','kahamed.jih@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-raigachi' ]);
// UnitAdmin::create(['user_id'=>User::where('email','ruk101122n@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-asansole' ]);
// UnitAdmin::create(['user_id'=>User::where('email','mgr@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-kharkusma' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn101132@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-louhajang' ]);
// UnitAdmin::create(['user_id'=>User::where('email','rukn@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-uttarsonamui' ]);
// UnitAdmin::create(['user_id'=>User::where('email','modrenfurtinurr@gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-ashuti' ]);
// UnitAdmin::create(['user_id'=>User::where('email','jih100973@jihwb.org')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-kashirampur' ]);
// UnitAdmin::create(['user_id'=>User::where('email','c@23gmail.com')->first()->id,'district_id'=>District::where('name','')->first()->id,'name'=>'wb-kapasia' ]);
