<?php

class M_login extends CI_Model
{
  function cek_login($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  function validate($email, $password)
  {
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get('staff_klinik', 1);
    return $result;
  }
}
