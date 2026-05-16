<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class WBTKoreaNewProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wbtBrand = Brand::where('name', 'WBTKorea')->first();

        if (!$wbtBrand) {
            $this->command->error('Brand WBTKorea not found!');
            return;
        }

        // Elastic
        $elastic = Product::create([
            'brand_id' => $wbtBrand->id,
            'name' => 'Elastic',
            'description' => "•Only prime medical grade latex meets our standards for manufacturing our intraoral elastics.\n\n•WBT Elastics are perfectly formed and accurately cut which assures consistent force levels.\n\n•A unique manufacturing process eliminates the heavy use of talc.\n\n•Each box contains 50 individual patient bags of 100 elastics, a total of 5,000 elastics.\n\n•This product contains natural rubber latex which may cause allergic reactions.",
            'stock' => 100,
            'is_hidden' => false,
        ]);

        ProductImage::create([
            'product_id' => $elastic->id,
            'image_path' => 'product_images/elastic.png',
        ]);

        // Pliers
        $pliers = Product::create([
            'brand_id' => $wbtBrand->id,
            'name' => 'Pliers',
            'description' => "Cutters, Utility Pliers, Wire Bending Pliers, Removing Pliers, and Other Pliers",
            'stock' => 50,
            'is_hidden' => false,
        ]);

        ProductImage::create([
            'product_id' => $pliers->id,
            'image_path' => 'product_images/pliers.png',
        ]);

        $this->command->info('Elastic and Pliers added to WBTKorea brand successfully!');
    }
}
