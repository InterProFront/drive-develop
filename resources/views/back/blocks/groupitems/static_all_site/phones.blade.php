<li class="group" data-group-id="{{$item_phones->id_field}}"><div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="name" data-block="static_all_site" data-group="phones" class="input group_field" value="{{$item_phones->name_field}}" data-item-id="{{$item_phones->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="phone" data-block="static_all_site" data-group="phones" class="input group_field" value="{{$item_phones->phone_field}}" data-item-id="{{$item_phones->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block buttons_block">
<button type="button" class="any_save" data-block="static_all_site" data-group="phones" data-entity="groupitem" data-item-id="{{$item_phones->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
<button type="button" class="any_delete" data-block="static_all_site" data-group="phones" data-entity="groupitem" data-item-id="{{$item_phones->id_field}}" data-descr="Эл. первой группы"> Удалить</button>
</div>
</li>