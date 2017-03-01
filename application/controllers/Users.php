<?php
	class Users extends CI_Controller {

		public function index() {
			$data['users'] = $this->user_model->get_users();

			$this->load->view('templates/header');
			$this->load->view('users/index', $data);
			$this->load->view('templates/footer');
		}

		public function create() {
			if($this->input->post()){
				$this->user_model->create_users();
				redirect('users');
			}else{
				$this->load->view('templates/header');
				$this->load->view('users/create');
				$this->load->view('templates/footer');
			}
		}

		public function edit($id) {
			$data['user'] = $this->user_model->get_edituser($id);

			$this->load->view('templates/header');
			$this->load->view('users/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update() {
			$data['users'] = $this->user_model->update_users();
			redirect('users');
		}

		public function login() {
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			
			if($this->form_validation->run() == FALSE){
				$data = array(
					'errors' => validation_errors()
					);
				$this->session->set_flashdata($data);
				redirect('users/loginview');
			}else{
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
					);
				$result = $this->user_model->user_loggedin($data);

				if($result){

					$session_data = array(
						'username' => $data['username'],
						'password' => $data['password']
						);
					$this->session->set_userdata('logged_in' , $session_data);
					
					redirect('users/log/'.$result['id']);

				}else{
					$this->session->set_flashdata('login_failed' , 'Sorry you are not login');
					redirect('users/loginview');
				}
			}
		
		}

		public function log(){
			$userid = $this->uri->segment(3);
			$result['log'] = $this->user_model->get_log($userid);
			if(!empty($result['log']['log'])){
				$userlog = $result['log']['log'];
			}else{
				$userlog = "Start";
			}

			$result['update_log'] = $this->user_model->update_log($userid, $userlog);

			$this->load->view('templates/header');
			$this->load->view('users/log', $result);
			$this->load->view('templates/footer');
		}

		public function loginview() {
			$this->load->view('templates/header');
			$this->load->view('users/loginview');
			$this->load->view('templates/footer');
		}

		public function logout() {
			$this->session->unset_userdata('logged_in');
			$data['logout_display'] = 'Successfully Logout';
			redirect('users/loginview');

		}

	}