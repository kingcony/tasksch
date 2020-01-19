<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScrapingCommand extends Model {
  use SoftDeletes;

  public function cronStr() {
    $ret = "";
    if ( $this->cron1 === NULL ) $ret .= "*";
    else $ret .= $this->cron1;
    if ( $this->cron2 === NULL ) $ret .= " *";
    else $ret .= " ".$this->cron2;
    if ( $this->cron3 === NULL ) $ret .= " *";
    else $ret .= " ".$this->cron3;
    if ( $this->cron4 === NULL ) $ret .= " *";
    else $ret .= " ".$this->cron4;
    if ( $this->cron5 === NULL ) $ret .= " *";
    else $ret .= " ".$this->cron5;
    return $ret;
  }
}
