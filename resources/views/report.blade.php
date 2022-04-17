<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
<!-- Bootstrapの定形コード… -->
<div class="card-body">
  <div class="card-title">
    作業報告
  </div>

  <!-- バリデーションエラーの表示に使用-->
  @include('common.errors')
  
  
    <!-- 診断アプリ -->
  <form action="{{ url('booksedit') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

            <input type="text" name="report" class="form-control">
            <button type="submit" class="btn btn-primary">
            作業報告
          </button>
          
          <div>※ここは実装できていません</div>

@endsection 