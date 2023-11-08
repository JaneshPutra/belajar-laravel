<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {







        
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data =[
        //     ['name' => 'Darsam', 'gender'=>'L', 'nis'=>'5132', 'class_id' =>4],
        //     ['name' => 'Agos', 'gender'=>'L', 'nis'=>'6543', 'class_id' =>1],
        //     ['name' => 'Rusmiati', 'gender'=>'P', 'nis'=>'1243', 'class_id' =>3],
        //     ['name' => 'Yono', 'gender'=>'L', 'nis'=>'9876', 'class_id' =>2],
        // ];  

        // foreach ($data as $value){
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender'=>$value['gender'],
        //         'nis'=>$value['nis'],
        //         'class_id'=>$value['class_id'],
        //         'created_at'=> Carbon::now(),
        //         'updated_at'=> Carbon::now()
        //     ]);
        // }
    }
}
