<?php

namespace App\Models;

use App\Core\Model;

class Message extends Model
{
    protected int $id;
    protected int $autor;
    protected string $message;

    /**
     * @param int $autor
     * @param string $message
     */
    public function __construct(User $autor = null, string $message = "")
    {
        $this->autor = $autor->getId();
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getAutor(): User
    {
        return User::getOne($this->autor);
    }

    /**
     * @param int $autor
     */
    public function setAutor(int $autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}