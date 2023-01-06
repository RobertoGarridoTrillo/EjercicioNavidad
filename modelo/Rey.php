<?php declare(strict_types=1);
error_reporting(E_ALL);


class Rey
{
    private int $id = 0;
    private string $nombre = "";

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
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

    public function getNombre(): mixed
    {
        return $this->nombre;
    }

    public function setNombre(mixed $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __toString(): string
    {
        $result = "";
        if (isset($this->id)) $result .= "id: " . $this->id . " ";
        if (!empty($this->nombre)) $result .= "nombre: " . $this->nombre . " ";
        return $result . "<br>";
    }


}