<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Song;
use App\Album;
use App\Artist;
use App\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(MenusTableSeeder::class);

    }
}
