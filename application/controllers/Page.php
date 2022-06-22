<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    

  }
 
  function index(){
    $this->load->model('Read_Model');
    $results=$this->Read_Model->getdata();
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
          // $this->load->view('dashboard_view');
          $this->load->view('dashboard_view',['result'=>$results]);
      }else{
          echo "Access Denied";
      }
     
      // $this->load->view('dashboard_view',['result'=>$results]);
  }
 
  function staff(){
    $this->load->model('Read_Model');
    $results=$this->Read_Model->getdata();
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard_view',['result'=>$results]);
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    $this->load->model('Read_Model');
    $results=$this->Read_Model->getdata();
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){
      $this->load->view('dashboard_view',['result'=>$results]);
        }else{
        echo "Access Denied";
    }
  }
 
  // for particular recod
public function getdetails($uid)
{
$this->load->model('Read_Model');
$reslt=$this->Read_Model->getuserdetail($uid);
$this->load->view('update',['row'=>$reslt]);
}
}