<?php

namespace App\Http\Controllers;

use App\Repositories\HotelRepository;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
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

}
