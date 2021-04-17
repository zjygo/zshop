<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class UserServices
{
    /**
     * 根据用户名获取用户
     * @param $username
     * @return User|null
     */
    public function getByUsername($username)
    {
        return User::query()->where('username',$username)
        ->where('deleted', 0)->first();
    }

    /**
     * 根据手机号获取用户
     * @param $mobile
     * @return User|null
     */
    public function getByMobile($mobile)
    {
        return User::query()->where('mobile',$mobile)
        ->where('deleted', 0)->first();
    }

    /**
     * 判断发送验证码是否达到限制条数
     */
    public function checkMobileSendCaptchaCount(string $mobile)
    {
        $countkey = 'register_captcha_count_'.$mobile;
        if(Cache::has($countkey)){
            $count = Cache::increment('register_captcha_count_'.$mobile);
            if($count >10){
                return false;
            }
        }else{
            Cache::put($countkey, 1, Carbon::tomorrow()->diffInSeconds(now()));
        }

        return true;
    }

    public function sendCaptchaMsg()
    {
        // 如果是测试环境则不发送验证码
        if(app()->environment('testing')){
            return;
        }
    }
}
