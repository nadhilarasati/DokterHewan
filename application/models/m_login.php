<?php

class M_login extends CI_Model
{
  function cek_login($post)
  {
    $this->db->from('pemilik_hewan');
    $this->db->where('email', $post['email']);
    $this->db->where('password', $post['password']);
    $query = $this->db->get();
    return $query;
  }

  function validate($email, $password)
  {
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get('staff_klinik', 1);
    return $result;
  }
}
