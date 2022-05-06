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
          
<div class="card-body">
  <div class="card-body">
    <table class="table table-striped task-table">
      <!-- テーブルヘッダ -->
      <thead>
        <th>報告日</th>
        <th>報告者</th>
        <th>報告内容</th>
      </thead>
      <!-- テーブル本体1 -->
      <tbody>
        <tr>
          <td class="table-text">
            <div>2022/5/6 14:58</div>
          </td>
          <td class="table-text">
            <div>test1</div>
          </td>
        　<td class="table-text">
            <div>株主総会の議事録のテンプレートを参考にして、当社に必要な内容を入力しました</div>
          </td>
        </tr>
      </tbody>
            <!-- テーブル本体2-->
      <tbody>
        <tr>
          <td class="table-text">
            <div>2022/5/6 17:22</div>
          </td>
          <td class="table-text">
            <div>test2</div>
          </td>
        　<td class="table-text">
            <div>株主総会の議事録の内容確認しました。決議事項として決算承認が入っていないようです。決算承認は「決議」、事業報告は「報告」です。</div>
          </td>
        </tr>
      </tbody>
           <!-- テーブル本体3 -->
      <tbody>
        <tr>
          <td class="table-text">
            <div>2022/5/7 9:46</div>
          </td>
          <td class="table-text">
            <div>test1</div>
          </td>
        　<td class="table-text">
            <div>ご指摘ありがとうございます。修正しましたので再度ご確認お願いします。</div>
          </td>
        </tr>
           <!-- テーブル本体4 -->
      <tbody>
        <tr>
          <td class="table-text">
            <div>2022/5/7 12:51</div>
          </td>
          <td class="table-text">
            <div>test2</div>
          </td>
        　<td class="table-text">
            <div>確認しました。印刷して出席した取締役全員の印鑑の回覧手続きをお願いします。捺印完了後にはPDFで保存してフォルダに格納してください。</div>
          </td>
        </tr>
    </table>
  </div>
</div>
@endsection 