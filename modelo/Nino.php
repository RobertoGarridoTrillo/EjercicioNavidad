<?php declare(strict_types=1);
error_reporting(E_ALL);


class Nino
{
    private int $id = 0;
    private array $listaRegalos = array();

    private string $nombre = "";
    private bool $bueno = true;
    private int $idFamilia = 0;

    public function __construct(...$args)
    {
        switch (count($args)) {
            case 1:
                $this->nombre = $args[0];
                break;
            case 2:
                $this->nombre = $args[0];
                $this->idFamilia = $args[1];
                break;
            case 3:
                $this->nombre = $args[0];
                $this->idFamilia = $args[1];
                $this->bueno = $args[2];
                break;
                case 4:
                $this->nombre = $args[0];
                $this->idFamilia = $args[1];
                $this->bueno = $args[2];
                $this->listaRegalos = $args[4];
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

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIdFamilia(): int
    {
        return $this->idFamilia;
    }

    public function setIdFamilia(int $idFamilia): void
    {
        $this->idFamilia = $idFamilia;
    }

    public function isBueno(): bool
    {
        if (is_bool($this->bueno))
            if ($this->bueno) return true;
        return false;
    }

    public function setBueno(bool $bueno): void
    {
        $this->bueno = $bueno;
    }

    public function getListaRegalos(): array
    {
        return $this->listaRegalos;
    }

    public function setListaRegalos(array $listaRegalos): void
    {
        $this->listaRegalos = $listaRegalos;
    }

    public function anadirRegalo(Regalo $regalo)
    {

    }

    public function __toString(): string
    {
        $result = "";
        if (isset($this->id)) $result .= "id: " . $this->id . " ";
        if (!empty($this->idNino)) $result .= "idNino: " . $this->idNino . " ";
        if (!empty($this->bueno)) $result .= "bueno: " . $this->bueno . " ";
        if (!empty($this->listaRegalos)) $result .= "regalos: " . $this->listaRegalos.toString() . " ";
        return $result . "<br>";
    }


}