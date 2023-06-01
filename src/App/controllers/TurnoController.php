<?php

namespace Paw\App\controllers;
use Paw\Core\Controller;
use Paw\App\models\Turno;

include 'twig.php';

class TurnoController extends Controller{

    public function solicitarTurnoValidar() {
        $turno = new Turno();
        $turno -> setNombre($_POST['nombre']);
        $turno -> setApellido($_POST['apellido']);
        $turno -> setFechaNacimiento($_POST['fechanacimiento']);
        $turno -> setDni($_POST['dni']);
        $turno -> setEdad($_POST['edad']);
        $turno -> setEmail($_POST['email']);
        $turno -> setTelefono($_POST['telefono']);
        $turno -> setFecha($_POST['fecha']);
        $turno -> setHorario($_POST['horario']);
        
        $this -> solicitarTurno(true);
    }

    public function solicitarTurno($procesado = false) {
        $twig = new TwigClass();
        echo $twig->renderTemp('solicitarTurno.view.twig', [
            'menu' => $this->menu,
            'subMenuInstitucional' => $this->subMenuInstitucional,
            'subMenuInformacionUtil' => $this->subMenuInformacionUtil,
        ]);
        //require $this ->viewsDir . '/solicitarTurno.view.twig';
    }

}