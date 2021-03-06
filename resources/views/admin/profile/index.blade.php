@extends('layouts.admin')
@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Профил</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Искать!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <profile-index
            profile_data="{{json_encode($profile)}}"
            />

        </div>
    </div>



@endsection
