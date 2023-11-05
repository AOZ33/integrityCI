<?php

class Hitung_data extends CI_model
{
  public function hitungJumlahAsset()
  {   
      $query = $this->db->get('appointment');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
  }
}