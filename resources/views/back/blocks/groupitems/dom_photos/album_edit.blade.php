@extends('back.layout')
@section('content')
<li class="group" data-group-id="{{$item_album->id_field}}"><div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="head" data-group="album" data-field-type="image" data-item-id="{{$item_album->id_field}}" data-block="dom_photos" value="{{$item_album->head_image->icon_link}}">
        <input type="hidden" class="preview_link" data-field-name="head" data-group="album" data-field-type="image" data-item-id="{{$item_album->id_field}}" data-block="dom_photos" value="{{$item_album->head_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="head" data-group="album" data-field-type="image" data-item-id="{{$item_album->id_field}}" data-block="dom_photos" value="{{$item_album->head_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="head" data-group="album" data-field-type="image" data-item-id="{{$item_album->id_field}}" data-block="dom_photos" value="{{$item_album->head_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="head" data-group="album" data-field-type="image" data-item-id="{{$item_album->id_field}}" data-block="dom_photos" value="{{$item_album->head_image->icon_link}}">
    </div>
    <img src="/images/{{$item_album->head_image->preview_link}}" class="preview" data-field-name="head" data-block="dom_photos"  data-group="album" data-item-id="{{$item_album->id_field}}">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_album->head_image->alt}}" data-item-id="{{$item_album->id_field}}">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*"
        class="input_file group_field"
        data-field-name="head"
        data-group="album"
        data-entity="groupitem"
        data-item-id="{{$item_album->id_field}}"
        data-field-type="image"
        data-block="dom_photos"
        >
    </label>
</div>
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="name" data-block="dom_photos" data-group="album" class="input group_field" value="{{$item_album->name_field}}" data-item-id="{{$item_album->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="slug" data-block="dom_photos" data-group="album" class="input group_pre_field" value="{{$item_album->slug_field}}" data-item-id="{{$item_album->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="text" data-block="dom_photos" data-group="album" class="input group_field" data-item-id="{{$item_album->id_field}}" placeholder="Текст">{{$item_album->text_field}}</textarea>
</label>
</div>
<div class="block buttons">
<button type="button" class="any_save" data-block="dom_photos" data-group="album" data-entity="groupitem" data-item-id="{{$item_album->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div>
</li>@endsection