<div class="form-group">
  <label for="name">名前</label>
  <input type="text" id="name" name="name" class="form-control" value="{{ old('name',$scraping->name) }}">
  @if ( $errors->has("name") )<p>{{ $errors->first("name") }}</p>@endif
</div>
<div class="form-group">
  <label for="cmd">コマンド名</label>
  <input type="text" id="cmd" name="cmd" class="form-control" value="{{ old('cmd',$scraping->cmd) }}">
  @if ( $errors->has("cmd") )<p>{{ $errors->first("cmd") }}</p>@endif
</div>
<div class="form-group">
  <label for="cron">スケジュール</label>
  <div class="form-row">
    <div class="col">
      <input type="text" id="cron1" name="cron1" class="form-control" value="{{ old('cron1',$scraping->cron1) }}">
    </div>
    <div class="col">
      <input type="text" id="cron2" name="cron2" class="form-control" value="{{ old('cron2',$scraping->cron2) }}">
    </div>
    <div class="col">
      <input type="text" id="cron3" name="cron3" class="form-control" value="{{ old('cron3',$scraping->cron3) }}">
    </div>
    <div class="col">
      <input type="text" id="cron4" name="cron4" class="form-control" value="{{ old('cron4',$scraping->cron4) }}">
    </div>
    <div class="col">
      <input type="text" id="cron5" name="cron5" class="form-control" value="{{ old('cron5',$scraping->cron5) }}">
    </div>
  </div>
  @if ( $errors->has("cron") )<p>{{ $errors->first("cron") }}</p>@endif
</div>
<div class="form-group">
  <label for="cmd">有効／無効</label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flg" id="flg1" value="1" @if (old('flg',$scraping->flg) == 1 ) checked @endif>
    <label class="form-check-label" for="flg1">有効</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flg" id="flg2" value="0" @if (old('flg',$scraping->flg) == 0 ) checked @endif>
    <label class="form-check-label" for="flg2">無効</label>
  </div>
  @if ( $errors->has("flg") )<p>{{ $errors->first("flg") }}</p>@endif
</div>
