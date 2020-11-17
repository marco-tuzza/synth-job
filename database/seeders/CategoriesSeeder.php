<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1, 'category_name' => 'Agricoltura e allevamento'],
            ['id' => 2, 'category_name' => 'Ambiente e tutela del territorio'],
            ['id' => 3, 'category_name' => 'Amministrazione, finanza e controllo d’impresa'],
            ['id' => 4, 'category_name' => 'Artigianato artistico'],
            ['id' => 5, 'category_name' => 'Attività commerciale'],
            ['id' => 6, 'category_name' => 'Audiovisivi e spettacolo'],
            ['id' => 7, 'category_name' => 'Beni culturali'],
            ['id' => 8, 'category_name' => 'Chimica'],
            ['id' => 9, 'category_name' => 'Commerciale e marketing'],
            ['id' => 10, 'category_name' => 'Comunicazione e giornalismo'],
            ['id' => 11, 'category_name' => 'Edilizia e urbanistica'],
            ['id' => 12, 'category_name' => 'Educazione e formazione'],
            ['id' => 13, 'category_name' => 'Gestione risorse umane'],
            ['id' => 14, 'category_name' => 'Grafica ed editoria'],
            ['id' => 15, 'category_name' => 'Grande distribuzione'],
            ['id' => 16, 'category_name' => 'Industria agroalimentare'],
            ['id' => 17, 'category_name' => 'Informatica ed elettronica'],
            ['id' => 18, 'category_name' => 'Metalmeccanica'],
            ['id' => 19, 'category_name' => 'Moda e abbigliamento'],
            ['id' => 20, 'category_name' => 'Non profit'],
            ['id' => 21, 'category_name' => 'Pubblica amministrazione'],
            ['id' => 22, 'category_name' => 'Pubblicità'],
            ['id' => 23, 'category_name' => 'Ristorazione e alimentazione'],
            ['id' => 24, 'category_name' => 'Servizi finanziari e assicurativi'],
            ['id' => 25, 'category_name' => 'Servizi sanitari'],
            ['id' => 26, 'category_name' => 'Servizi sociali'],
            ['id' => 27, 'category_name' => 'Sport'],
            ['id' => 28, 'category_name' => 'Telecomunicazioni'],
            ['id' => 29, 'category_name' => 'Trasporti'],
            ['id' => 30, 'category_name' => 'Turismo, ospitalità e tempo libero'],
            ['id' => 31, 'category_name' => 'Altro'],
        ];
        
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
