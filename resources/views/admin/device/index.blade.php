@extends('layouts.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">

                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Таблица <small>звонков</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">

                                        <th class="column-title">Номер абонента</th>
                                        <th class="column-title">Минут</th>
                                        <th class="column-title">Тип</th>
                                        <th class="column-title">Страна</th>
                                        <th class="column-title">Город</th>
                                        <th class="column-title">Стоимость</th>
                                        <th class="column-title">Дата</th>
                                        <th class="column-title">Коммент</th>

                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr class="even pointer">
                                        <td class="pl-3">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>

                                    <tr class="even pointer">
                                        <td class="pl-3">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="pl-3">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>

                                    <tr class="even pointer">
                                        <td class="pl-3">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="pl-3">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>

                                    <tr class="even pointer">
                                        <td class="pl-3">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">+7 999 758 77 77</td>
                                        <td class=" ">5</td>
                                        <td class=" ">Междугородный</td>
                                        <td class=" ">Россия</td>
                                        <td class=" ">Казань</td>
                                        <td class=" ">$50,3</td>
                                        <td class=" "> 23.03.2020 11:47:56 PM </td>
                                        <td class=" ">Нет коммента <i class="success fa fa-long-arrow-up"></i></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
