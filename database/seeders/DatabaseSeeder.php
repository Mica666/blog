<?php

namespace Database\Seeders;

use App\Models\category;
use Database\Factories\postsfactoryFactory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\TagFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call(userseeder::class);
    category::factory(4)->Create();
    TagFactory::factory(8)->create();
    postsfactoryFactory::factory(180)->create();
    }
}
