@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th><label for="id">id</label></th>
            <th><label for="id">{{ $message -> id}}</label></th>
        </tr>
        <tr>
            <td><p>タイトル</p></td>
            <td><p>{{ $message -> title }}</p></td>
        </tr>
        <tr>
            <td><p>メッセージ</p></td>
            <td><p>{{$message -> content}}</p></td>
        </tr>
    </table>
    {!! link_to_route('messages.edit', 'このメッセージを編集',  $message -> id  , ['class' => 'btn btn-default']) !!}
    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        <input type="submit" class="btn btn-danger" value="削除">
<!--        {!! Form::submit('削除') !!}     -->
    {!! Form::close() !!}
@endsection
