@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/home.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div>
                    <h2 class="card-header">@lang('messages.most-appriciated-hotels')</h2>
                    @if(!empty($hotels))
                        @foreach($hotels as $hotel)
                            <div class="hotel-element">
                                @foreach($hotel->images as $img)
                                    <img class="card-img-top" src="{{ $img }}" alt="asdas">
                                    @break
                                @endforeach
                                <div class="card-body">
                                    <h5 class="card-title">{{ $hotel->h_name }}</h5>
                                    @if(!empty($hotel->h_stars))
                                        <div class="rating-container">
                                            @for($i=0; $i<intval($hotel->h_stars); $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                        </div>
                                    @endif
                                    <p class="card-text">{{ $hotel->h_description }}</p>
                                    <a href="#" class="btn btn-primary">@lang('messages.learn-more')</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
