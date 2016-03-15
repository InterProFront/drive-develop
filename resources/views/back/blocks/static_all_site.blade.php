@extends('back.layout')
@section('content')
    <div class="block ">
        <label class="input-file">
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="logo" data-field-type="image"
                           data-block="static_all_site" value="{{$static_all_site->logo_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="logo" data-field-type="image"
                           data-block="static_all_site" value="{{$static_all_site->logo_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="logo" data-field-type="image"
                           data-block="static_all_site" value="{{$static_all_site->logo_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="logo" data-field-type="image"
                           data-block="static_all_site" value="{{$static_all_site->logo_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="logo" data-field-type="image"
                           data-block="static_all_site" value="{{$static_all_site->logo_image->icon_link}}">
                </div>
                <img src="/images/{{$static_all_site->logo_image->preview_link}}" class="preview" data-field-name="logo"
                     data-block="static_all_site">
                <input type="text" placeholder="alt текст" class="alt-text"
                       value="{{$static_all_site->logo_image->alt}}" data-field-name="logo"
                       data-block="static_all_site">
                <label class="file-input">
                    Картинка
                    <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                           data-field-name="logo" data-field-type="image" data-block="static_all_site">
                </label>
            </div>
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="vk" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->vk_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="fb" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->fb_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="inst" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->inst_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->page_title_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <ul class="group-block group_container" data-block="static_all_site" data-group="phones" data-owner-id="0">
                @foreach($static_all_site->phones_group as $item_phones )
                    @include('back.blocks.groupitems.static_all_site.phones')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_all_site" data-group="phones" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <ul class="group-block group_container" data-block="static_all_site" data-group="sponsors"
                data-owner-id="0">
                @foreach($static_all_site->sponsors_group as $item_sponsors )
                    @include('back.blocks.groupitems.static_all_site.sponsors')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_all_site" data-group="sponsors" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="static_all_site" data-entity="block"
                data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection