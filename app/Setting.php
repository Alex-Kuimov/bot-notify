<?php
namespace Telegram;

class Setting
{

    public static function load($file_name)
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/' . $file_name;

        if (!file_exists($file)) {
            return [];
        }

        return json_decode(file_get_contents($file), true);
    }

    public static function getToken()
    {
        $settings = self::load('.env');
        return $settings['token'];

    }

    public static function getUsers()
    {
        $settings = self::load('.env');
        return $settings['users'];
    }

    public static function getMessages()
    {
        $settings = self::load('messages.json');
        return $settings;
    }
}
