<?php 

	class User_model extends CI_Model{

		public function get_users() {
			$query = $this->db->get('users');
			return $query->result_array();
		}

		public function create_users() {
			$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				);
			$this->db->set($data);
			$query = $this->db->insert('users');
		}

		public function create_datalog() {
			$data = array(
				'users_id' => $this->input->post('id'),
				'sn' => $this->input->post('seminar_num'),
				'from' => $this->input->post('from'),
				'to' => $this->input->post('to'),
				'place' => $this->input->post('place')
				);
			$this->db->where('users_id', $this->input->post('id'));
			$this->db->set($data);
			$query = $this->db->insert('user_log');
		}

		public function get_edituser($id = FALSE) {
			if($id === NULL){
				$query = $this->db->get('users');
				return $query->result_array();
			}

			$query = $this->db->get_where('users', array('id' => $id));
			return $query->row_array();
		}

		public function update_users(){
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
				exit;
			}

		}

		public function get_log($userid){
			$this->db->order_by('id', 'DESC');
			$this->db->where('users_id', $userid);
			$query = $this->db->get('user_log');
			return $query->result_array();
		}

		public function update_log($userid,$userlog){
			$current_date = date('Y-m-d H:i:s');
			$date = date('M d D, Y', strtotime($current_date));
			$logged['log'] = $userlog.$date." <br>";
			$this->db->where('users_id', $userid);
			return $update_query = $this->db->update('user_log' , $logged);
		}

	}