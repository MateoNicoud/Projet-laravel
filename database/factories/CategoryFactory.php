<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $imageIndex = 0;
        // Chemin vers votre répertoire d'images
        $imagesDirectory = '/assets/img/';
        $imagesFiles = [
            'image1.webp',
            'image2.webp',
            'image3.webp',
            'image4.webp',
            'image5.webp',
            'image6.webp',
            'image7.webp',
            'image8.webp',
            'image9.webp',
            'image10.webp',
        ];
        $categoriesName = [
            'COUTEAUX / HACHES',
            'SAC ET TRANSPORT',
            'TENTE',
            'ORIENTATION',
            'COUCHAGE',
            'SECOURS / SOIN',
            'FEU',
            'MONTRE',
            'VÊTEMENT',
            'REPAS / ACCESSOIRES REPAS'
        ];
        $slugsName = [
            'couteaux-haches',
            'sac-et-transport',
            'tente',
            'orientation',
            'couchage',
            'secours-soin',
            'feu',
            'montre',
            'vetement',
            'repas-accesoires-repas'
        ];
        $categoryName = $categoriesName[$imageIndex];
        $slugName = $slugsName[$imageIndex];
        $imagePath = $imagesDirectory.$imagesFiles[$imageIndex];
        $imageIndex++;
        // Réinitialiser l'index si on atteint la fin de la liste des fichiers
        if ($imageIndex >= count($imagesFiles)) {
            $imageIndex = 0;
        }
        return [
            'name' => $categoryName,
            'img' => $imagePath,
            'slug' => $slugName
        ];
    }
}
