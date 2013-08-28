<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Image extends Base_Controller {

    //  public $ajax_controller = TRUE;

    public function fetch() {
        $key = $this->input->post('key');



        $this->load->model('images/mdl_images');

        $this->mdl_images->like('tag', $key);
        $query = $this->mdl_images->get('cb_images');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $result['data'][] =array($row->url,$row->id);
            }
        }

        $result['code'] = 200;
        //   $result['data'] = array('images1.jpg','images1.jpg','images1.jpg','images1.jpg','images1.jpg','images1.jpg','images1.jpg');

        echo json_encode($result);
        exit;
    }

}

?>