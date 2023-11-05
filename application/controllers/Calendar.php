<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Calendar_model');
  }
    
  public function index()
  {
  $this->load->view('calendar/index');
  }

  public function load()
  {
    $start = $this->input->get('start');
    $end = $this->input->get('end');
    
    $event_data = $this->Calendar_model->fecth_all_event($start, $end);
    foreach ($event_data->result_array() as $row ) {
      $data[] = array(
        'title' => $row['name'],
        'start' => $row['date_w'],
        'end' => $row['date_w']
      );
    }
    echo json_encode($data);
  }

  public function index1()
  {
  $this->load->view('calendar/index1');
  }

  public function load_lamaran()
  {
    $start = $this->input->get('start');
    $end = $this->input->get('end');
    
    $event_data = $this->Calendar_model->fecth_all_event($start, $end);
    foreach ($event_data->result_array() as $row ) {
      $data[] = array(
        'title' => $row['name'],
        'start' => $row['date_l'],
        'end' => $row['date_l']
      );
    }
    echo json_encode($data);
  }

  public function index2()
  {
  $this->load->view('calendar/index2');
  }

  public function load_prewedding()
  {
    $start = $this->input->get('start');
    $end = $this->input->get('end');
    
    $event_data = $this->Calendar_model->fecth_all_event($start, $end);
    foreach ($event_data->result_array() as $row ) {
      $data[] = array(
        'title' => $row['name'],
        'start' => $row['date_p'],
        'end' => $row['date_p']
      );
    }
    echo json_encode($data);
  }
  
  public function index3()
  {
  $this->load->view('calendar/index3');
  }

  public function load_pengsir()
  {
    $start = $this->input->get('start');
    $end = $this->input->get('end');
    
    $event_data = $this->Calendar_model->fecth_all_event($start, $end);
    foreach ($event_data->result_array() as $row ) {
      $data[] = array(
        'title' => $row['name'],
        'start' => $row['date_m'],
        'end' => $row['date_m']
      );
    }
    echo json_encode($data);
  }  
  
  public function index4()
  {
  $this->load->view('calendar/index4');
  }

  public function load_acara()
  {
    $start = $this->input->get('start');
    $end = $this->input->get('end');
    
    $event_data = $this->Calendar_model->fecth_all_event($start, $end);
    foreach ($event_data->result_array() as $row ) {
      $data[] = array(
        'title' => $row['name'] . $row['n_acara'],
        'start' => $row['date_a'],
        'end' => $row['date_a']
      );
    }
    echo json_encode($data);
  }  
}

?>