<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            "product_name" => "Toraja Coffee",
            "orientation" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci porro debitis eius deserunt odio, repudiandae ad repellendus laboriosam nobis sed?",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
            "price" => 500,
            "stock" => 120,
            "discount" => 50,
            "image" => "C:\Users\navee\OneDrive\Desktop\coffee.jpg",
        ]);

        Product::create([
            "product_name" => "Arabica Cofffffffee",
            "orientation" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci porro debitis eius deserunt odio, repudiandae ad repellendus laboriosam nobis sed?",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
            "price" => 350,
            "stock" => 60,
            "discount" => 0,
            // "image" => "C:\Users\navee\OneDrive\Desktop\coffee.jpg",
        ]);

        Product::create([
            "product_name" => "Robusta Coffee",
            "orientation" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci porro debitis eius deserunt odio, repudiandae ad repellendus laboriosam nobis sed?",
            "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
            "price" => 550,
            "stock" => 70,
            "discount" => 100,
            "image" => "C:\Users\navee\OneDrive\Desktop\coffee.jpg",
        ]);
    }
}
