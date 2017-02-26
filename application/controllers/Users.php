<?php
	class Users extends CI_Controller {

		public function index() {
			$data['users'] = $this->user_model->get_users();

			$this->load->view('templates/header');
			$this->load->view('users/index', $data);
			$this->load->view('templates/footer');
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
					redirect('users');

				}else{
					$this->session->set_flashdata('login_failed' , 'Sorry you are not login');
					redirect('users/loginview');
				}
			}
		
		}

		public function loginview() {
			$this->load->view('templates/header');
			$this->load->view('users/loginview');
			$this->load->view('templates/footer');
		}

		public function logout() {
			$this->session->unset_userdata('logged_in');
			$data['logout_display'] = 'Successfully Logout';

			$this->load->view('templates/header');
			$this->load->view('users/loginview', $data);
			$this->load->view('templates/footer');

		}

	}