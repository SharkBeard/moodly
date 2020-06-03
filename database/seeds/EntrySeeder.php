<?php

use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Models\Entry::class, 10)->create()/*->each(function ($entry) {
        //$entry->comments()->save(factory(App\Comment::class)->make());
      })*/;
    }
}
