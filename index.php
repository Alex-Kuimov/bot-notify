<?php
require_once './app/Bot.php';
require_once './app/Dispatcher.php';
require_once './app/Event.php';
require_once './app/Message.php';
require_once './app/Setting.php';

Telegram\Dispatcher::notify();
