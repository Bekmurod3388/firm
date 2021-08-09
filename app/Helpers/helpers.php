<?php
function addAlert($message, $type = 'success') {
    session()->flash('message', $message);
    session()->flash('message-type', $type);
}

function modalMessage($type, $message)
{
    session()->flash('modal-message', $message);
    session()->flash('modal-type', $type);
}
