<?php
/**
 * Created by PhpStorm.
 * User: ssangole
 * Date: 5/7/18
 * Time: 9:11 AM
 */

namespace App\Service;


use App\Helper\LoggerTrait;
use Nexy\Slack\Client;
use Symfony\Component\Console\Command\LockableTrait;


class SlackClient
{

    use LoggerTrait;


    private $slack;

    public function __construct(Client $slack)
    {
        $this->slack = $slack;
    }



    public function sendMessage(string $from , string $message){

            $this->logInfo('Beaming a mesage to Slack !',['message'=>$message]);

            $slackMessage = $this->slack->createMessage()
                ->from($from)
                ->withIcon(':ghost:')
                ->setText($message);
            $this->slack->sendMessage($slackMessage);


    }
}