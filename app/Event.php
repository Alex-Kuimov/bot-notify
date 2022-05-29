<?php
namespace Telegram;

class Event
{
    public function listen()
    {
        $event = $_GET['event'] ?? false;

        $message = Message::get($event);

        Bot::send($message['text']);
    }
}
