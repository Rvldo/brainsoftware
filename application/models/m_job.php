<?php
    class m_job extends CI_Model 
    {
        function __construct() {
            parent::__construct();
        }
        function getall_job()
        {
            $query = $this->db->query('SELECT * FROM pekerjaan');
            return $query->result_array();
        }
    }
    
/* File : m_job.php
 * Location: ../models/
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

