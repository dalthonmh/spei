<?php

use App\Equipo;
use App\Categoria;
use App\Marca;
use App\User;
use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::truncate();
        Categoria::truncate();
        Marca::truncate();
        User::truncate();

        Categoria::create(['nombre' => 'proyectores']);
        Marca::create(['nombre' => 'epson']);
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'administrador',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $equipos = new Equipo;
        $equipos->nombre = "proyector 01";
        $equipos->estado = 0;
        $equipos->categoria_id = 1;
        $equipos->marca_id = 1;
        $equipos->save();

        $equipos = new Equipo;
        $equipos->nombre = "proyector 02";
        $equipos->estado = 0;
        $equipos->categoria_id = 1;
        $equipos->marca_id = 1;
        $equipos->save();

        // $equipos->categoria()->sync(Categoria::create(['nombre' => 'proyectores']));
        // $equipos->marca()->sync(Marca::create(['nombre' => 'epson']));

    }
}
