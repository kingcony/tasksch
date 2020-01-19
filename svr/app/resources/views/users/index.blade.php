@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">ユーザ設定</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
　    <li>
        <a href="/admin/user"><i class="fas fa-fw fa-user"></i>Home</a>
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
        <h3 class="card-title">ユーザ一覧</h3>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>ユーザ名</th>
              <th>メールアドレス</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <a href="{{ route('user.edit',$user) }}" class="btn btn-primary btn-sm">更新</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">追加</a>
      </div>
    </div>
  </div>
</div>
@stop
