<?php
class indexfile extends CI_Controller{
    public function index()
    {
		$data['notif'] = "";
        $this->load->view('index', $data);
    }
}

/* 
 * End Of File C_index
 */

