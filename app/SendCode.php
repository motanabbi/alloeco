<?php

namespace allov1;

/**
 *
 */
class SendCode
{
  public static function sendCode($phone)
  {
    $code=rand(1111,9999);
    $nexmo=app('Nexmo\Client');
    $nexmo->message()->send([
      'to'=>'+212'.(int)$phone,
      'from'=>'AlloEco',
      'text'=>'verify code : '.$code,
    ]);
    return $code;
  }
}
