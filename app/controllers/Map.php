<?php 

class Map extends Controller {
    public function index()
    {
        $data['judul'] = 'Map';
        $data['apt'] = $this->model('Apotek_model')->getAllApotek();
        $this->view('templates/header', $data);
        $this->view('map/index', $data);
        $this->view('templates/footer');
    }

    public function getMapById()
    {
        echo json_encode($this->model('Apotek_model')->getApotekById($_POST['id']));
    }

    public function getAllMap()
    {
        echo json_encode($this->model('Apotek_model')->getAllApotek());
    }
}