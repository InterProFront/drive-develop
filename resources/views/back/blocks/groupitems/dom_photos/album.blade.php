<tr>
    <td><a href="">{{$item_album->name_field}}</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/photo/{{$item_album->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_photos" data-group="album" data-entity="groupitem"
                data-item-id="{{$item_album->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
