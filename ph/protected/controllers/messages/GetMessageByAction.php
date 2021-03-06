<?php
/*
Gets all users corresponding to a certain request
- set the where clause according to POST parameters
- a fields can be added to the selection clause, in order to retreive only certain fields from DB
 */
class GetMessageByAction extends CAction
{
    public function run()
    {
        $res = Message::getMessagesBy($_POST);
        Rest::json( $res );
        Yii::app()->end();
    }
}