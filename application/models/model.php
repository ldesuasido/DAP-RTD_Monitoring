<?php 
class model extends CI_Model{
    
    public function dap_list(){
            $date=date("Ymd");
            $query=$this->db->query('SELECT * FROM dap WHERE dap_deldate='.$date.' AND dap_partid IN ("APRI","HEDCOR","HEDCORBA","HEDCORHE","HSABI","EAUC","TLI","TMO","CPPC","PEC")');
            return $query->result_array();
            
       //     echo $query->amp_deldate;


    }
    public function amp_list(){
        $date=date("Ymd");
        $query=$this->db->query('SELECT * FROM amp WHERE amp_deldate='.$date.' AND amp_partid IN ("APRI","HEDCOR","HEDCORBA","HEDCORHE","HSABI","EAUC","TLI","TMO","CPPC","PEC")');
        return $query->result_array();
        
   //     echo $query->amp_deldate;


}

    public function msg_list(){
            date_default_timezone_set("Asia/Manila");
         //   echo date("Y-m-d h:i:s");
            $date=date("Y-m-d h:i:s");
            $query1=$this->db->get_where('system_messages',array('msg_dcreated'=>$date));
            return $query1->result();
    }
   
}
?>
