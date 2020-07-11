<?php


use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\product;
use App\category;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         for($i = 1;$i<= 4; $i++){
            product::create([
    'name'=> 'labtop '.$i,
    'slug'=> 'labtop'.$i,            
    'details' => ['hp ','dell ','apple '][array_rand(['hp ','dell ','apple '])]            . ['16','17','18'][array_rand(['16','17','18'])]. 'inch, hardesk 500 GBM, 8RAM ',
    'price' => rand(2000,1000),
    'desc' => ' new labtop with new fetuares and hight speed, good specification',
            'product_image'=>'storage/cover_images/labtop'.$i.'.jpg'])->categories()->attach(1);      
         }
        $product = product::find(1);
        $product->categories()->attach(2);
         $product1 = product::find(2);
        $product1->categories()->attach(2);
        
              for($i = 1;$i<= 4; $i++){
                product::create([
    'name'=> 'desktop '.$i,
    'slug'=> 'desktop'.$i,            
    'details' => ['hp ','dell ','apple '][array_rand(['hp ','dell ','apple '])]            . ['26','25','24'][array_rand(['26','25','24'])]. 'inch, hardesk 750 GB, 16RAM ',
    'price' => rand(2000,1000),
    'desc' => ' new desktop with new fetuares and hight speed, good specification',
            ])->categories()->attach(2);
        }
             
            for($i = 1;$i<= 4; $i++){
            product::create([
    'name'=> 'phone '.$i,
    'slug'=> 'phone'.$i,            
    'details' => ['galagsy ','oppo ','htc ','sony'][array_rand(['galagsy ','oppo ','htc ','sony'])]   . ['6','7','8'][array_rand(['6','7','8'])]. 'inch, 64 Memory, 16RAM ',
    'price' => rand(2000,1000),
    'desc' => ' new mobile phone with new fetuares and hight speed, modern design',
            ])->categories()->attach(3);
        }   
          for($i = 1;$i<= 4; $i++){
            product::create([
    'name'=> 'camera '.$i,
    'slug'=> 'camera'.$i,            
    'details' => ['nikon ','coneca ','sony'][array_rand(['nikon ','coneca ','sony'])]            . 'small size, interal memory 16GB,  ',
    'price' => rand(2000,1000),
    'desc' => ' modern camera with new fetuares high quality shot, modern design',
            ])->categories()->attach(4);
        }   
                 
          for($i = 1;$i<= 4; $i++){
            product::create([
    'name'=> 'printer '.$i,
    'slug'=> 'printer'.$i,            
    'details' => ['richo ','coneca ','sharp'][array_rand(['richo ','coneca ','sharp'])]            .['color ','black '][array_rand(['color ','black '])]. 'small size, interal memory 16GB,  ',
    'price' => rand(2000,1000),
    'desc' => ' modern printer with new fetuares high quality and less mantinace, long live',
            ])->categories()->attach(5);
        }   
        
        
        
        }
    }

