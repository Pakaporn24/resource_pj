<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class function_model extends CI_Model {

        public function check_login($username,$password)
        {
		// echo $username;
		// echo $password;
		// exit();
                $this->db->where('user_login',$username);
		$this->db->where('user_password',$password);
		$query = $this->db->get('user_info');
		$result = $query->row();
		
		// print_r($result);
		// exit;
		return $result;

        }

         public function list_all()
        {   
                $query = $this->db->get('user_info');
		$result = $query->result();
                return $result;
        }

         public function rp_list_case()
        {   
                $query = $this->db->get('rp_case');
		$result = $query->result();
                return $result;
        }

	

	public function insert_admin()
	{
		$data = array(
                'user_name' => $this->input->post('user_name'),
                'user_login' => $this->input->post('user_login'),
                'user_password' => sha1($this->input->post('user_password'))
                );

		// print_r($data);
		// exit;
                $query=$this->db->insert('USER_INFO',$data);
	}


	//show form edit
	public function read($id){
                $this->db->where('id',$id);
                $query = $this->db->get('USER_INFO');
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

    public function update_admin()
        {
                $data = array(
                    'user_name' => $this->input->post('user_name'),
                    'USER_LEVEL' => $this->input->post('USER_LEVEL')
                );
                $this->db->where('id', $this->input->post('id'));
                $query=$this->db->update('USER_INFO',$data);
        }


        public function update_pwd_admin()
        {
                $data = array(
                    'user_password' => sha1($this->input->post('user_password1'))
                );
                $this->db->where('id', $this->input->post('id'));
                $query=$this->db->update('USER_INFO',$data);
        }


        public function del_admin($id)
        {
               $this->db->delete('USER_INFO',array('id'=>$id));

        }


}
