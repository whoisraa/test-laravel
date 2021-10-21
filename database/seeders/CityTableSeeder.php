<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `cities` (`id`, `province_id`, `name`, `type`, `postal_code`, `created_at`, `updated_at`) VALUES
        (1, 21, 'Aceh Barat', 'Kabupaten', '23681', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (2, 21, 'Aceh Barat Daya', 'Kabupaten', '23764', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (3, 21, 'Aceh Besar', 'Kabupaten', '23951', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (4, 21, 'Aceh Jaya', 'Kabupaten', '23654', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (5, 21, 'Aceh Selatan', 'Kabupaten', '23719', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (6, 21, 'Aceh Singkil', 'Kabupaten', '24785', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (7, 21, 'Aceh Tamiang', 'Kabupaten', '24476', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (8, 21, 'Aceh Tengah', 'Kabupaten', '24511', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (9, 21, 'Aceh Tenggara', 'Kabupaten', '24611', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (10, 21, 'Aceh Timur', 'Kabupaten', '24454', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (11, 21, 'Aceh Utara', 'Kabupaten', '24382', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (12, 32, 'Agam', 'Kabupaten', '26411', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (13, 23, 'Alor', 'Kabupaten', '85811', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (14, 19, 'Ambon', 'Kota', '97222', '2019-08-29 12:55:53', '2019-08-29 12:55:53'),
        (15, 34, 'Asahan', 'Kabupaten', '21214', '2019-08-29 12:55:53', '2019-08-29 12:55:53');");
    }
}
