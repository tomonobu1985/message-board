@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    @if (count($messages) > 0)
<form>
  <div class="form-group">
    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">タイトル</th>
            <th class="text-center">メッセージ</th>
        </tr>
        <ul>
            @foreach ($messages as $message)
                <tr>
                    <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} </td>
                    <td>{{ $message -> title }}</td>
                    <td>{{ $message -> content }}</td>
                </tr>
            @endforeach
        </ul>
    </table>
    {!! link_to_route('messages.create', '新規メッセージの登録', null, ['class' => 'btn btn-primary']) !!}
  </div>
</form>
    @endif
<!--    {{-- {!! Form::submit('新規メッセージの投稿', ['class' => 'btn btn-primary']) !!}  --}}   -->
<!--    <a class="btn btn-lg btn-primary" href="/messages/create" role="button">新規メッセージの投稿</a>-->
@endsection