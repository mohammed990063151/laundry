<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(ClientsTableSeeder::class);
         $this->call(SettingSeeder::class);
         $this->call(SectionSeeder::class);
         $this->call(AboutSeeder::class);
         $this->call(WhyUsSeeder::class);
         $this->call([
    GallerySettingSeeder::class,
    GalleryItemSeeder::class,
]);
$this->call(ServiceSeeder::class);
$this->call(CounterSeeder::class);
// database/seeders/DatabaseSeeder.php
$this->call([
    CompanyAboutSeeder::class,
]);
$this->call([
    PagserviceSeeder::class,
]);
$this->call([
    ModyafServiceSeeder::class,
]);

 $this->call([
        CompanyBranchSeeder::class,
        ContactSettingSeeder::class,
        ContactMessageSeeder::class,
    ]);
$this->call([
        ProjectSeeder::class,
    ]);



    $this->call(BonaPageSeeder::class);

    }//end of run

}//end of seeder
