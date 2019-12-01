<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = $this->repository->currentUser();
        return view('home', compact('currentUser'));
    }

    public function addHotel()
    {
        $currentUser = $this->repository->currentUser();
        return view('add-hotel');
    }

    public function saveHotel(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'file' => 'image',
            ],
            [
                'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
            ]);
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->errors()
            );
        $files = [];
//        dd($request->file());
        dd(empty($request->file()));
        if($request->files) {
            foreach($request->file() as $file) {
                $dir = 'public/images/';
                $imagename = $file->getClientOriginalName();
                dd($imagename);
                $filename = uniqid() . '_' . time() . '.' . $imagename;
                $file->move($dir, $filename);
                $files[] = $dir.$filename;
            }
        }
        return 'success';
    }
}
