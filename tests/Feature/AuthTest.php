<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->post('wx/auth/register', [
            'username' => 'zjygo2',
            'password' => '123456',
            'mobile' => '18633392852',
            'code' => '1234'
        ]);
        $response->assertStatus(200);
        $ret = $response->getOriginalContent();
        $this->assertEquals(0, $ret['errno']);
        $this->assertNotEmpty($ret['data']);
    }

    public function test_register_mobile()
    {
        $response = $this->post('wx/auth/register', [
            'username' => 'zjygo2',
            'password' => '123456',
            'mobile' => '18633392852',
            'code' => '1234'
        ]);
        $response->assertStatus(200);
        $ret = $response->getOriginalContent();
        $this->assertEquals(707, $ret['errno']);
    }

    public function test_reg_captcha()
    {
        $response = $this->post('wx/auth/regCaptcha', ['mobile' => '18633392853']);
        $response->assertJson(['errno' => 0, 'errmsg' => '成功', 'data' => null]);
    }
}
