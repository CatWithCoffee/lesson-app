@extends('layouts.app')

@section('title')Messages @endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach ($data as $message)
        <div class="container my-2 ms-0 alert alert-secondary w-50">
            <h3>{{ $message -> subject }}</h3>
            <p>{{ $message -> email }}</p>
            <p><small>{{ $message -> created_at }}</small></p>
            <a href="{{ Route('contact-data-one', $message -> id) }}">
                <button class="btn btn-warning">Детали</button>
            </a>
        </div>
    @endforeach
@endsection