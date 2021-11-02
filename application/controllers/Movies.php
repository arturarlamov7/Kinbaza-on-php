<?php

defined('BASEPATH') OR exit('No direc script access allowed');

class Movies extends MY_Controller {

    public function __constract() {
        parent::__constract();
        $this->load->model('Films_model');
    }

    public function index() {

        if(!$this->dx_auth->is_admin()) {
            show_404();
        }

        $this->data['title'] = 'Все фильмы/сериалы';
        $this->data['movies'] = $this->Films_model->getMovies();
    }
}