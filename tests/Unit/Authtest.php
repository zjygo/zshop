<?php

namespace Tests\Unit;

use App\Services\UserServices;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class Authtest extends TestCase
{
    public function test_checkMobileSendCaptchaCount()
    {
        $mobile = '18633392851';
        foreach(range(0, 9) as $i){
            $isPass = (new UserServices())->checkMobileSendCaptchaCount($mobile);
            $this->assertTrue($isPass);
        }
        $isPass = (new UserServices())->checkMobileSendCaptchaCount($mobile);
        $this->assertFalse($isPass);

        $countKey = 'register_captcha_count_'.$mobile;
        Cache::forget($countKey);
        $isPass = (new UserServices())->checkMobileSendCaptchaCount($mobile);
        $this->assertTrue($isPass);
    }
}
