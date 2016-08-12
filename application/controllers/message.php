<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of message
 *
 * @author Jimbo
 */
class message extends CI_Controller{
    //put your code here
    public function index(){
		$this->load->library('email');
		$nama = $this->input->get('nama');
		$email = $this->input->get('email');
		$message = $this->input->get('message');
		
		$this->email->from($email, $nama);
		$this->email->to('brainsoftware@gmail.com');
		$this->email->cc('simplebrain@gmail.com');
		$send = $this->email->send();
		
		if($send){
			$data['notif'] = "Your Message Has Been Send, Thank You For Contacting Us.";
			$this->load->view('index', $data);
		}
		else{
			$data['notif'] = "Sorry Some Function Doesn't Work Well, Your Message Can't Be Send.";
			$this->load->view('index', $data);
		}
    }
}
