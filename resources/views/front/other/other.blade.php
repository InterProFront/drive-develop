@extends('front.layout')
@section('content')
    <article class="content">
        <div class="main-content-head">
            <div class="wrap-img">
                <img src="/images/{{$other->head_image->primary_link}}" alt="{{$other->head_image->alt}}" class="head-img">
                <h1 class="page-title">{{$other->name_field}}</h1>
            </div>

        </div>
        <div class="main-content-pad">
            <div class="wrap-block">
                <div class="text-block">
                    {!! $other->about_field !!}
                </div>
            </div>
        </div>
    </article>

@endsection