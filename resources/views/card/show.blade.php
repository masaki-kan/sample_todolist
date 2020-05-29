@extends('layouts.index')
@section('contents')

<div class="sec">
  <h1>カードの詳細</h1>
  <h2>カード名</h2>
            <p>{{ $cardlists->cards_title }}</p>
  <h2>詳細</h2>
            <p>{{ $cardlists->memo }}</p>
  <h2>リスト名</h2>
            <p>{{ $datalists->title }}</p>
            <button class="action"><a href="/card/{{ $cardlists->id }}">編集</a></button>
<button class="action"><a href="/card/{{ $cardlists->id }}/delete">削除</a></button>
</div>

@endsection