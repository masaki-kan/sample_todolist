@extends('layouts.index')
@section('contents')
<div class="sec">
  <h2>リスト名</h2>
        <form class="" action="{{ url('/lists/edit')}}" method="post">
            {{ csrf_field() }}
            <p><input type="hidden" name="id" value="{{ $lists->id }}"/></p>
            @if( $errors->has('title'))
<div class="errors">
    <p>未入力または誤りがあります。修正してください</p>
<p>{{ $errors->first('title') }}</p>
</div>
@endif
            <p class="text"><input type="text" name="title" value="{{ $lists->title }}"/></p>
            <p><input type="submit" value="リスト編集" class="action" /></p>
        </form>
</div>
@endsection