@extends('back.layout')
@section('content')
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="mail_rec" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_rec_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="mail_username" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_username_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="site_name" data-block="fidback"
                   class="input block_field" value="{{$fidback->site_name_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <ul class="group-block group_container" data-block="fidback" data-group="registration" data-owner-id="0">
                @foreach($fidback->registration_group as $item_registration )
                    @include('back.blocks.groupitems.fidback.registration')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="registration" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="fidback" data-entity="block" data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection