<?php
namespace Telegram;

class Bot
{
    public static function send($text)
    {
        $users = Setting::getUsers();
        $bot_token = Setting::getToken();

        if (!$text) {
            return false;
        }

        foreach ($users as $user) {
            file_get_contents('https://api.telegram.org/bot' . $bot_token . '/sendMessage?disable_web_page_preview=true&chat_id=' . $user . '&text=' . $text . '&parse_mode=html');
        }
    }
}
