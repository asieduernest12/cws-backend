<?php

namespace Database\Seeders;

use App\Models\Constituency;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GhanaRegionsAndConstituenciesSeeder extends Seeder
{
    protected $ghanaData = [
        'Greater Accra' => [
            'Ablekuma Central', 'Ablekuma North', 'Ablekuma South', 'Ablekuma West',
            'Abokobi-Madina', 'Ayawaso Central', 'Ayawaso East', 'Ayawaso North',
            'Ayawaso West Wuogon', 'Dade Kotopon', 'Dome Kwabenya', 'Klottey Korle',
            'Ledzokuku', 'Ningo Prampram', 'Okaikoi Central', 'Okaikoi North',
            'Okaikoi South', 'Shai Osudoku', 'Tema Central', 'Tema East',
            'Tema West', 'Weija Gbawe',
        ],
        'Ashanti' => [
            'Adansi Asokwa', 'Afigya Kwabre North', 'Afigya Kwabre South',
            'Afigya Sekyere East', 'Ahafo Ano North', 'Ahafo Ano South East',
            'Ahafo Ano South West', 'Akrofuom', 'Asante Akim Central',
            'Asante Akim North', 'Asante Akim South', 'Asokwa', 'Atwima Kwanwoma',
            'Atwima Mponua', 'Atwima Nwabiagya North', 'Atwima Nwabiagya South',
            'Bantama', 'Bekwai', 'Bosome Freho', 'Bosomtwe',
        ],
        'Western' => [
            'Ahanta West', 'Amenfi Central', 'Amenfi East', 'Amenfi West',
            'Ellembelle', 'Evalue-Ajomoro-Gwira', 'Jomoro', 'Kwesimintsim',
            'Mpohor', 'Prestea Huni-Valley', 'Sekondi', 'Shama', 'Takoradi',
            'Tarkwa-Nsuaem',
        ],
        'Central' => [
            'Abura-Asebu-Kwamankese', 'Agona East', 'Agona West',
            'Ajumako-Enyan-Esiam', 'Asikuma-Odoben-Brakwa', 'Assin Central',
            'Assin North', 'Assin South', 'Awutu Senya', 'Awutu Senya East',
            'Cape Coast North', 'Cape Coast South', 'Effutu', 'Ekumfi',
            'Gomoa Central', 'Gomoa East', 'Gomoa West', 'Hemang-Lower-Denkyira',
            'KEEA (Komenda-Edina-Eguafo-Abirem)', 'Mfantseman', 'Twifo-Atti-Morkwa',
            'Twifo-Heman-Lower-Denkyira', 'Upper Denkyira East', 'Upper Denkyira West',
        ],
        'Eastern' => [
            'Abetifi', 'Abirem', 'Achiase', 'Afram Plains North', 'Afram Plains South',
            'Akim Oda', 'Akim Swedru', 'Akim Tafo', 'Akwatia', 'Akyemansa',
            'Asene-Manso-Akroso', 'Atiwa East', 'Atiwa West', 'Ayensuano',
            'Birim Central', 'Birim North', 'Birim South', 'Bokuruwa', 'Bosome-Freho',
            'Denkyembour', 'Fanteakwa North', 'Fanteakwa South', 'Kade',
            'Kwahu Afram Plains North', 'Kwahu Afram Plains South', 'Kwahu East',
            'Kwahu South', 'Kwahu West', 'Lower Manya Krobo', 'Mpraeso',
            'New Juaben North', 'New Juaben South', 'Nkawkaw', 'Nsawam-Adoagyiri',
            'Okere', 'Suhum', 'Upper Manya Krobo', 'Upper West Akim', 'Yilo Krobo',
        ],
        'Volta' => [
            'Adaklu', 'Afadjato South', 'Agotime-Ziope', 'Akatsi North',
            'Akatsi South', 'Anlo', 'Central Tongu', 'Ho Central', 'Ho West',
            'Hohoe', 'Keta', 'Ketu North', 'Ketu South', 'Kpando', 'North Dayi',
            'North Tongu', 'South Dayi', 'South Tongu',
        ],
        'Oti' => [
            'Akan', 'Buem', 'Jasikan', 'Kadjebi', 'Krachi East', 'Krachi Nchumuru',
            'Krachi West', 'Nkwanta North', 'Nkwanta South',
        ],
        'Western North' => [
            'Aowin', 'Bia East', 'Bia West', 'Bibiani-Anhwiaso-Bekwai', 'Bodi',
            'Juaboso', 'Sefwi-Akontombra', 'Sefwi-Wiawso', 'Suaman',
        ],
        'Upper West' => [
            'Daffiama-Bussie-Issa', 'Jirapa', 'Lambussie', 'Lawra', 'Nadowli-Kaleo',
            'Nandom', 'Sissala East', 'Sissala West', 'Wa Central', 'Wa East', 'Wa West',
        ],
        'Upper East' => [
            'Bawku Central', 'Bawku West', 'Binduri', 'Bolgatanga Central',
            'Bolgatanga East', 'Bongo', 'Garu', 'Kasena-Nankana East',
            'Kasena-Nankana West', 'Nabdam', 'Pusiga', 'Talensi', 'Tempane', 'Zebilla',
        ],
        'Savannah' => [
            'Bole/Bamboi', 'Damongo', 'Daboya/Mankarigu', 'Salaga North',
            'Salaga South', 'Yapei/Kusawgu',
        ],
        'Northern' => [
            'Bimbilla', 'Bincheratanga', 'Gushegu', 'Karaga', 'Kpandai', 'Kumbungu',
            'Mion', 'Nalerigu', 'Nanton', 'Saboba', 'Sagnarigu', 'Savelugu',
            'Tamale Central', 'Tamale North', 'Tamale South', 'Tatale-Sanguli',
            'Tolon', 'Wulensi', 'Yendi', 'Zabzugu',
        ],
        'North East' => [
            'Bunkpurugu', 'Chereponi', 'Nalerigu/Gambaga', 'Walewale',
            'Yagaba-Kubori', 'Yunyoo',
        ],
        'Ahafo' => [
            'Asunafo North', 'Asunafo South', 'Asutifi North', 'Asutifi South',
            'Tano North', 'Tano South',
        ],
        'Bono' => [
            'Berekum East', 'Berekum West', 'Dormaa Central', 'Dormaa East',
            'Dormaa West', 'Jaman North', 'Jaman South', 'Sunyani East',
            'Sunyani West', 'Tain', 'Wenchi',
        ],
        'Bono East' => [
            'Atebubu-Amantin', 'Kintampo North', 'Kintampo South', 'Nkoranza North',
            'Nkoranza South', 'Pru East', 'Pru West', 'Sene East', 'Sene West',
            'Techiman North', 'Techiman South',
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            foreach ($this->ghanaData as $regionName => $constituencies) {
                $region = Region::firstOrCreate(['name' => $regionName]);

                foreach ($constituencies as $constituencyName) {
                    Constituency::firstOrCreate([
                        'name' => $constituencyName,
                        'region_id' => $region->id,
                    ]);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error seeding Ghana regions and constituencies: ' . $e->getMessage());
            throw $e;
        }

        $regionsCount = Region::count();
        $constituenciesCount = Constituency::count();
        Log::info("Seeded $regionsCount regions and $constituenciesCount constituencies.");
    }
}
