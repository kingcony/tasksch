@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">スクレイピングコマンド設定</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
　    <li class="breadcrumb-item">
        <a href="{{ route('scrapingCommand.index') }}"><i class="fas fa-fw fa-user"></i>一覧</a>
      </li>
      <li class="breadcrumb-item active">
        <a href="{{ route('scrapingCommand.edit',$scraping) }}"><i class="fas fa-fw fa-user"></i>更新</a>
      </li>
    </ol>
  </div>
</div>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      @if (session("flash_message") )
      <div class="alert alert-info alert-dismissible">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session("flash_message") }}
      </div>
      @endif
      <form role="form" id="frm" method="post" action="{{ route('scrapingCommand.update',$scraping) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="card card-widget">
          <div class="card-header">
            <h3 class="card-title">スクレイピングコマンド更新</h3>
          </div>
          <div class="card-body">
            @include('scrapings.form')
            <button class="btn btn-primary add">更新</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@stop

@section('js')
<script>
$(function() {
  $(".add").on("click",function(e) {
    addExec();
  });
});

function addExec() {
  $("#frm").submit();
}
</script>
@stop