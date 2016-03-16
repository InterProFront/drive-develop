@extends('front.layout')
@section('content')
    <article class="content">
        <div class="main-content-head">
            <div class="wrap-img">
                <img src="/images/{{$program->head_image->primary_link}}" alt="{{$program->head_image->alt}}" class="head-img">
                <h1 class="page-title">{{$program->name_field}}</h1>
            </div>

        </div>
        <div class="main-content-pad">
            <div class="wrap-block">
                <div class="text-block">
                    {!! $program->text_field !!}
                </div>
                @if(!$program->all_page_field)
                <div class="register-block">
                    <div class="row">
                        <p class="title">Для кого</p>
                        <p class="text">{{$program->p_for_field}}</p>
                    </div>
                    <div class="row">
                        <p class="title">Когда</p>
                        <p class="text">{{$program->p_when_field}}</p>
                    </div>
                    <div class="row">
                        <p class="title">Место проведения</p>
                        <p class="text">{{$program->p_where_field}}</p>
                    </div>
                    <div class="row">
                        <p class="title">Стоимость</p>
                        <p class="text">{{$program->p_cost_field}}</p>
                    </div>
                    <div class="row">
                        <button>Регистрация</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </article>

@endsection