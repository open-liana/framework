<?php
/**
 * Created by Arif Hidayat
 * on October 19, 2018
 */

namespace LianaCore\Response;

class Callback
{
    /**
     * @var null
     */
    private $message;
    /**
     * @var bool
     */
    private $status;
    /**
     * @var null
     */
    private $data;

    /**
     * Callback constructor.
     * @param null $message
     * @param bool $status
     * @param null $data
     */
    public function __construct($message = null, $status = false, $data = null){
        $this->message = $message;
        $this->status = $status;
        $this->data = $data;
    }

    /**
     * @return null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param null $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    /**
     * @return null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param null $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    /**
     * Callback response format
     *
     * @return array
     */
    private function response(){
        return
            [
                "message" => $this->message,
                "status" => $this->status,
                "data" => $this->data,
            ];
    }

    public function array(){
        return $this->response();
    }

    public function json(){
        return Json::fromArray($this->response());
    }
}