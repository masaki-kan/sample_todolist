@extends('layouts.index')
@section('contents')
<div class="sec">

        <form class="" action="/card" method="post">
            {{ csrf_field() }}
            <p><input type="hidden" name="id" value="{{ $cardlists->id }}"/></p>
            <p><input type="hidden" name="datalist_id" value="{{ $cardlists->datalist_id }}"/></p>
              <h2>カード名</h2>
              @if( $errors->has('cards_title'))
<div class="errors">
    <h3>入力が未入力です</h3>
<p>{{ $errors->first('cards_title') }}</p>
</div>
@endif
            <p><input type="text" name="cards_title" value="{{ $cardlists->cards_title }}"/></p>
              <h2>詳細</h2>
              @if( $errors->has('memo'))
<div class="errors">
    <p>未入力または誤りがあります。修正してください</p>
<p>{{ $errors->first('memo') }}</p>
</div>
@endif
         
             <textarea cols="100" rows="20" name="memo" value="">{{ $cardlists->memo }}</textarea> 
            <p><input type="submit" value="リスト編集"/></p>
        </form>
</div>
@endsection