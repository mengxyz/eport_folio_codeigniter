<?php
class Classroom_model extends CI_Model
{
    public function addclassroom()
    { 
        $data = array(
            'c_name' => $this->input->post('c_name')
        );
        $query = $this->db->insert('classroom',$data);
        if($query){
            echo 'add ok';
        }else{
            echo 'false';
        }               
    }

    public function editclassroom()
    { 
        $data = array(
            'c_name' => $this->input->post('c_name')
        );
        $this->db->where('c_id',$this->input->post('c_id'));
        $query = $this->db->update('classroom',$data);
        if($query){
            echo 'add ok';
        }else{
            echo 'false';
        }               
    }

    public function read($c_id)
    {
        $this->db->select('*');
        $this->db->from('classroom');
        $this->db->where('c_id',$c_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $data = $query->row();
            return $data;
        }
        return FALSE;
        
    }

    public function showclassroom(){
        $query = $this->db->get('classroom');
        return $query->result();
    }

    public function deleteclassroom($c_id){
        $this->db->delete('classroom',array('c_id'=>$c_id));
        return redirect('classroom','refresh');
    }
    
}
