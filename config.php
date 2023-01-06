<?php

const NIVEL = [
    "admin" => 1,
    "rey" => 2,
    "familia" => 3,
    "nino" => 4
];

const KEYS = [
    ["user" => "admin", "pass" => "admin", "nivel" => NIVEL['admin'], "nombre" => "Roberto"],
    ["user" => "1", "pass" => "1", "nivel" => NIVEL['rey'], "nombre" => "Melchor"],
    ["user" => "2", "pass" => "2", "nivel" => NIVEL['rey'], "nombre" => "Gaspar"],
    ["user" => "3", "pass" => "3", "nivel" => NIVEL['rey'], "nombre" => "Baltasar"],
    ["user" => "4", "pass" => "4", "nivel" => NIVEL['familia'], "nombre" => "Los Perez", "idNino" => 6],
    ["user" => "5", "pass" => "5", "nivel" => NIVEL['nino'], "nombre" => "Julian Perez", "idFamilia" => 5, "conducta" => false],
    ["user" => "6", "pass" => "6", "nivel" => NIVEL['familia'], "nombre" => "Los García", "idNino" => 8],
    ["user" => "7", "pass" => "7", "nivel" => NIVEL['nino'], "nombre" => "Enrique García", "idFamilia" => 7, "conducta" => true],
    ["user" => "8", "pass" => "8", "nivel" => NIVEL['familia'], "nombre" => "Los Gutierrez", "idNino" => 10],
    ["user" => "9", "pass" => "9", "nivel" => NIVEL['nino'], "nombre" => "Andres Gutierrez", "idFamilia" => 9, "conducta" => false],
    ["user" => "10", "pass" => "10", "nivel" => NIVEL['familia'], "nombre" => "Los Galindos", "idNino" => 12],
    ["user" => "11", "pass" => "11", "nivel" => NIVEL['nino'], "nombre" => "Ana María Galindos", "idFamilia" => 11, "conducta" => true]
];


const ERROR = [
    "",
    "Usuario o contraseña incorrectos",
    "Ya existe otro usuario con esos datos",
    "No puede existir mas de un hijo por familia",
    "No se puede borrar el usuario administrador",
    "No se puede borrar el usuario rey"
];

const TIPOS_REGALO = [
    "Juego de mesa",
    "Juego interactivo",
    "Manualidades",
    "Rompecabezas",
    "Aire libre",
    "Muñecas",
    "Figuras",
    "Peluches",
    "Miniaturas",
    "Juguetes de construcción"
];

const REGALOS = [
    ["nombre" => "Action Man", "tipo" => TIPOS_REGALO["6"], "fichero" => "action_man.jpg"],
    ["nombre" => "Ajedrez", "tipo" => TIPOS_REGALO["0"], "fichero" => "ajedrez.jpg"],
    ["nombre" => "Atmosfear", "tipo" => TIPOS_REGALO["1"], "fichero" => "atmosfear.jpg"],
    ["nombre" => "Backgammon", "tipo" => TIPOS_REGALO["0"], "fichero" => "backgammon.jpg"],
    ["nombre" => "Barbie", "tipo" => TIPOS_REGALO["5"], "fichero" => "barbie.jpg"],
    ["nombre" => "Barriguitas", "tipo" => TIPOS_REGALO["5"], "fichero" => "barriguitas.jpg"],
    ["nombre" => "Bicicleta", "tipo" => TIPOS_REGALO["4"], "fichero" => "bicicleta.jpg"],
    ["nombre" => "Blandiblub", "tipo" => TIPOS_REGALO["2"], "fichero" => "blandiblub.jpg"],
    ["nombre" => "Bola 8", "tipo" => TIPOS_REGALO["0"], "fichero" => "bola_8.jpg"],
    ["nombre" => "Bola saltarina", "tipo" => TIPOS_REGALO["4"], "fichero" => "bola_saltarina.jpg"],
    ["nombre" => "Bratz", "tipo" => TIPOS_REGALO["5"], "fichero" => "bratz.jpg"],
    ["nombre" => "Buzz Lightyear", "tipo" => TIPOS_REGALO["6"], "fichero" => "buzz_lightyear.jpg"],
    ["nombre" => "Caballeros del Zodiaco", "tipo" => TIPOS_REGALO["6"], "fichero" => "caballeros_del_zodiaco.jpg"],
    ["nombre" => "Cabbage Patch Kids", "tipo" => TIPOS_REGALO["5"], "fichero" => "cabbage_patch_kids.jpg"],
    ["nombre" => "Canicas", "tipo" => TIPOS_REGALO["4"], "fichero" => "canicas.jpg"],
    ["nombre" => "Cartas", "tipo" => TIPOS_REGALO["0"], "fichero" => "cartas.jpg"],
    ["nombre" => "Chapas", "tipo" => TIPOS_REGALO["4"], "fichero" => "chapas.jpg"],
    ["nombre" => "Cinexin", "tipo" => TIPOS_REGALO["1"], "fichero" => "cinexin.jpg"],
    ["nombre" => "Cluedo", "tipo" => TIPOS_REGALO["0"], "fichero" => "cluedo.jpg"],
    ["nombre" => "Coche de radiocontrol", "tipo" => TIPOS_REGALO["8"], "fichero" => "coche_de_radiocontrol.jpg"],
    ["nombre" => "Cocodrilo Sacamuelas", "tipo" => TIPOS_REGALO["0"], "fichero" => "cocodrilo_sacamuelas.jpg"],
    ["nombre" => "Conecta Cuatro", "tipo" => TIPOS_REGALO["0"], "fichero" => "conecta_cuatro.jpg"],
    ["nombre" => "Cometa", "tipo" => TIPOS_REGALO["4"], "fichero" => "cometa.jpg"],
    ["nombre" => "Cranium", "tipo" => TIPOS_REGALO["0"], "fichero" => "cranium.jpg"],
    ["nombre" => "Cubo de Rubik", "tipo" => TIPOS_REGALO["3"], "fichero" => "cubo_de_rubik.jpg"],
    ["nombre" => "Elmo Coquillas", "tipo" => TIPOS_REGALO["7"], "fichero" => "elmo_coquillas.jpg"],
    ["nombre" => "Esqueleto humano de kiosco", "tipo" => TIPOS_REGALO["0"], "fichero" => "esqueleto_humano_de_kiosco.jpg"],
    ["nombre" => "Exin Castillos", "tipo" => TIPOS_REGALO["9"], "fichero" => "exin_castillos.jpg"],
    ["nombre" => "Fisher-Price", "tipo" => TIPOS_REGALO["2"], "fichero" => "fisher-price.jpg"],
    ["nombre" => "Frisbee", "tipo" => TIPOS_REGALO["4"], "fichero" => "frisbee.jpg"],
    ["nombre" => "Fuerte Comansi", "tipo" => TIPOS_REGALO["8"], "fichero" => "fuerte_comansi.jpg"],
    ["nombre" => "Furby", "tipo" => TIPOS_REGALO["5"], "fichero" => "furby.jpg"],
    ["nombre" => "G.I. Joe", "tipo" => TIPOS_REGALO["8"], "fichero" => "g.i._joe.jpg"],
    ["nombre" => "Geyperman", "tipo" => TIPOS_REGALO["6"], "fichero" => "geyperman.jpg"],
    ["nombre" => "Gusiluz", "tipo" => TIPOS_REGALO["7"], "fichero" => "gusiluz.jpg"],
    ["nombre" => "HeroQuest", "tipo" => TIPOS_REGALO["0"], "fichero" => "heroquest.jpg"],
    ["nombre" => "Hot Wheels", "tipo" => TIPOS_REGALO["8"], "fichero" => "hot_wheels.jpg"],
    ["nombre" => "Hotel", "tipo" => TIPOS_REGALO["0"], "fichero" => "hotel.jpg"],
    ["nombre" => "Hula hoop", "tipo" => TIPOS_REGALO["4"], "fichero" => "hula_hoop.jpg"],
    ["nombre" => "Hundir la Flota", "tipo" => TIPOS_REGALO["0"], "fichero" => "hundir_la_flota.jpg"],
    ["nombre" => "Imperio Cobra", "tipo" => TIPOS_REGALO["0"], "fichero" => "imperio_cobra.jpg"],
    ["nombre" => "Indios y vaqueros", "tipo" => TIPOS_REGALO["8"], "fichero" => "indios_y_vaqueros.jpg"],
    ["nombre" => "Juegos Reunidos", "tipo" => TIPOS_REGALO["0"], "fichero" => "juegos_reunidos.jpg"],
    ["nombre" => "Lego", "tipo" => TIPOS_REGALO["9"], "fichero" => "lego.jpg"],
    ["nombre" => "Línea Directa", "tipo" => TIPOS_REGALO["0"], "fichero" => "linea_directa.jpg"],
    ["nombre" => "La Ratonera", "tipo" => TIPOS_REGALO["0"], "fichero" => "la_ratonera.jpg"],
    ["nombre" => "Magia Borrás", "tipo" => TIPOS_REGALO["0"], "fichero" => "magia_borras.jpg"],
    ["nombre" => "Magna Doodle", "tipo" => TIPOS_REGALO["2"], "fichero" => "magna_doodle.jpg"],
    ["nombre" => "Maquinita de pilas", "tipo" => TIPOS_REGALO["1"], "fichero" => "maquinita_de_pilas.jpg"],
    ["nombre" => "Mariquita Pérez", "tipo" => TIPOS_REGALO["5"], "fichero" => "mariquita_perez.jpg"],
    ["nombre" => "Masters del Universo", "tipo" => TIPOS_REGALO["6"], "fichero" => "masters_del_universo.jpg"],
    ["nombre" => "Matchbox", "tipo" => TIPOS_REGALO["8"], "fichero" => "matchbox.jpg"],
    ["nombre" => "Meccano", "tipo" => TIPOS_REGALO["9"], "fichero" => "meccano.jpg"],
    ["nombre" => "Monopoly", "tipo" => TIPOS_REGALO["0"], "fichero" => "monopoly.jpg"],
    ["nombre" => "Monster High", "tipo" => TIPOS_REGALO["5"], "fichero" => "monster_high.jpg"],
    ["nombre" => "Monster in My Pocket", "tipo" => TIPOS_REGALO["6"], "fichero" => "monster_in_my_pocket.jpg"],
    ["nombre" => "Mr. Potato", "tipo" => TIPOS_REGALO["3"], "fichero" => "mr._potato.jpg"],
    ["nombre" => "Muelle", "tipo" => TIPOS_REGALO["2"], "fichero" => "muelle.jpg"],
    ["nombre" => "My Little Pony", "tipo" => TIPOS_REGALO["5"], "fichero" => "my_little_pony.jpg"],
    ["nombre" => "Nancy", "tipo" => TIPOS_REGALO["5"], "fichero" => "nancy.jpg"],
    ["nombre" => "Nerf", "tipo" => TIPOS_REGALO["4"], "fichero" => "nenuco.jpg"],
    ["nombre" => "Nenuco", "tipo" => TIPOS_REGALO["5"], "fichero" => "nerf.jpg"],
    ["nombre" => "Operación", "tipo" => TIPOS_REGALO["0"], "fichero" => "operacion.jpg"],
    ["nombre" => "Osito de peluche", "tipo" => TIPOS_REGALO["7"], "fichero" => "osito_de_peluche.jpg"],
    ["nombre" => "Osos Amorosos", "tipo" => TIPOS_REGALO["7"], "fichero" => "osos_amorosos.jpg"],
    ["nombre" => "Parchís", "tipo" => TIPOS_REGALO["0"], "fichero" => "parchis.jpg"],
    ["nombre" => "Party & Co", "tipo" => TIPOS_REGALO["0"], "fichero" => "party_&_co.jpg"],
    ["nombre" => "Patines", "tipo" => TIPOS_REGALO["4"], "fichero" => "patines.jpg"],
    ["nombre" => "Pelota", "tipo" => TIPOS_REGALO["4"], "fichero" => "pelota.jpg"],
    ["nombre" => "Peonza", "tipo" => TIPOS_REGALO["4"], "fichero" => "peonza.jpg"],
    ["nombre" => "Pictionary", "tipo" => TIPOS_REGALO["0"], "fichero" => "pictionary.jpg"],
    ["nombre" => "Pistola de agua", "tipo" => TIPOS_REGALO["4"], "fichero" => "pistola_de_agua.jpg"],
    ["nombre" => "Play-Doh", "tipo" => TIPOS_REGALO["2"], "fichero" => "play-doh.jpg"],
    ["nombre" => "Playmobil", "tipo" => TIPOS_REGALO["6"], "fichero" => "playmobil.jpg"],
    ["nombre" => "Polly Pocket", "tipo" => TIPOS_REGALO["5"], "fichero" => "polly_pocket.jpg"],
    ["nombre" => "Quién es Quién", "tipo" => TIPOS_REGALO["0"], "fichero" => "quien_es_quien.jpg"],
    ["nombre" => "Quimicefa", "tipo" => TIPOS_REGALO["0"], "fichero" => "quimicefa.jpg"],
    ["nombre" => "Risk", "tipo" => TIPOS_REGALO["0"], "fichero" => "risk.jpg"],
    ["nombre" => "Robots boxeadores", "tipo" => TIPOS_REGALO["0"], "fichero" => "robots_boxeadores.jpg"],
    ["nombre" => "Scalextric", "tipo" => TIPOS_REGALO["8"], "fichero" => "scalextric.jpg"],
    ["nombre" => "Scrabble", "tipo" => TIPOS_REGALO["0"], "fichero" => "scrabble.jpg"],
    ["nombre" => "Simon", "tipo" => TIPOS_REGALO["1"], "fichero" => "simon.jpg"],
    ["nombre" => "Soldaditos", "tipo" => TIPOS_REGALO["8"], "fichero" => "soldaditos.jpg"],
    ["nombre" => "Star Wars", "tipo" => TIPOS_REGALO["6"], "fichero" => "star_wars.jpg"],
    ["nombre" => "Stretch Armstrong", "tipo" => TIPOS_REGALO["6"], "fichero" => "stretch_armstrong.jpg"],
    ["nombre" => "Subbuteo", "tipo" => TIPOS_REGALO["0"], "fichero" => "subbuteo.jpg"],
    ["nombre" => "Tabas", "tipo" => TIPOS_REGALO["4"], "fichero" => "tabas.jpg"],
    ["nombre" => "Tabú", "tipo" => TIPOS_REGALO["0"], "fichero" => "tabu.jpg"],
    ["nombre" => "Tamagotchi", "tipo" => TIPOS_REGALO["1"], "fichero" => "tamagotchi.jpg"],
    ["nombre" => "Tazos", "tipo" => TIPOS_REGALO["4"], "fichero" => "tazos.jpg"],
    ["nombre" => "Tente", "tipo" => TIPOS_REGALO["9"], "fichero" => "tente.jpg"],
    ["nombre" => "Tortugas Ninja", "tipo" => TIPOS_REGALO["6"], "fichero" => "tortugas_ninja.jpg"],
    ["nombre" => "Tragabolas", "tipo" => TIPOS_REGALO["0"], "fichero" => "tragabolas.jpg"],
    ["nombre" => "Transformers", "tipo" => TIPOS_REGALO["6"], "fichero" => "transformers.jpg"],
    ["nombre" => "Tren eléctrico", "tipo" => TIPOS_REGALO["8"], "fichero" => "tren_electrico.jpg"],
    ["nombre" => "Trivial Pursuit", "tipo" => TIPOS_REGALO["0"], "fichero" => "trivial_pursuit.jpg"],
    ["nombre" => "Trolls", "tipo" => TIPOS_REGALO["5"], "fichero" => "trolls.jpg"],
    ["nombre" => "Twister", "tipo" => TIPOS_REGALO["4"], "fichero" => "twister.jpg"],
    ["nombre" => "UNO", "tipo" => TIPOS_REGALO["0"], "fichero" => "uno.jpg"],
    ["nombre" => "Yo-yo", "tipo" => TIPOS_REGALO["4"], "fichero" => "yo-yo.jpg"]
];

const DESCRIPCION = [
    "En un lugar de la Mancha, de cuyo nombre no quiero acordarme, 
    no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, 
    adarga antigua, rocín flaco y galgo corredor.
    Una olla de algo más vaca que carnero, salpicón las más noches, 
    duelos y quebrantos los sábados, lantejas los viernes, algún palomino 
    de añadidura los domingos, consumían las tres partes de su hacienda.
    El resto della concluían sayo de velarte, calzas de velludo para las 
    fiestas, con sus pantuflos de lo mesmo, y los días de entresemana 
    se honraba con su vellorí de lo más fino.
    Tenía en su casa una ama que pasaba de los cuarenta, y una sobrina 
    que no llegaba a los veinte, y un mozo de campo y plaza, 
    que así ensillaba el rocín como tomaba la podadera."
];

const DIR = "";
const UP = "../";
const UP2 = "../../";
const MODELO = DIR . "modelo/";
const VISTA = DIR . "vista/";
const VISTA_INDEX = DIR . VISTA . "index/";
const VISTA_LOGIN = DIR . VISTA . "login/";
const VISTA_REY = DIR . VISTA . "rey/";
const VISTA_ADMIN = DIR . VISTA . "admin/";
const VISTA_FAMILIA = DIR . VISTA . "familia/";
const VISTA_NINO = DIR . VISTA . "nino/";
const CONTROLADOR = DIR . "controlador/";
const INCLUDES = DIR . "includes/";
const ASSETS = "assets/";
const CSS = DIR . ASSETS . "css/";
const IMAGES = DIR . ASSETS . "images/";
const IMAGES_JUEGOS = IMAGES . "juegos/";
const IMAGES_ICONOS = IMAGES . "iconos/";
const JS = DIR . "assets/js/";

const HEADER = "header.php";
const NAV = "nav-bar.php";
const BODY = "body.php";
const FOOTER = "footer.php";

const NIVEL_PATH = [
    NIVEL['admin'] => VISTA_ADMIN . "admin.php",
    NIVEL['rey'] => VISTA_REY . "rey.php",
    NIVEL['familia'] => VISTA_FAMILIA . "familia.php",
    NIVEL['nino'] => VISTA_NINO . "nino.php",
];

const REGALOS_MAXIMOS = 8;


