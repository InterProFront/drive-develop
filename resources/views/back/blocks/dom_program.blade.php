@extends('back.layout')
@section('content')
    <div class="block">
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
            <tbody class="group-block group_container" data-block="dom_program" data-group="programs" data-owner-id="0">
            @foreach($dom_program->programs_group as $item_programs )
                @include('back.blocks.groupitems.dom_program.programs')
            @endforeach
            </tbody>
            <tfoot>
            <button class="any_create" data-block="dom_program" data-group="programs" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
            </tfoot>
        </table>
        <div class="block buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_program" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>

@endsection