<tr>
    <td><a href="">{{$item_blog_post->name_field}}</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="/adm/edit/blog/{{$item_blog_post->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_blog" data-group="blog_post" data-entity="groupitem"
                data-item-id="{{$item_blog_post->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
