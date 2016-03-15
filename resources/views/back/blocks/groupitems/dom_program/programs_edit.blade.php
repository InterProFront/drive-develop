@extends('back.layout')
@section('content')
<li class="group" data-group-id="{{$item_programs->id_field}}"><div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="head" data-group="programs" data-field-type="image" data-item-id="{{$item_programs->id_field}}" data-block="dom_program" value="{{$item_programs->head_image->icon_link}}">
        <input type="hidden" class="preview_link" data-field-name="head" data-group="programs" data-field-type="image" data-item-id="{{$item_programs->id_field}}" data-block="dom_program" value="{{$item_programs->head_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="head" data-group="programs" data-field-type="image" data-item-id="{{$item_programs->id_field}}" data-block="dom_program" value="{{$item_programs->head_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="head" data-group="programs" data-field-type="image" data-item-id="{{$item_programs->id_field}}" data-block="dom_program" value="{{$item_programs->head_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="head" data-group="programs" data-field-type="image" data-item-id="{{$item_programs->id_field}}" data-block="dom_program" value="{{$item_programs->head_image->icon_link}}">
    </div>
    <img src="/images/{{$item_programs->head_image->preview_link}}" class="preview" data-field-name="head" data-block="dom_program"  data-group="programs" data-item-id="{{$item_programs->id_field}}">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_programs->head_image->alt}}" data-item-id="{{$item_programs->id_field}}">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*"
        class="input_file group_field"
        data-field-name="head"
        data-group="programs"
        data-entity="groupitem"
        data-item-id="{{$item_programs->id_field}}"
        data-field-type="image"
        data-block="dom_program"
        >
    </label>
</div>
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="name" data-block="dom_program" data-group="programs" class="input group_field" value="{{$item_programs->name_field}}" data-item-id="{{$item_programs->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="slug" data-block="dom_program" data-group="programs" class="input group_pre_field" value="{{$item_programs->slug_field}}" data-item-id="{{$item_programs->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="p_for" data-block="dom_program" data-group="programs" class="input group_field" value="{{$item_programs->p_for_field}}" data-item-id="{{$item_programs->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="p_where" data-block="dom_program" data-group="programs" class="input group_field" value="{{$item_programs->p_where_field}}" data-item-id="{{$item_programs->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="p_when" data-block="dom_program" data-group="programs" class="input group_field" value="{{$item_programs->p_when_field}}" data-item-id="{{$item_programs->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="p_cost" data-block="dom_program" data-group="programs" class="input group_field" value="{{$item_programs->p_cost_field}}" data-item-id="{{$item_programs->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="text" data-block="dom_program" data-group="programs" class="input group_field" data-item-id="{{$item_programs->id_field}}" placeholder="Текст">{{$item_programs->text_field}}</textarea>
</label>
</div>
<div class="block ">
<label class="input-file">
<label><input type="checkbox" data-field-type="bool" data-field-name="all_page" data-block="dom_program" data-group="programs" data-item-id="{{$item_programs->id_field}}" class="input group_field" value="{{$item_programs->all_page_field}}">all_page</label>
</label>
</div>
<div class="block buttons">
<button type="button" class="any_save" data-block="dom_program" data-group="programs" data-entity="groupitem" data-item-id="{{$item_programs->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div>
</li>@endsection