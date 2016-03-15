@extends('back.layout')
@section('content')
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="name" data-block="about_school" class="input block_field" value="{{$about_school->name_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="page_title" data-block="about_school" class="input block_field" value="{{$about_school->page_title_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image" data-block="about_school" value="{{$about_school->head_image->preview_link}}">
        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image" data-block="about_school" value="{{$about_school->head_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image" data-block="about_school" value="{{$about_school->head_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image" data-block="about_school" value="{{$about_school->head_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image" data-block="about_school" value="{{$about_school->head_image->icon_link}}">
    </div>
    <img src="/images/{{$about_school->head_image->preview_link}}" class="preview" data-field-name="head" data-block="about_school">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$about_school->head_image->alt}}" data-field-name="head" data-block="about_school">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*" class="input_file block_field"  data-entity="block" data-field-name="head" data-field-type="image" data-block="about_school">
    </label>
</div>
</label>
</div>
<div class="block ">
<label class="input-file">
<ul class="group-block group_container" data-block="about_school" data-group="coach" data-owner-id="0">
@foreach($about_school->coach_group as $item_coach )
@include('back.blocks.groupitems.about_school.coach')
@endforeach
</ul>
  <button class="any_create" data-block="about_school" data-group="coach"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</label>
</div>
<div class="block buttons">
<button class="btn btn-primary pull-right any_save" data-block="about_school" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
@endsection