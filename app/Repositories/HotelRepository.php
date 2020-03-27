<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Hotels;

class HotelRepository implements HotelInterface
{
    public function addHotel($hotelFields)
    {
        $hotel = new Hotels();
        $hotel->h_name = $hotelFields['name'];
        $hotel->h_description = $hotelFields['description'];
        $hotel->h_admin = $user = auth()->user()->id;
        $hotel->h_stars = $hotelFields['stars'];
        $hotel->h_country = $hotelFields['country'];
        $hotel->h_city = $hotelFields['city'];
        $hotel->h_address = $hotelFields['address'];
        $hotel->save();
        return $hotel->id;
    }

    public function hotelsByStars()
    {
        $hotel = DB::table('hotels')
//                ->where('h_stars', 5)
                ->orderBy( 'h_stars','desc')
                ->orderBy( 'created_at','desc')
                ->limit(5)
                ->get();
        return $hotel;
    }
}
