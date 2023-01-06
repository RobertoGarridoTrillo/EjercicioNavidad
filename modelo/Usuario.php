<?php declare(strict_types=1);
error_reporting(E_ALL);


class Usuario
{
    private string $user = "";
    private string $pass = "";
    private int $nivel = 0;
    private int $id = 0;

    public function __construct(...$args)
    {
        switch (count($args)) {

            case 1:
                $this->user = $args[0];
                break;
            case 2:
                $this->user = $args[0];
                $this->pass = $args[1];
                break;
            case 3:
                $this->user = $args[0];
                $this->pass = $args[1];
                $this->nivel = $args[2];
                break;
            default:
                break;
        }
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUser(): mixed
    {
        return $this->user;
    }

    public function setUser(mixed $user): void
    {
        $this->user = $user;
    }

    public function getPass(): mixed
    {
        return $this->pass;
    }

    public function setPass(mixed $pass): void
    {
        $this->pass = $pass;
    }

    public function getNivel(): mixed
    {
        return $this->nivel;
    }

    public function setNivel(mixed $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function __toString(): string
    {
        $result = "";
        if (isset($this->id)) $result .= "id: " . $this->id . " ";
        if (!empty($this->user)) $result .= "user: " . $this->user . " ";
        if (!empty($this->pass)) $result .= "pass: " . $this->pass . " ";
        if (!empty($this->nivel)) $result .= "nivel: " . $this->nivel . " ";
        return $result."<br>";
    }


}