@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
<div class="container">
    <h1 class="text-center">Listado de Artículos</h1>
    <div class="row">
        @foreach ($informations as $information)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $information->image_url }}" alt="{{ $article->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $information->title }}</h5>
                    <p class="card-text">{{ Str::limit($information->content, 150) }}</p>
                    <a href="{{ route('articles.show', $information->id) }}" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="css/informaciones.css">
@endpush


@push('scripts')
<script src="js/informacion.js"></script>
@endpush
