<?php
namespace Telegram;

class Dispatcher
{
    public static function notify()
    {
        $event = new Event();
        $event->listen();
    }
}
