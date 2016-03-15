@extends('back.blocks.static_photo_block')
@section('page')
<table>
<thead>
<tr>
  <td>1</td>
  <td>2</td>
  <td>3</td>
  <td>4</td>
  <td>5</td>
  <td>6</td>
</tr>
<thead>
<tbody class="group-block group_container" data-block="dom_photos" data-group="album" data-owner-id="0">
@foreach($dom_photos->album_group as $item_album )
@include('back.blocks.groupitems.dom_photos.album')
@endforeach
</tbody>
<tfoot>
  <button class="any_create" data-block="dom_photos" data-group="album"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</tfoot>
</table>
@endsection