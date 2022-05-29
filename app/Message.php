<?php
namespace Telegram;

class Message
{

    public static function get($id)
    {
        if (!$id) {
            return false;
        }

        $messages = Setting::getMessages();

        $message = array_filter($messages, function ($item) use ($id) {
            return $item['id'] == $id;
        });

        $message = array_values($message);

        return is_array($message) && isset($message[0]) ? $message[0] : false;
    }
}
