@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">スクレイピングコマンド設定</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
　    <li>
        <a href="{{ route('scrapingCommand.index') }}"><i class="fas fa-fw fa-user"></i>一覧</a>
      </li>
    </ol>
  </div>
</div>
@stop

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">スクレイピングコマンド一覧</h3>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>コマンド名</th>
              <th>スケジュール</th>
              <th>有効/無効</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($scrapings as $scraping)
            <tr>
              <td>{{ $scraping->id }}</td>
              <td>{{ $scraping->name }}</td>
              <td>{{ $scraping->cronStr() }}</td>
              <td>
                @if($scraping->flg == 0) 無効 @else 有効 @endif
              </td>
              <td>
                <a href="{{ route('scrapingCommand.edit',$scraping) }}" class="btn btn-primary btn-sm">更新</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('scrapingCommand.create') }}" class="btn btn-primary btn-sm">追加</a>
      </div>
    </div>
  </div>
</div>
@stop
