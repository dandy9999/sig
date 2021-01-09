<?php 

class Map extends Controller {
    public function index($id_apotik = null)
    {
        $data['judul'] = 'Map';
        $data['apt'] = $this->model('Apotek_model')->getAllApotek();
        $data['id_apotik'] = $id_apotik;
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
        $id_apotik = isset($_POST['apotik_id']) ? $_POST['apotik_id'] : null;
        $keyword_name = isset($_POST['keyword']) ? $_POST['keyword'] : null;

        if($id_apotik !== null){
            echo json_encode($this->model('Apotek_model')->getApotekById($id_apotik), JSON_NUMERIC_CHECK);
        }else if($keyword_name !== null){
            echo json_encode($this->model('Apotek_model')->cariDataApotek($keyword_name),JSON_NUMERIC_CHECK);
        }
        else{
            echo json_encode($this->model('Apotek_model')->getAllApotek(), JSON_NUMERIC_CHECK);

        }
    }
}