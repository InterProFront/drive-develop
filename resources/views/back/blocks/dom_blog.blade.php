@extends('back.blocks.static_blog')
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
        <tbody class="group-block group_container" data-block="dom_blog" data-group="blog_post" data-owner-id="0">
        @foreach($dom_blog->blog_post_group as $item_blog_post )
            @include('back.blocks.groupitems.dom_blog.blog_post')
        @endforeach
        </tbody>
        <tfoot>
        <button class="any_create" data-block="dom_blog" data-group="blog_post" data-descr="Эл. первой группы"
                data-owner-id="0"> Добавить
        </button>
        </tfoot>
    </table>
@endsection