<tr>
    <td><a href="">{{$item_programs->name_field}}</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/programs/{{$item_programs->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_program" data-group="programs" data-entity="groupitem"
                data-item-id="{{$item_programs->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
