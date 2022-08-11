<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosPokemonG1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemong1')->insert(array(
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png',
                'name'=> 'Bulbasaur',
                'type1'=> 'Planta',
                'type2'=> 'Veneno',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Planta',
                'japanese'=> 'フシギダネ',
                'romanized'=> 'Fushigidane'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png',
                'name'=> 'Ivysaur',
                'type1'=> 'Planta',
                'type2'=> 'Veneno',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Planta',
                'japanese'=> 'フシギソウ',
                'romanized'=> 'Fushigisō'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png',
                'name'=> 'Venusaur',
                'type1'=> 'Planta',
                'type2'=> 'Veneno',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Planta',
                'japanese'=> 'フシギバナ',
                'romanized'=> 'Fushigibana'
            ],
            [
                'image'=> 'https://pm1.narvii.com/7833/9fe8f8a6f58dc2c643dd1e04982ffdba0bc30a88r1-927-1044v2_hq.jpg',
                'name'=> 'Charmander',
                'type1'=> 'Fuego',
                'type2'=> 'Fuego',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Dragón',
                'japanese'=> 'ヒトカゲ',
                'romanized'=> 'Hitokage'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png',
                'name'=> 'Charmeleon',
                'type1'=> 'Fuego',
                'type2'=> 'Fuego',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Dragón',
                'japanese'=> 'リザード',
                'romanized'=> 'Rizādo'
            ],
            [
                'image'=> 'https://static.wikia.nocookie.net/35d65408-493d-4381-8dfb-1afa6816f0db',
                'name'=> 'Charizard',
                'type1'=> 'Fuego',
                'type2'=> 'Volador',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Dragón',
                'japanese'=> 'リザードン',
                'romanized'=> 'Rizādon'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png',
                'name'=> 'Squirtle',
                'type1'=> 'Agua',
                'type2'=> 'Agua',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Agua 1',
                'japanese'=> 'ゼニガメ',
                'romanized'=> 'Zenigame'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png',
                'name'=> 'Wartortle',
                'type1'=> 'Agua',
                'type2'=> 'Agua',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Agua 1',
                'japanese'=> 'カメール',
                'romanized'=> 'Kamēru'
            ],
            [
                'image'=> 'https://img.joomcdn.net/3612424ef4446c1d422f60acbbd8c4ccb21090fc_original.jpeg',
                'name'=> 'Blastoise',
                'type1'=> 'Agua',
                'type2'=> 'Agua',
                'eggGroup1'=> 'Monstruo',
                'eggGroup2'=> 'Agua 1',
                'japanese'=> 'カメックス',
                'romanized'=> 'Kamekkusu'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/010.png',
                'name'=> 'Caterpie',
                'type1'=> 'Bicho',
                'type2'=> 'Bicho',
                'eggGroup1'=> 'Bicho',
                'eggGroup2'=> 'Bicho',
                'japanese'=> 'キャタピー',
                'romanized'=> 'Kyatapī'
            ],
            [
                'image'=> 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/011.png',
                'name'=> 'Metapod',
                'type1'=> 'Bicho',
                'type2'=> 'Bicho',
                'eggGroup1'=> 'Bicho',
                'eggGroup2'=> 'Bicho',
                'japanese'=> 'トランセル',
                'romanized'=> 'Toranseru'
            ]
        ));
    }
}
