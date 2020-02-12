<?php


namespace App\Repositories;


use Illuminate\Support\Facades\DB;

class StudentRepository
{

    public function all()
    {
        return  DB::table('students')->orderBy('created_at', 'desc')->paginate(5);

    }

}
