<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Airline>
 */
class AirlineFactory extends Factory
{
    private static $list = [
        'Aegean Airlines',
        'Aer Lingus',
        'Aeroflot',
        'Aerolineas Argentinas',
        'Aeromexico',
        'Air Arabia',
        'Air Astana',
        'Air Austral',
        'Air Baltic',
        'Air Belgium',
        'Air Canada',
        'Air Caraibes',
        'Air China',
        'Air Corsica',
        'Air Dolomiti',
        'Air Europa',
        'Air France',
        'Air India',
        'Air India Express',
        'Air Macau',
        'Air Malta',
        'Air Mauritius',
        'Air Namibia',
        'Air New Zealand',
        'Air North',
        'Air Seoul',
        'Air Serbia',
        'Air Tahiti Nui',
        'Air Transat',
        'Air Vanuatu',
        'AirAsia',
        'AirAsia X',
        'Aircalin',
        'Alaska Airlines',
        'Alitalia',
        'Allegiant',
        'American Airlines',
        'ANA',
        'Asiana',
        'Austrian',
        'Avianca',
        'Azerbaijan Hava Yollary',
        'Azores Airlines',
        'Azul',
        'Bamboo Airways',
        'Bangkok Airways',
        'British Airways',
        'Brussels Airlines',
        'Caribbean Airlines',
        'Cathay Dragon',
        'Cathay Pacific',
        'Cayman Airways',
        'CEBU Pacific Air',
        'China Airlines',
        'China Eastern',
        'China Southern',
        'Condor',
        'Copa Airlines',
        'Croatia Airlines',
        'Czech Airlines',
        'Delta',
        'easyJet',
        'Edelweiss Air',
        'Egyptair',
        'EL AL',
        'Emirates',
        'Ethiopian Airlines',
        'Etihad',
        'Eurowings',
        'EVA Air',
        'F - O',
        'Fiji Airways',
        'Finnair',
        'flydubai',
        'FlyOne',
        'French bee',
        'Frontier',
        'Garuda Indonesia',
        'Gol',
        'Gulf Air',
        'Hainan Airlines',
        'Hawaiian Airlines',
        'Helvetic Airways',
        'HK Express',
        'Hong Kong Airlines',
        'Iberia',
        'Icelandair',
        'IndiGo Airlines',
        'InterJet',
        'Japan Airlines',
        'Jeju Air',
        'Jet2',
        'JetBlue',
        'Jetstar',
        'Jin Air',
        'Kenya Airways',
        'KLM',
        'Korean Air',
        'Kulula',
        'La Compagnie',
        'LATAM',
        'Lion Airlines',
        'LOT Polish Airlines',
        'Lufthansa',
        'Luxair',
        'Malaysia Airlines',
        'Mango',
        'Middle East Airlines',
        'Nok Air',
        'Nordwind Airlines',
        'Norwegian Air International',
        'Norwegian Air Shuttle',
        'Norwegian Air Sweden',
        'Norwegian Air UK',
        'Oman Air',
        'P - W',
        'Pakistan International Airlines',
        'Peach',
        'Pegasus Airlines',
        'Philippine Airlines',
        'Porter',
        'Qantas',
        'Qatar Airways',
        'Regional Express',
        'Rossiya - Russian Airlines',
        'Royal Air Maroc',
        'Royal Brunei',
        'Royal Jordanian',
        'RwandAir',
        'Ryanair',
        'S7 Airlines',
        'SAS',
        'Saudia',
        'Scoot Airlines',
        'Shanghai Airlines',
        'Silkair',
        'Silver',
        'Singapore Airlines',
        'Skylanes',
        'South African Airways',
        'Southwest',
        'SpiceJet',
        'Spirit',
        'Spring Airlines',
        'Spring Japan',
        'SriLankan Airlines',
        'Sun Country',
        'Sunclass Airlines',
        'Sunwing',
        'SWISS',
        'Swoop',
        'TAAG',
        'TACA',
        'TAP Portugal',
        'THAI',
        'tigerair Australia',
        'Transavia Airlines',
        'TUI UK',
        'TUIfly',
        'Tunis Air',
        'Turkish Airlines',
        'Ukraine International',
        'United',
        'Ural Airlines',
        'UTair Aviation',
        'Uzbekistan Airways',
        'Vietnam Airlines',
        'Virgin Atlantic',
        'Virgin Australia',
        'Vistara',
        'Viva Aerobus',
        'Volaris',
        'Volotea',
        'Vueling Airlines',
        'WestJet',
        'Wizzair',
        'Xiamen Airlines',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('hu_HU')->unique()->randomElement(self::$list),
            'country' => fake()->countryCode()
        ];
    }
}