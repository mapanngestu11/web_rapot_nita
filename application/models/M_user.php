<?php
class M_user extends CI_Model
{


    function cek_user($u, $p)
    {

        $hasil = $this->db->query("SELECT * FROM tabel_user WHERE username='$u' AND password =md5('$p')");
        return $hasil;
    }

}
