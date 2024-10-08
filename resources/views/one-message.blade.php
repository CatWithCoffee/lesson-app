@extends('layouts.app')

@section('title')Messages @endsection

@section('content')
    <h2>Детали</h2>
    <div class="container my-2 ms-0 alert alert-secondary w-50">
        <h4>{{ $data -> subject }}</h4>
        <p>{{ $data -> email }} - {{ $data -> name }}</p>
        <p>{{ $data -> message }}</p>
        <p><small>Created at: {{ $data -> created_at }}</small></p>
        <p><small>Updated at: {{ $data -> updated_at }}</small></p>
        <a href="{{ Route('contact-update', $data -> id) }}">
            <button class="btn btn-warning me-1">Редактировать</button></a>
        <a href="{{ Route('contact-delete', $data -> id) }}">
            <button class="btn btn-danger">Удалить</button></a>
        <br>
        <a href="{{ Route('contact-data') }}">
            <button class="btn btn-warning mt-2"><- Назад</button>
        </a>
    </div>
@endsection