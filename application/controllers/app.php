<?php
error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');

class app extends CI_Controller
{


	function index()
	{

		if ($this->session->userdata('username') == "") {
			redirect('app/login');
		}

		elseif ($this->session->userdata('status') == "manager") {
			$data['_view'] = 'dashboard';
			$this->load->view('layouts/main', $data);
		}
		elseif ($this->session->userdata('status') == "karyawan") {
			$data['_view'] = 'd_karyawan';
			$this->load->view('krywn/main', $data);
		}
		elseif ($this->session->userdata('status') == "pengembangan") {
			$data['_view'] = 'd_pengembangan';
			$this->load->view('pengembangan/main', $data);
		} else {
			$this->load->view('siapa');
		}
	}









	public function login()
	{

		if ($this->input->post() == NULL) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek_user = $this->db->query("SELECT * FROM user WHERE username='$username' and password='" . md5($_POST['password']) . "'");

			if ($cek_user->num_rows() == 1) {
				foreach ($cek_user->result() as $row) {

					$sess_data['username'] = $row->username;
					$sess_data['status'] = $row->level;
					$sess_data['nama'] = $row->nama;
					$sess_data['pemilik'] = $row->pemilik;
					$this->session->set_userdata($sess_data);
				}
				redirect('app');
			} else {
?>
				<script type="text/javascript">
					alert('Username dan password kamu salah !');
					window.location = "<?php echo base_url('app/login'); ?>";
				</script>
<?php
			}
		}
	}



	function logout()
	{

		$this->session->unset_userdata('username');

		session_destroy();
		redirect('app/login');
	}
}
