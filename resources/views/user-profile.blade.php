@extends('layouts.app')
<link rel="stylesheet" href="css/user.css">
@section('content')
    <div class="container" style="background-color: lightgrey;padding-top: 50px;">
        <div class="d-flex justify-content-center">
            <div class="image_outer_container">
                <div class="image_inner_container">
                    <img src="https://i.pinimg.com/originals/43/96/61/439661dcc0d410d476d6d421b1812540.jpg">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center info-section">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="username-tag">@lang('messages.name')</span>
                    </div>
                    <input placeholder="@lang('messages.name')" id="username" value="{{ $userData->name }}" type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email-tag">@lang('messages.email')</span>
                    </div>
                    <input  placeholder="@lang('messages.email')" id="email" value="{{ $userData->email }}" type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend input-group-name">
                        <span class="input-group-text" id="phone-tag">@lang('messages.phone')</span>
                    </div>
                    <input placeholder="@lang('messages.phone')" id="phone" value="{{ !empty($userData->phone) ? $userData->phone : ''}}" type="text" class="form-control" disabled>
                </div>
            </div>

        </div>
    </div>
@endsection
