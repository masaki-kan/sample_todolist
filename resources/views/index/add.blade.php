@extends('layouts.index')
@section('contents')

<div class="sec">
        <form class="" action="{{ url('/lists/add')}}" method="post">
            {{ csrf_field() }}
            <h2>リスト名</h2>
            @if( $errors->has('title'))
<div class="errors">
    <p>未入力または誤りがあります。修正してください</p>
<p>{{ $errors->first('title') }}</p>
</div>
@endif
            <p class="text"><input type="text" name="title" value="{{ old('title')}}"/></p>
            <p><input type="submit" value="リスト追加" class="action" /></p>
        </form>
</div>
@endsection