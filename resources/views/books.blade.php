<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
<!-- Bootstrapの定形コード… -->
<div class="card-body">
  <div class="card-title">
    自己診断
  </div>

  <!-- バリデーションエラーの表示に使用-->
  @include('common.errors')
  
  
    <!-- 診断アプリ -->
  <form action="{{ url('books') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Q1 -->
    <div class="card-title">
      Q1.株主総会を開催していますか?
    </div>
    <div class="form-group row">
        <label for="radio01"></label>
        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio01" name="radioGrp01" value="1">
                <label class="form-check-label" for="inlineRadio01">できている</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio02"  name="radioGrp01" value="2">
                <label class="form-check-label" for="inlineRadio02">できていない</label>
            </div>
        </div>
    </div>

    <!-- Q2 -->
    <div class="card-title">
      Q2.取締役会を開催していますか?
    </div>
    <div class="form-group row">
        <label for="radio02"></label>
        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio01" name="radioGrp02" value="1">
                <label class="form-check-label" for="inlineRadio01">できている</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio02"  name="radioGrp02" value="2">
                <label class="form-check-label" for="inlineRadio02">できていない</label>
            </div>
        </div>
    </div>
    <!-- Q3 -->
    <div class="card-title">
      Q3.社員の勤務時間を1分単位で打刻管理していますか?
    </div>
    <div class="form-group row">
        <label for="radio03"></label>
        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio01" name="radioGrp03" value="1">
                <label class="form-check-label" for="inlineRadio01">できている</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio02"  name="radioGrp03" value="2">
                <label class="form-check-label" for="inlineRadio02">できていない</label>
            </div>
        </div>
    </div>
    <!-- Q4 -->
    <div class="card-title">
      Q4.取引の開始前に取引先が反社会的勢力に該当しないか確認を行っていますか?
    </div>
    <div class="form-group row">
        <label for="radio04"></label>
        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio01" name="radioGrp04" value="1">
                <label class="form-check-label" for="inlineRadio01">できている</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio02"  name="radioGrp04" value="2">
                <label class="form-check-label" for="inlineRadio02">できていない</label>
            </div>
        </div>
    </div>
    <!-- Q5 -->
    <div class="card-title">
      Q5.役職ごとの権限や予算を定め、稟議によって承認されていますか？
    </div>
    <div class="form-group row">
        <label for="radio05"></label>
        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio01" name="radioGrp05" value="1">
                <label class="form-check-label" for="inlineRadio01">できている</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio02"  name="radioGrp05" value="2">
                <label class="form-check-label" for="inlineRadio02">できていない</label>
            </div>
        </div>
    </div>
      <!-- 本 登録ボタン -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
             <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
      </div>
  </form>
</div>

  <a href="{{ url('/booksedit') }}" class="btn btn-primary">{{ __('診断済みの方はこちら') }}</a>


<!--ページネーション-->
<div class="row">
  <div class="col-md-4 offset-md-4">
    {{ $books->links()}}
  </div>
</div>

@endsection 