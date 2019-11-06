<?php
class Student_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getAllGroup()
    {
        $query = $this->db->query('SELECT c_id,c_name FROM classroom');
        return $query->result();
    }

    public function editstudent()
    {
        $data = $this->db->select('*')
            ->from('student')
            ->where('std_id', $this->input->post('std_id'))
            ->get()
            ->row();
        $file_name = $data->std_pic;
        $filename = "";
        if ($_FILES["std_pic"]["name"] != "") {
            @unlink('./img/' . $file_name);


            $type_file = pathinfo($_FILES["std_pic"]["name"], PATHINFO_EXTENSION);
            $this->load->helper('string');
            $random_string = random_string('alnum', 5);
            $rename = "file_" . date('YmdHis') . '_' . $random_string . "." . $type_file;
            $config['upload_path'] = 'img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 60000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;
            $config['file_name'] = $rename;
            $config['maintain_ratio'] = false;

            if ($_FILES["std_pic"]["error"] == 0) {
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('std_pic');
                $filename = $rename;
            }
        } else {
            $filename = "$file_name";
        }
        $data = array(
            'std_name' => $this->input->post('std_name'),
            'std_address' => $this->input->post('std_address'),
            'std_tel' => $this->input->post('std_tel'),
            'c_id' => $this->input->post('c_id'),
            'std_pic' => $filename
        );
        $this->db->where('std_id',$this->input->post('std_id'));
        $query = $this->db->update('student', $data);
        return redirect('student', 'refresh');
    }

    public function read($std_id)
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('std_id', $std_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showstudent()
    {
        $this->db->select('s.*,c_name');
        $this->db->from('student as s');
        $this->db->join('classroom as c', 's.c_id=c.c_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function deletestudent($std_id)
    {
        $this->db->delete('student', array('std_id' => $std_id));
       return redirect('student', 'refresh');
    }
}
