<?php declare(strict_types=1);

use JetBrains\PhpStorm\NoReturn;

error_reporting(E_ALL);


class Database
{

    private int $idUsuario = 0;
    private int $idRegalo = 0;
    private array $usuarios = array();
    private array $tipos = array();
    private array $stockRegalos = array();

    public function __construct()
    {

    }

    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(int $idUsuario): void
    {
        $this->idUsuario = $idUsuario;
    }

    public function getIdRegalo(): int
    {
        return $this->idRegalo;
    }

    public function setIdRegalo(int $idRegalo): void
    {
        $this->idRegalo = $idRegalo;
    }

    public function getStockRegalos(): array
    {
        return $this->stockRegalos;
    }

    public function setStockRegalos(array $stockRegalos): void
    {
        $this->$stockRegalos = $stockRegalos;

    }

    public function getStockRegalo($i): Regalo
    {
        return $this->stockRegalos[$i];
    }

    public function setStockRegalo(Regalo $regalo): void
    {
        # añado el nuevo regalo
        $this->stockRegalos[] = $regalo;

        # pongo el id autoincremental en el usuario y el tipo
        $this->idRegalo++;

        # asigno la id
        $regalo->setId($this->idRegalo);

    }

    public function getUsuarios(): array
    {
        return $this->usuarios;
    }

    public function setUsuarios(array $usuarios): void
    {

        $this->usuarios = $usuarios;
    }

    public function getUsuario(int $i): Usuario
    {
        return $this->usuarios[$i];
    }

    public function setUsuario(Usuario $usuario, Admin|Rey|Familia|Nino $tipo, int $id = 0): void
    {
        $id--; // para ajustar el id al id del array

        # añado el nuevo usuario y tipo
        $this->usuarios[] = $usuario;
        $this->tipos[] = $tipo;

        # pongo el id autoincremental en el usuario y el tipo
        $this->idUsuario++;

        # asigno la id
        $usuario->setId($this->idUsuario);
        $tipo->setId($this->idUsuario);

        # si es un niño le pongo a la familia su id
        if ($id > 0 && get_class($tipo) == "Nino")
            $this->getTipo($id)->setIdNino($this->idUsuario);

    }

    public function delUsuario(int $i): void
    {
        $i--; // para ajustar el id al id del array

        $tipo = $this->tipos[$i];
        $usuario = $this->usuarios[$i];

        # si es el admin o rey no lo borro
        if ($usuario->getNivel() == NIVEL['admin']) $this->lanzaError(4);
        if ($usuario->getNivel() == NIVEL['rey']) $this->lanzaError(5);

        # si es un niño borro primero anulo el idNino en familia
        if ($tipo instanceof Nino) {

            $idFamilia = $tipo->getIdFamilia();
            $this->tipos[$idFamilia - 1]->setIdNino(0);
        }

        # si en una familia primero borro a nino si lo tiene
        if ($tipo instanceof Familia &&
            $tipo->getIdNino() > 0) {

            # recogo el idNino de la familia
            $idNino = $tipo->getIdNino();

            # borro primero el niño
            $this->borrar($idNino - 1);

        }

        # por ultimo borro el niño o usuario que sea
        $this->borrar($i);

    }

    private function borrar($temp): void
    {
        # borro el usuario
        $count = $this->borrarUsuarioTipo($temp);

        # reordeno los ids
        if ($count > 0) $this->reoordenar($temp);

        # reduzco en uno el id autoincremental
        $this->setIdUsuario($this->idUsuario - 1);
    }

    private function borrarUsuarioTipo($temp): int
    {
        $count = count(array_splice($this->usuarios, $temp, 1));
        $count += count(array_splice($this->tipos, $temp, 1));
        return $count;
    }

    private function reoordenar($temp)
    {

        # reordenamos los usuarios y tipos
        for ($i = $temp; $i < $this->idUsuario - 1; $i++) {

            $tipo = $this->tipos[$i];

            # reordenamos los id
            $this->usuarios[$i]->setId($i + 1);
            $tipo->setId($i + 1);

            # reordenamos los idNino en las Familias
            # y los idFamilia en Nino
            $isFamilia = $tipo instanceof Familia;
            $isNino = $tipo instanceof Nino;

            $idFamilia = $isNino ? $tipo->getIdFamilia() : 0;
            $idNino = $isFamilia ? $tipo->getIdNino() : 0;

            $isNinoEntreValores = $idNino > 0 && $idNino - 1 >= $i;
            $isFamiliaEntreValores = $idFamilia > 0 && $idFamilia - 1 >= $i;

            if ($isFamilia && $isNinoEntreValores) $tipo->setIdNino($idNino - 1);
            if ($isNino && $isFamiliaEntreValores) $tipo->setIdFamilia($idFamilia - 1);
        }
    }

    private function lanzaError($error): void
    {
        $_SESSION['error'] = $error;
        header("location:" . UP . VISTA_ADMIN . "admin.php");
        die();
    }

    public function getTipos(): array
    {
        return $this->tipos;
    }

    public function setTipos(array $tipos): void
    {
        $this->tipos = $tipos;
    }

    public function getTipo(int $i): Admin|Rey|Familia|Nino
    {
        return $this->tipos[$i];
    }

    public function setTipo(Admin|Rey|Familia|Nino $tipo): void
    {
        $this->tipos = $tipo;
    }

}