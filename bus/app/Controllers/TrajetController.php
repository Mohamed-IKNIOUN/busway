<?php

namespace App\Controllers;

use App\Models\TrajetModel;
use App\Models\StationModel;

class TrajetController extends BaseController
{
    public function index()
    {
        $stationModel = new StationModel();

        $data['stations'] = $stationModel->findAll();

        return view('welcome_message', $data);
    }
    public function rechercherTrajet()
    {
        $trajetModel = new TrajetModel();
        $stationModel = new StationModel();

        $stationDepart = $this->request->getPost('station_depart');
        $stationArrivee = $this->request->getPost('station_arrivee');

        $data['trajets'] = $trajetModel->getTrajetsEntreStations($stationDepart, $stationArrivee);
        $data['stations'] = $stationModel->findAll();
        return view('welcome_message', $data);
    }
}