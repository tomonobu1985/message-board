@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <p>{{ $message->content }}</p>

    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}

@endsection