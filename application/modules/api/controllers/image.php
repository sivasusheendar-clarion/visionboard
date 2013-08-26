<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Image extends Base_Controller {

    //  public $ajax_controller = TRUE;

    public function fetch() {
        $email = $this->input->post('key');


        $result['code'] = 200;
        $result['data'] = array('images1.jpg','images1.jpg','images1.jpg','images1.jpg','images1.jpg','images1.jpg','images1.jpg');

        echo json_encode($result);
        exit;
    }

}

?>