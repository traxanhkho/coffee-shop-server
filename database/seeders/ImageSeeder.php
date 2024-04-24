<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $fake_images = [
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 1 , "path" => "https://www.costa.co.uk/static/pim/f/3/f/7/f3f7a6ec94bf5cf0e33abe514868baf9f8b5e416_cortado_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 2 ,"path" => "https://www.costa.co.uk/static/pim/6/7/2/0/6720302656ef87ab8934f72e3c4348d8ede7c36c_spiced_cappuccino_thumb.jpg"] , 
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 3 , "path" => "https://www.costa.co.uk/static/pim/4/4/2/f/442f30d07de52a00aefb8990ce8982b9874bd238_Latte_Thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 4 , "path" => "https://www.costa.co.uk/static/pim/6/a/6/6/6a66b76e983028e48fa7364d93cdbf7105387f1c_mint_choc_chip_frostino_with_cream_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 5 , "path" => "https://www.costa.co.uk/static/pim/8/0/3/b/803b0a715b62363f2ba8e486f7e7984c24427c7e_salted_caramel_crunch_frostino_with_cream_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 6 , "path" => "https://www.costa.co.uk/static/pim/d/c/7/2/dc728e18733b915c2601e85faeba895a95432163_Strawberries___Cream_Frostino_With_Cream_Thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 7 , "path" => "https://www.costa.co.uk/static/pim/c/1/7/7/c177801bf092440c84dcc739edcae80f6b2ccfe5_toast_brown_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 8 , "path" => "https://www.costa.co.uk/static/pim/c/9/4/d/c94d934e85e86c1c1ec4f5454f1c17fc64c09c16_toast_white_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 9 , "path" => "https://www.costa.co.uk/static/pim/0/0/0/3/0003f3d9624763cb3666fc68bde84fcaf1a8b45c_fruited_teacake_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 10 , "path" => "https://www.costa.co.uk/static/pim/1/5/1/3/15136d0f218b7a64efe460d0dd6353e6af5b19f2_chocolate_twist_thumb.png"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 11 , "path" => "https://www.costa.co.uk/static/pim/d/2/7/7/d27739f0ff720de3ed3914dc7a3150eb66249fc3_pecan_danish_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 12 , "path" => "https://www.costa.co.uk/static/pim/7/c/d/7/7cd7714ff33f674ae36702d2b20fa71c00d088d2_Improved_Pain_Aux_Raisin_Thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 13 , "path" => "https://www.costa.co.uk/static/pim/b/1/e/1/b1e1fa8dc4902634091364d713b6c8d77f246c8b_ham_cheese_toastie_marked_thumb.png"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 14 , "path" => "https://www.costa.co.uk/static/pim/f/f/2/2/ff224aeb737aaedb0a1ba755d577717029b32637_tuna_melt_panini_thumb.jpg"],
            ["imageable_type" => "App\Models\Product" , "imageable_id" => 15 , "path" => "https://www.costa.co.uk/static/pim/f/8/e/b/f8eb3875a47024a44fcea70c27e58725b1f99bb3_vegan_bac_n_thumb__1_.png"],

        ];

        DB::table((new Image)->getTable())->insert($fake_images);
    }
}
