<?php

namespace App;


class PubSubService
{
    private $subscribers = [];

    public function subscribe(string $channel, callable $handler): void
    {
        if (!isset($this->subscribers[$channel])) {
            $this->subscribers[$channel] = [];
        }

        $this->subscribers[$channel][] = $handler;
    }

    public function publish(string $channel, $message): void
    {
        $channelSubscribers = $this->subscribers[$channel] ?? [];

        foreach ($channelSubscribers as $handler) {
            call_user_func($handler, $message);
        }
    }

    public function unsubscribe(string $channel): void
    {
        if (!isset($this->subscribers[$channel])) {
            unset($this->subscribers[$channel]);
        }
    }
}