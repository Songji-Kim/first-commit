@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
        <form action="{{ url('booksedit') }}" method="POST">

        @if (count($books) > 0)
        <div class="card-body">
            <table class="table table-striped table-bordered">
              <!-- テーブルヘッダ -->
              <thead>
                <th>質問</th>
                <th>回答</th>
                <th>タスク</th>
                <th>アドバイスマスタ</th>
                <th>テンプレート</th>
                <th>作業報告</th>
              </thead>

              <!-- テーブル本体 -->
              <tbody>
                @foreach ($books as $book)
                <tr>
                   <!--q1 -->
                  <td>Q1.株主総会を開催していますか?</td>
                  <td> @if( $book->radioGrp01 == '1') できている @else できていない @endif </td>
                  <td>株主総会は年に一度必ず実施する必要があります。<br>
                  書面決議も可能で実際に会場で開催する必要はありません。<br>
                  事業報告も必要になるのでテンプレートを参考に作成しましょう</td>
                  <td><a href="{{ url('https://i3cojp-my.sharepoint.com/:b:/g/personal/songji_kim_i-3_co_jp/EZ4G9RNzHg1Pl7ClUU1TiLkBjGUnzhwg-qlFSlq2_Su94Q?e=qtIZ4d') }}" >{{ __('株主総会アドバイス') }}</a></td>
                  <td><a href="{{ url('https://i3cojp-my.sharepoint.com/:w:/g/personal/songji_kim_i-3_co_jp/EWBW2eBM2LpNhz_8bQsuHFkBGBAWo2uwZSM5zVypQeNJLA?e=RdPw35') }}" >{{ __('事業報告テンプレート') }}</a></td>
                  <td><a href="{{ url('/report') }}">{{ __('作業報告') }}</a></td>
                  
                </tr>
                <tr>
                   <!--q2 -->
                  <td>Q2.取締役会を開催していますか?</td>
                  <td> @if( $book->radioGrp02 == '1') できている @else できていない @endif </td>
                  <td>IPOを目指す会社は毎月1回取締役会を開催している必要があります<br>
                  取締役会では会社の重要な決定事項の決議と1カ月の業績報告なども行われます<br>
                  開催した後は議事録を作成し、捺印の上で保管しましょう
                  </td>
                  <td><a href="{{ url('https://i3cojp-my.sharepoint.com/:b:/g/personal/songji_kim_i-3_co_jp/Ed1GTshmTTxNifISfcCl5vEBrEbG-In78NL0-t3o4a4iCg?e=RjwwWx') }}" >{{ __('取締役会アドバイス') }}</a></td>
                  <td><a href="{{ url('https://i3cojp-my.sharepoint.com/:w:/g/personal/songji_kim_i-3_co_jp/EYvx030MqK9CjWOJTr8TeHkBIEwcvuv8bi7YjaVNOcHOIA?e=bj8Jn2') }}" >{{ __('議事録テンプレート') }}</a></td>
                  <td><a href="{{ url('/report') }}">{{ __('作業報告') }}</a></td>
                  </tr>
                <tr>
                   <!--q3 -->
                  <td>Q3.社員の勤務時間を1分単位で打刻管理していますか?</td>
                  <td> @if( $book->radioGrp03 == '1') できている @else できていない @endif </td>
                  <td>未払い残業代がある状態は「ノックアウトファクター」と言われIPOの1発アウトの状態です。<br>
                  残業時間は15分や30分と言った単位での集計は認められません。<br>
                  勤怠管理アプリやタイムカード、出勤簿などで正確に管理しましょう。</td>
                  <td><a href="{{ url('#') }}" >{{ __('労働時間管理アドバイス') }}</a></td>
                  <td><a href="{{ url('#') }}" >{{ __('出勤簿テンプレート') }}</a></td>
                  <td><a href="{{ url('/report') }}">{{ __('作業報告') }}</a></td>
                </tr>
                <tr>
                   <!--q4 -->
                  <td>Q4.取引の開始前に取引先が反社会的勢力に該当しないか確認を行っていますか?</td>
                  <td> @if( $book->radioGrp04 == '1') できている @else できていない @endif </td>
                  <td>IPOして上場企業になると「社会の公器」となります。<br>
                  反社会的勢力との取引は如何なる取引も行ってはならないため取引開始前に反社チェックする体制が必要です。<br>
                  反社チェックのツールも増えているのでツールを活用して反社チェック体制を構築しましょう。</td>
                  <td><a href="{{ url('#') }}" >{{ __('反社チェックについて') }}</a></td>
                  <td><a href="{{ url('#') }}" >{{ __('反社会的勢力との取引防止規程') }}</a></td>
                  <td><a href="{{ url('/report') }}">{{ __('作業報告') }}</a></td>
                </tr>
                <tr>
                   <!--q5 -->
                  <td>Q5.役職ごとの権限や予算を定め、稟議によって承認されていますか?</td>
                  <td> @if( $book->radioGrp05 == '1') できている @else できていない @endif </td>
                  <td>会社の重要な意思決定や備品の購入はIPO準備で定めたルールに沿って意思決定する必要があります。<br>
                  決議事項や金額などでルールを決めて、そのルールに基づいていることを書面として残す必要があります。<br>
                  ワークフローツール等を導入し、意思決定のプロセスを稟議として残しましょう。</td>
                  <td><a href="{{ url('#') }}" >{{ __('職務権限について') }}</a></td>
                  <td><a href="{{ url('#') }}" >{{ __('職務権限表') }}</a></td>
                  <td><a href="{{ url('/report') }}">{{ __('作業報告') }}</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        @endif
            <!-- CSRF -->
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection
