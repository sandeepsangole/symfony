<?php
/**
 * Created by PhpStorm.
 * User: ssangole
 * Date: 5/7/18
 * Time: 9:24 AM
 */

namespace App\Helper;


trait LoggerTrait
{

    /**
     * @var LoggerInterface|null
     */
    private $logger;
    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    private function logInfo(string $message, array $context = [])
    {
        if ($this->logger) {
            $this->logger->info($message, $context);
        }
    }

}