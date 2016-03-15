@extends('back.layout')
@section('content')
<div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image" data-block="contacts" value="{{$contacts->head_image->preview_link}}">
        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image" data-block="contacts" value="{{$contacts->head_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image" data-block="contacts" value="{{$contacts->head_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image" data-block="contacts" value="{{$contacts->head_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image" data-block="contacts" value="{{$contacts->head_image->icon_link}}">
    </div>
    <img src="/images/{{$contacts->head_image->preview_link}}" class="preview" data-field-name="head" data-block="contacts">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$contacts->head_image->alt}}" data-field-name="head" data-block="contacts">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*" class="input_file block_field"  data-entity="block" data-field-name="head" data-field-type="image" data-block="contacts">
    </label>
</div>
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="name" data-block="contacts" class="input block_field" value="{{$contacts->name_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="about" data-block="contacts" class="input block_field" placeholder="Текст">{{$contacts->about_field}}</textarea>
</label>
</div>
<div class="block buttons">
<button class="btn btn-primary pull-right any_save" data-block="contacts" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
@endsection