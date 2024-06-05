<?php

use App\View\ViewModels\MessageViewModel;

if (function_exists('getLastMessagesInText') == false) {
    function getLastMessagesInText(): string
    {
        $messageViewModel = new MessageViewModel();

        return $messageViewModel->getLastMessagesInText();
    }
}
