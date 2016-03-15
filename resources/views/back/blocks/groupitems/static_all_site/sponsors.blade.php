<li class="group" data-group-id="{{$item_sponsors->id_field}}"><div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="logo" data-group="sponsors" data-field-type="image" data-item-id="{{$item_sponsors->id_field}}" data-block="static_all_site" value="{{$item_sponsors->logo_image->icon_link}}">
        <input type="hidden" class="preview_link" data-field-name="logo" data-group="sponsors" data-field-type="image" data-item-id="{{$item_sponsors->id_field}}" data-block="static_all_site" value="{{$item_sponsors->logo_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="logo" data-group="sponsors" data-field-type="image" data-item-id="{{$item_sponsors->id_field}}" data-block="static_all_site" value="{{$item_sponsors->logo_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="logo" data-group="sponsors" data-field-type="image" data-item-id="{{$item_sponsors->id_field}}" data-block="static_all_site" value="{{$item_sponsors->logo_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="logo" data-group="sponsors" data-field-type="image" data-item-id="{{$item_sponsors->id_field}}" data-block="static_all_site" value="{{$item_sponsors->logo_image->icon_link}}">
    </div>
    <img src="/images/{{$item_sponsors->logo_image->preview_link}}" class="preview" data-field-name="logo" data-block="static_all_site"  data-group="sponsors" data-item-id="{{$item_sponsors->id_field}}">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_sponsors->logo_image->alt}}" data-item-id="{{$item_sponsors->id_field}}">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*"
        class="input_file group_field"
        data-field-name="logo"
        data-group="sponsors"
        data-entity="groupitem"
        data-item-id="{{$item_sponsors->id_field}}"
        data-field-type="image"
        data-block="static_all_site"
        >
    </label>
</div>
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="link" data-block="static_all_site" data-group="sponsors" class="input group_field" value="{{$item_sponsors->link_field}}" data-item-id="{{$item_sponsors->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block buttons_block">
<button type="button" class="any_save" data-block="static_all_site" data-group="sponsors" data-entity="groupitem" data-item-id="{{$item_sponsors->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
<button type="button" class="any_delete" data-block="static_all_site" data-group="sponsors" data-entity="groupitem" data-item-id="{{$item_sponsors->id_field}}" data-descr="Эл. первой группы"> Удалить</button>
</div>
</li>