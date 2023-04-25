<?php

namespace App\Helpers;

class ClientNotification
{
    const Message_Key = 'client_message';
    const Message_Type = 'type';
    const Type_Success = 'success';
    const Type_Error = 'error';
    /**
     * @param $message string
     * @return void
     */
    public function addSuccessMessage($message){
        $session = session();
        $flashData = [
            self::Message_Key => $message,
            self::Message_Type => self::Type_Success
        ];
        $session->setFlashdata($flashData);
    }

    public function addErrorMessage($message){
        $session = session();
        $flashData = [
            self::Message_Key => $message,
            self::Message_Type => self::Type_Error
        ];
        $session->setFlashdata($flashData);
    }


}