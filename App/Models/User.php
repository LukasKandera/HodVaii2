<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    protected int $id;
    protected string $name;
    protected string $passwd;

    /**
     * @param string $name
     * @param string $passwd
     */
    public function __construct(string $name, string $passwd)
    {
        $this->name = $name;
        $this->passwd = $passwd;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPasswd(): string
    {
        return $this->passwd;
    }

    /**
     * @param string $passwd
     */
    public function setPasswd(string $passwd): void
    {
        $this->passwd = $passwd;
    }



}