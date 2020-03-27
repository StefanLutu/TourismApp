<?php

namespace App\Http\Controllers;

use App\Repositories\HotelRepository;
use App\User;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;
    protected $hotelRepository;

    public function __construct(Repository $repository, HotelRepository $hotelRepository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
        $this->hotelRepository = $hotelRepository;
    }

    public function getUserProfile(Request $request)
    {
        $userId = $request->input('userId');
        $userData = $this->repository->getUserById($userId);

        return view('user-profile', compact('userData'));
    }


}
