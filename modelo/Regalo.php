<?php declare(strict_types=1);
error_reporting(E_ALL);


class Regalo
{
    private int $id = 0;
    private string $nombre = "";
    private string $tipo = "";
    private string $fichero = "";


    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
                break;
            case 2:
                $this->nombre = $args[0];
                $this->tipo = $args[1];
                break;
            case 3:
                $this->nombre = $args[0];
                $this->tipo = $args[1];
                $this->fichero = $args[2];
                break;
            default:
                break;
        }
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFichero(): string
    {
        return $this->fichero;
    }

    public function setFichero(string $fichero): void
    {
        $this->fichero = $fichero;
    }

    public function __toString(): string
    {
        global $regalo;

        $result = "";
        if (isset($this->id)) $result .= "idRegalo: " . $this->id . " ";
        if (!empty($this->nombre)) $result .= "nombre: " . $this->nombre . " ";
        if (!empty($this->imagen)) $result .= "ruta imagen: " . $this->fichero . " ";
        if (!empty($this->tipo)) $result .= "tipo: " . $this->tipo . " ";
        return $result . "<br>";
    }


}