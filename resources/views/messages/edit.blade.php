@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <p>{{ $message->content }}</p>

    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}

@endsection