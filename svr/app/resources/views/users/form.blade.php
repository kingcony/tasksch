<div class="form-group">
  <label for="email">メールアドレス</label>
  <input type="text" id="email" name="email" class="form-control" value="{{ old('email',$user->email) }}">
  @if ( $errors->has("email") )<p>{{ $errors->first("email") }}</p>@endif
</div>
<div class="form-group">
  <label for="password">パスワード</label>
  <input type="password" id="password" name="password" class="form-control" value="">
  @if ( $errors->has("password") )<p>{{ $errors->first("password") }}</p>@endif
</div>
<div class="form-group">
  <label for="name">名前</label>
  <input type="text" id="name" name="name" class="form-control" value="{{ old('name',$user->name) }}">
  @if ( $errors->has("name") )<p>{{ $errors->first("name") }}</p>@endif
</div>
