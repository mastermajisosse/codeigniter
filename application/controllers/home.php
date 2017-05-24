<?php
/**
 * Created by PhpStorm.
 * User: otmane
 * Date: 23-05-2017
 * Time: 15:55
 */
    class Home extends CI_Controller{

        public function index()
        {
            $this->load->view('home');
        }
}
?>