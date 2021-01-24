@extends('layouts.admin_master')
@section('title','UpdateTransportCost')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
        <div class="mdl-card__title">
            <h2>Update Transport Cost</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="create-page mdl-card__supporting-text">
            <form action="{{action('Admin\TransportCostController@update')}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$transcost->id}}"/>
                <div class="form__article">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <select name="transport_type_id" class="place">
                                <option value=""> Select a Transport Type </option>
                                @foreach ($transtypes as $transtype)
                                <option value="{{$transtype->id}}" @if ($transcost->transport_type_id == $transtype->id) selected @endif> {{$transtype->type}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="from" value="{{$transcost->from}}"/>
                            <label class="mdl-textfield__label">From</label>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="to" value="{{$transcost->to}}"/>
                            <label class="mdl-textfield__label">To</label>
                        </div>
                </div>
                <div class="form__action">
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        update
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection