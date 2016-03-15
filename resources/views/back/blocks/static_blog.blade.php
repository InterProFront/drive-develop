@extends('back.layout')
@section('content')
    <div class="block ">
        <label class="input-file">
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="head" data-field-type="image"
                           data-block="static_blog" value="{{$static_blog->head_image->preview_link}}">
                    <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image"
                           data-block="static_blog" value="{{$static_blog->head_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image"
                           data-block="static_blog" value="{{$static_blog->head_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image"
                           data-block="static_blog" value="{{$static_blog->head_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image"
                           data-block="static_blog" value="{{$static_blog->head_image->icon_link}}">
                </div>
                <img src="/images/{{$static_blog->head_image->preview_link}}" class="preview" data-field-name="head"
                     data-block="static_blog">
                <input type="text" placeholder="alt текст" class="alt-text" value="{{$static_blog->head_image->alt}}"
                       data-field-name="head" data-block="static_blog">
                <label class="file-input">
                    Картинка
                    <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                           data-field-name="head" data-field-type="image" data-block="static_blog">
                </label>
            </div>
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="name" data-block="static_blog"
                   class="input block_field" value="{{$static_blog->name_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_blog"
                   class="input block_field" value="{{$static_blog->page_title_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block">
        <label class="input-file">
            @yield('page')
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="static_blog" data-entity="block" data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection