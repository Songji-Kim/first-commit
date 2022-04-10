@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
        <form action="{{ url('booksedit') }}" method="POST">

        @if (count($books) > 0)
        <div class="card-body">
          <div class="card-body">
            <table class="table table-striped table-bordered">
              <!-- テーブルヘッダ -->
              <thead>
                <th>Q1</th>
                <th>Q2</th>
                <th>Q3</th>
                <th>Q4</th>
                <th>Q5</th>
                <th>&nbsp;</th>
              </thead>
              <!-- テーブル本体 -->
              <tbody>
                @foreach ($books as $book)
                <tr>
                  <!-- q1 -->
                  <td class="table-text">
                    <div>{{ $book->radioGrp01}}</div>
                  </td>
                  <!-- q2 -->
                  <td class="table-text">
                    <div>{{ $book->radioGrp02}}</div>
                  </td>
                  <!-- q3 -->
                  <td class="table-text">
                    <div>{{ $book->radioGrp03}}</div>
                  </td>
                  <!-- q4 -->
                  <td class="table-text">
                    <div>{{ $book->radioGrp04}}</div>
                  </td>
                  <!-- q5 -->
                  <td class="table-text">
                    <div>{{ $book->radioGrp05}}</div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @endif
            <!-- CSRF -->
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection
