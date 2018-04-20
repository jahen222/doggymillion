<?php

use Illuminate\Support\Facades\DB;
use App\Dog;
use Faker\Factory;

class RaceSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $statement = "INSERT INTO ".env('DB_PREFIX')."races (id, name) VALUES
          (1, 'Airedale Terrier'),
          (2, 'Akita Americano'),
          (3, 'Akita Inu'),
          (4, 'Alano Español'),
          (5, 'Alaskan Klee Kai'),
          (6, 'Alaskan Malamute'),
          (7, 'American Bully'),
          (8, 'American Pit Bull Terrier'),
          (9, 'American Staffordshire Terrier'),
          (10, 'Azawakh'),
          (11, 'Basenji'),
          (12, 'Basset Hound'),
          (13, 'Beagle'),
          (14, 'Bichon Frise'),
          (15, 'Bichon Maltes'),
          (16, 'Boerboel'),
          (17, 'Border Collie'),
          (18, 'Boston Terrier'),
          (19, 'Bóxer'),
          (20, 'Boyero de Berna'),
          (21, 'Bull Terrier'),
          (22, 'Bulldog Frances'),
          (23, 'Bulldog Inglés'),
          (24, 'Bullmastiff'),
          (25, 'Bully Americano'),
          (26, 'Cairn Terrier'),
          (27, 'Cane Corso'),
          (28, 'Carlino'),
          (29, 'Chihuahua'),
          (30, 'Chin Japones'),
          (31, 'Chow Chow'),
          (32, 'Cocker Spaniel Americano'),
          (33, 'Coton de Tulear'),
          (34, 'Dachshund'),
          (35, 'Dálmata'),
          (36, 'Doberman'),
          (37, 'Dogo Argentino'),
          (38, 'Dogo de Burdeos'),
          (39, 'Dogo del Tíbet'),
          (40, 'Fila Brasilero'),
          (41, 'Galgo Español'),
          (42, 'Galgo Italiano'),
          (43, 'Golden Retriever'),
          (44, 'Gran Danés'),
          (45, 'Greyhound'),
          (46, 'Husky Siberiano'),
          (47, 'Jack Russell Terrier'),
          (48, 'Keeshond'),
          (49, 'Komondor'),
          (50, 'Kuvasz'),
          (51, 'Labrador Retriever'),
          (52, 'Leonberger'),
          (53, 'Lhasa Apso'),
          (54, 'Mastiff'),
          (55, 'Mastín del Pirineo'),
          (56, 'Mastín Español'),
          (57, 'Mastin Napolitano'),
          (58, 'Pastor Alemán'),
          (59, 'Pastor Australiano'),
          (60, 'Pekinés'),
          (61, 'Perdiguero de Burgos'),
          (62, 'Perro de Agua Español'),
          (63, 'Perro de Agua Portugues'),
          (64, 'Perro de Montaña de los Pirineos'),
          (65, 'Perro de San Huberto'),
          (66, 'Perro Esquimal Americano'),
          (67, 'Perro Lobo Checoslovaco'),
          (68, 'Pointer Inglés'),
          (69, 'Pomerania'),
          (70, 'Presa Canario'),
          (71, 'Presa Mallorquin'),
          (72, 'Puli'),
          (73, 'Ratonero Bodeguero Andaluz'),
          (74, 'Rhodesian Ridgeback'),
          (75, 'Rottweiler'),
          (76, 'Saluki'),
          (77, 'Samoyedo'),
          (78, 'San Bernardo'),
          (79, 'Setter Inglés'),
          (80, 'Setter Irlandés Rojo'),
          (81, 'Shar Pei'),
          (82, 'Shiba Inu'),
          (83, 'Shih Tzu'),
          (84, 'Staffordshire Bull Terrier'),
          (85, 'Tamaskan'),
          (86, 'Terranova'),
          (87, 'Terrier Galés'),
          (88, 'Tosa Inu'),
          (89, 'Weimaraner'),
          (90, 'Xoloitzcuintle'),
          (91, 'Yorkshire Terrier');";
      DB::unprepared($statement);

      $faker = Factory::create();
      for($i=0; $i<2000; $i++){
          $dog = Dog::create([
            'name' => $faker->name,
            'image' => '1524194377.jpeg',
            'race_id' => rand(1,10),
            'bio' => $faker->text,
            'gender' => 'Macho',
            'age' => rand(1,10),
            'dead' => false,
            'country_id' => rand(1,10),
            'owner_name' => $faker->name,
            'owner_email' => $faker->email
          ]);
        }
    }
}
