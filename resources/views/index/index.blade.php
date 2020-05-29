@extends('layouts.index')
@section('contents')
<div class="data">
@foreach( $lists as $list )
<div class="datalist">
<div class="datalist_title">
  <p>{{ $list->title }}</p>  
</div>
<div class="list_btn">
    <button><a href="/lists/{{$list->id}}">リスト名編集</a></button>
    <button><a href="/listsdelete/{{$list->id}}">リスト削除</a></button>
</div>
<div class="card_add">
<button><a href="/{{ $list->id }}/card/add">カードを追加</a></button>
</div>
@foreach( $list->cards as $card )
<div class="cards">
<a href="/{{ $list->id }}/card/{{ $card->id }}">
<div class="cardlist">
  <p>{{ $card->cards_title }}</p>
</div>
</a>
</div>
@endforeach
</div>
@endforeach
</div>
@endsection