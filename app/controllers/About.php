<?php 

class About extends Controller {
    public function index()
    {
        $data['judul'] = 'About Us';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}




