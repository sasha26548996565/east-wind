<?php

declare(strict_types=1);

namespace Services\Openai;

interface GPTBotApiContract
{
    public function sendMessage(string $message): string;
}
