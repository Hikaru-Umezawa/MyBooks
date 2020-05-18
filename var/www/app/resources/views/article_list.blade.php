@extends('layouts.master')
@section('title', 'みんなの記事一覧')

@section('stylesheet')
<!-- 固有css -->
@endsection
@section('main-content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="container">
            <div class="list-group mt">
                @foreach ($articles as $article)
                <div class="list-group-main mt">
                    <i class="fa fa-user-circle fa-3x mr-1"></i>
                    <div class="font-weight-bold">
                        <a href="" class="user-name">ユーザー名</a>
                    </div>
                    <a href="{{ route('article.details',[$article->id])}}" class="list-group-item list-group-item flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <img src="{{asset('app/public/public/19.jpg')}}" width="300" height="200">
                            <h3 class="mb-1">{{ $article->article_title}}</h3>
                            <p class="text-muted">{{ $article->create_at}}</p>
                            <h4 class="mb-1">{{ $article->book_title}}</h4>
                            <div class="text">
                                {!! nl2br(e( $article->book_content )) !!}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </section>
</section>
@endsection
