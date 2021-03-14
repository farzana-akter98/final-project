@extends('layouts.admin_master')
@section('title','Message')
@section('content')
<main class="mdl-layout__content ">

    <div class="mdl-grid ui-tables">
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">Query Table</h1>
                </div>
                <div class="mdl-card__supporting-text no-padding">
                    <table class="mdl-data-table mdl-js-data-table stripped-table">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">#</th>
                            <th class="mdl-data-table__cell--non-numeric">First Name</th>
                            <th class="mdl-data-table__cell--non-numeric">Last Name</th>
                            <th class="mdl-data-table__cell--non-numeric">Email</th>
                            <th class="mdl-data-table__cell--non-numeric">Question</th>
                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                         @php
                             $i=1
                         @endphp
                         @foreach ($contacts as $item)
                         <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{$i++}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$item->firstname}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$item->lastname}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$item->email}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{str_limit($item->query,20,'...')}} </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="label"><a href="{{action('Admin\ContactController@view_pagecontact',['id'=> $item->id])}}">View</a></span></td>
                        </tr> 
                         @endforeach
                                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection