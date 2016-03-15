<li class="group" data-group-id="{{$item_registration->id_field}}"><div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="fio" data-block="fidback" data-group="registration" class="input group_field" value="{{$item_registration->fio_field}}" data-item-id="{{$item_registration->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="b_date" data-block="fidback" data-group="registration" class="input group_field" value="{{$item_registration->b_date_field}}" data-item-id="{{$item_registration->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="email" data-block="fidback" data-group="registration" class="input group_field" value="{{$item_registration->email_field}}" data-item-id="{{$item_registration->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="phone" data-block="fidback" data-group="registration" class="input group_field" value="{{$item_registration->phone_field}}" data-item-id="{{$item_registration->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="number" data-field-type="numb" data-field-name="id_program" data-block="fidback" data-group="%group%" data-item-id="{{$item_registration->id_field}}" class="input group_field" value="{{$item_registration->id_program_field}}" placeholder="Целое число">
</label>
</div>
<div class="block buttons_block">
<button type="button" class="any_save" data-block="fidback" data-group="registration" data-entity="groupitem" data-item-id="{{$item_registration->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
<button type="button" class="any_delete" data-block="fidback" data-group="registration" data-entity="groupitem" data-item-id="{{$item_registration->id_field}}" data-descr="Эл. первой группы"> Удалить</button>
</div>
</li>