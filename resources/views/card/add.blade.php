@extends('layouts.index')
@section('contents')

<div class="sec">
        <form class="" action="/{datalist_id}/card/add" method="post">
            {{ csrf_field() }}
<input type="hidden" name="datalist_id" value="{{ $datalist_id }}">
            <p>カードリスト名</p>
     @if( $errors->has('cards_title'))
<div class="errors">
    <p>未入力または誤りがあります。修正してください</p>
<p>{{ $errors->first('cards_title') }}</p>
</div>
    @endif
    <p class="text"><input type="text" name="cards_title" value="{{ old('cards_title') }}"/></p>
    <p>メモ</p>
   @if( $errors->has('memo'))
<div class="errors">
    <p>未入力または誤りがあります。修正してください</p>
<p>{{ $errors->first('memo') }}</p>
</div>
@endif
     <p><textarea cols="100" rows="20" name="memo" value="{{ old('memo')}}"></textarea></p>
     <p><input type="submit" value="リスト追加" class="action"/></p>
        </form>
</div>
@endsection