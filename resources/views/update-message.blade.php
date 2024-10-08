@extends('layouts.app')

@section('title')Update message @endsection

@section('content')
    <h1>Обновление записи</h1>

    <form action="{{ route('contact-update-submit', $data -> id) }}" method="post"
        class="container my-2 ms-0 alert alert-secondary w-50">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{ $data -> name }}" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data -> email }}" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{ $data -> subject }}" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control">{{ $data -> message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success my-2">Сохранить</button>
    </form>
    <a href="{{ Route('contact-data-one', $data -> id) }}"><button class="btn btn-warning my-2"><- Назад</button></a>
@endsection