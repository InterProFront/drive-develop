@extends('back.layout')
@section('content')
    <div class="block ">
        <label class="input-file">
            <ul class="group-block group_container" data-block="static_slider" data-group="slider" data-owner-id="0">
                @foreach($static_slider->slider_group as $item_slider )
                    @include('back.blocks.groupitems.static_slider.slider')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_slider" data-group="slider" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="static_slider" data-entity="block"
                data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection