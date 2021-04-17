<?php

namespace App\Http\Controllers\Wx;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $mobile = $request->input('mobile');
        $code = $request->input('code');

        if(empty($username) || empty($password) || empty($mobile) || empty($code))
        {
            return ['errno' => 401, 'errmsg' => '参数不对'];
        }

        $user = (new UserServices())->getByUsername($username);
        if(!is_null($user))
        {
            return ['errno' => 704, 'errmsg' => '用户名已注册'];
        }

        $validator = Validator::make(['mobile' => $mobile], ['mobile' => 'regex:/^1[0-9]{10}$/']);
        if($validator->fails())
        {
            return ['errno' => 707, 'errmsg' => '手机号格式不正确'];
        }

        $user = (new UserServices())->getByMobile($mobile);
        if(!is_null($user))
        {
            return ['errno' => 705, 'errmsg' => '手机号已注册'];
        }

        $user = new User();
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->mobile = $mobile;
        $user->avatar = 'https://yanxuan.nosdn.127.net/80841d741d7fa3073e0ae27bf487339f.jpg?imageView&quality=90&thumbnail=64x64';
        $user->nickname = $username;
        $user->last_login_time = Carbon::now()->toDateTimeString();
        $user->last_login_ip = $request->getClientIp();
        $user->save();


        return ['errno' => 0, 'errmsg' => '成功', 'data' => [
            'token' => '',
            'userInfo' => [
                'nickName' => $username,
                'avatarUrl' => $user->avatar
            ]
        ]];

    }

    public function regCaptcha(Request $request)
    {
        $mobile = $request->input('mobile');

        if(empty($mobile)){
            return ['errno' => 401, 'errmsg' => '参数不对'];
        }
        $validator = Validator::make(['mobile' => $mobile], ['mobile' => 'regex:/^1[0-9]{10}$/']);
        if($validator->fails())
        {
            return ['errno' => 707, 'errmsg' => '手机号格式不正确'];
        }

        $user = (new UserServices())->getByMobile($mobile);
        if(!is_null($user))
        {
            return ['errno' => 705, 'errmsg' => '手机号已注册'];
        }

        $code = random_int(100000, 999999);

        // 防刷，一分钟只能请求一次，当天只能请求10次
        // add:如果缓存已经存在则返回false
        $lock = Cache::add('register_captcha_lock_'.$mobile, 1, 60);

        if(!$lock){
            return ['errno' => 702, 'errmsg' => '验证码未超过1分钟，不能发送'];
        }
        $isPass = (new UserServices())->checkMobileSendCaptchaCount($mobile);
        if($isPass){
            return ['errno' => 702, 'errmsg' => '验证码当天发送不能超过10次'];
        }

        // 使用redis保存手机号和验证码并且加入过期时间
        Cache::put('register_captcha_'.$mobile, $code, 600);

        // todo:发送短信

        return ['errno' => 0, 'errmsg' => '成功', 'data' => null];
    }
}
