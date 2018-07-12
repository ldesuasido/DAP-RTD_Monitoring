<?php
    class controller extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('model');
        }
        public function index(){
           
     
           // $msgData=$this->SModel->msg_list();
         //   var_dump($data);
            $this->load->view('vhome');
            
        }
        public function get_all_data(){
            $dap_data=$this->model->dap_list(); 
            $amp_data=$this->model->amp_list();
            $data=array_merge($dap_data,$amp_data);
            echo json_encode($data);
           
    //         $all_data = array_merge($dap_data,$amp_data);
    //    //     $all_data=$amp_data + $dap_data;
    //         $fp_all=fopen('resources/js/data.json','w');
    //         fwrite($fp_all,json_encode($all_data));
    //         fclose($fp_all);
    //         echo json_decode($all_data);
        //    $data1=json_decode(file_get_contents('resources/js/data.json'));
         //   echo $data1[01]->rtd_price_01; 
        
        }
      

    }
?>
