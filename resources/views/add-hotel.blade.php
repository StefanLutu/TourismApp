@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <h2 class="card-header">@lang('messages.add-hotel')</h2>

                    <div class="card-body">
                        <form id="add-hotel-section" enctype="multipart/form-data" role="form">
                            <input type="text" id="hotel-name" placeholder="@lang('messages.hotel-name')">
                            <textarea style="height: 50px;" type="text" id="hotel-description" placeholder="@lang('messages.hotel-description')"></textarea>
                            <div id="add-pictore-section">
                                <div>
                                    <input type="file" id="hotel-img">
                                    <label for="hotel-img">Add file</label>
                                    <div id="add-picture">@lang('messages.add-picture')</div>
                                </div>
                                <div id="save-hotel">@lang('messages.add-hotel')</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/general.js') }}"></script>
@endsection
