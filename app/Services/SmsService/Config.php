<?php
/**
 * Created by PhpStorm.
 * User: pavlenko
 * Date: 13.06.18
 * Time: 10:52
 */

namespace App\Services\SmsService;


class Config
{
    /**
     * Sms api url
     *
     * @var
     */
    public $url;

    /**
     * Sms api user name
     *
     * @var
     */
    public $login;

    /**
     * Sms api user password
     *
     * @var
     */
    public $password;

    /**
     * Sms brand id
     *
     * @var
     */
    public $brand;

    public $checkStatusUrl;

    public function __construct()
    {
        $this->setUrl();
        $this->setPassword();
        $this->setLogin();
        $this->setBrandId();
        $this->setCheckStatusUrl();
    }

    public function setUrl(): void
    {
        try
        {
            throw_if(config('smsreklama.url') === '', new \Exception('URL can`t be empty'));
        } catch (\Throwable $e)
        {
        }
        $this->url = config('smsreklama.url');
    }

    public function setLogin(): void
    {
        try
        {
            throw_if(config('smsreklama.login') === '', new \Exception('Login can`t be empty'));
        } catch (\Throwable $e)
        {
        }
        $this->login = config('smsreklama.login');
    }

    public function setPassword(): void
    {
        try
        {
            throw_if(config('smsreklama.password') === '', new \Exception('Password can`t be empty'));
        } catch (\Throwable $e)
        {
        }
        $this->password = config('smsreklama.password');
    }

    public function setBrandId(): void
    {
        try
        {
            throw_if(config('smsreklama.brand') === '', new \Exception('Brand ID can`t be empty'));
        } catch (\Throwable $e)
        {
        }
        $this->brand = config('smsreklama.brand');
    }

    public function setCheckStatusUrl(): void
    {
        try
        {
            throw_if(config('smsreklama.checkStatus') === '', new \Exception('CheckStatus URL can`t be empty'));
        } catch (\Throwable $e)
        {
        }
        $this->checkStatusUrl = config('smsreklama.checkStatus');
    }

    public function run(): Config
    {
        return $this;
    }

}