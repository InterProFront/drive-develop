<li class="group" data-group-id="{{$item_coach->id_field}}"><div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="name" data-block="about_school" data-group="coach" class="input group_field" value="{{$item_coach->name_field}}" data-item-id="{{$item_coach->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="prof" data-block="about_school" data-group="coach" class="input group_field" value="{{$item_coach->prof_field}}" data-item-id="{{$item_coach->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="photo_title" data-block="about_school" data-group="coach" class="input group_field" value="{{$item_coach->photo_title_field}}" data-item-id="{{$item_coach->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="photo_fact" data-block="about_school" data-group="coach" class="input group_field" value="{{$item_coach->photo_fact_field}}" data-item-id="{{$item_coach->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="about" data-block="about_school" data-group="coach" class="input group_field" data-item-id="{{$item_coach->id_field}}" placeholder="Текст">{{$item_coach->about_field}}</textarea>
</label>
</div>
<div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="photo" data-group="coach" data-field-type="image" data-item-id="{{$item_coach->id_field}}" data-block="about_school" value="{{$item_coach->photo_image->icon_link}}">
        <input type="hidden" class="preview_link" data-field-name="photo" data-group="coach" data-field-type="image" data-item-id="{{$item_coach->id_field}}" data-block="about_school" value="{{$item_coach->photo_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="photo" data-group="coach" data-field-type="image" data-item-id="{{$item_coach->id_field}}" data-block="about_school" value="{{$item_coach->photo_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="photo" data-group="coach" data-field-type="image" data-item-id="{{$item_coach->id_field}}" data-block="about_school" value="{{$item_coach->photo_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="photo" data-group="coach" data-field-type="image" data-item-id="{{$item_coach->id_field}}" data-block="about_school" value="{{$item_coach->photo_image->icon_link}}">
    </div>
    <img src="/images/{{$item_coach->photo_image->preview_link}}" class="preview" data-field-name="photo" data-block="about_school"  data-group="coach" data-item-id="{{$item_coach->id_field}}">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_coach->photo_image->alt}}" data-item-id="{{$item_coach->id_field}}">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*"
        class="input_file group_field"
        data-field-name="photo"
        data-group="coach"
        data-entity="groupitem"
        data-item-id="{{$item_coach->id_field}}"
        data-field-type="image"
        data-block="about_school"
        >
    </label>
</div>
</label>
</div>
<div class="block buttons_block">
<button type="button" class="any_save" data-block="about_school" data-group="coach" data-entity="groupitem" data-item-id="{{$item_coach->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
<button type="button" class="any_delete" data-block="about_school" data-group="coach" data-entity="groupitem" data-item-id="{{$item_coach->id_field}}" data-descr="Эл. первой группы"> Удалить</button>
</div>
</li>