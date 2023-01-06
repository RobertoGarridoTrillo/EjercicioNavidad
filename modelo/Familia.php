<?php declare(strict_types=1);
error_reporting(E_ALL);


class Familia
{
    private int $id = 0;
    private string $nombre = "";
    private int $idNino = 0;

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
                break;
            case 2:
                $this->nombre = $args[0];
                $this->idNino = $args[1];
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

    public function getIdNino(): int
    {
        return $this->idNino;
    }

    public function setIdNino(int $idNino): void
    {
        $this->idNino = $idNino;
    }

    public function __toString(): string
    {
        $result = "";
        if (isset($this->id)) $result .= "id: " . $this->id . " ";
        if (!empty($this->nombre)) $result .= "nombre: " . $this->nombre . " ";
        if (!empty($this->idNino)) $result .= "nivel: " . $this->idNino . " ";
        return $result . "<br>";
    }


}