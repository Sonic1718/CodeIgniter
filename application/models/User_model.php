<?php 

	class User_model extends CI_Model{

		public function get_users() {
			$query = $this->db->get('users');
			return $query->result_array();
		}

		public function get_edituser($id = FALSE) {
			if($id === NULL){
				$query = $this->db->get('users');
				return $query->result_array();
			}

			$query = $this->db->get_where('users', array('id' => $id));
			return $query->row_array();
		}

		public function update_users() {
			$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname')
				);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('users' , $data);
			
		}

		public function user_loggedin($data) {
			$condition = "username ="."'".$data['username']. "' AND " . "password =" . "'" .$data['password']. "'";
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if($query->num_rows() == 1){
				return $query->row_array();
			}else{
				return false;
			}
		}

	}