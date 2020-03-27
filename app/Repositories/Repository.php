<?php namespace App\Repositories;
use Illuminate\Support\Facades\DB;

class Repository implements RepositoryInterface
{

    public function currentUser()
    {
        return DB::table('users')
            ->where('id', Auth()->user()->id)
            ->first();
    }

    public function getUserById($userId)
    {
        return DB::table('users')
            ->where('id', $userId)
            ->first();
    }


}
