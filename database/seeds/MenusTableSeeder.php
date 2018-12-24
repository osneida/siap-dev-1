<?php
use App\Menu;
use Illuminate\Database\Seeder;
class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
    {
        $m1 = factory(Menu::class)->create([
            'name' => '1',
            'slug' => '1',
            'parent' => 0,
            'menuorder' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => '2',
            'slug' => '2',
            'parent' => 0,
            'menuorder' => 1,
        ]);
        $m3 = factory(Menu::class)->create([
            'name' => '3',
            'slug' => '3',
            'parent' => 0,
            'menuorder' => 1,
        ]);
        $m4 = factory(Menu::class)->create([
            'name' => '4',
            'slug' => '4',
            'parent' => 0,
            'menuorder' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => '1-1',
            'slug' => '1.1',
            'parent' => $m1->id,
            'menuorder' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => '1-2',
            'slug' => '1.2',
            'parent' => $m1->id,
            'menuorder' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => '3-1',
            'slug' => '3.1',
            'parent' => $m3->id,
            'menuorder' => 0,
        ]);
        $m32 = factory(Menu::class)->create([
            'name' => '3-2',
            'slug' => '3.2',
            'parent' => $m3->id,
            'menuorder' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => '4-1',
            'slug' => '4.1',
            'parent' => $m4->id,
            'menuorder' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => '3-2-1',
            'slug' => '3.2-1',
            'parent' => $m32->id,
            'menuorder' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => '3-2-2',
            'slug' => '3.2-2',
            'parent' => $m32->id,
            'menuorder' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => '3-2-3',
            'slug' => '3.2-3',
            'parent' => $m32->id,
            'menuorder' => 2,
        ]);
    }
}
