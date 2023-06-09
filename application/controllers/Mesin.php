<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mesin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mesin_model');
    } 

    /*
     * Listing of mesin
     */
    function index()
    {
        $data['mesin'] = $this->Mesin_model->get_all_mesin();
        
        $data['_view'] = 'mesin/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new mesin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('id_perusahaan','Id Perusahaan','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_perusahaan' => $this->input->post('id_perusahaan'),
				'nama' => $this->input->post('nama'),
            );
            
            $mesin_id = $this->Mesin_model->add_mesin($params);
            redirect('mesin/index');
        }
        else
        {
			$this->load->model('Perusahaan_model');
			$data['all_perusahaan'] = $this->Perusahaan_model->get_all_perusahaan();
            
            $data['_view'] = 'mesin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a mesin
     */
    function edit($id_mesin)
    {   
        // check if the mesin exists before trying to edit it
        $data['mesin'] = $this->Mesin_model->get_mesin($id_mesin);
        
        if(isset($data['mesin']['id_mesin']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('id_perusahaan','Id Perusahaan','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_perusahaan' => $this->input->post('id_perusahaan'),
					'nama' => $this->input->post('nama'),
                );

                $this->Mesin_model->update_mesin($id_mesin,$params);            
                redirect('mesin/index');
            }
            else
            {
				$this->load->model('Perusahaan_model');
				$data['all_perusahaan'] = $this->Perusahaan_model->get_all_perusahaan();

                $data['_view'] = 'mesin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The mesin you are trying to edit does not exist.');
    } 

    /*
     * Deleting mesin
     */
    function remove($id_mesin)
    {
        $mesin = $this->Mesin_model->get_mesin($id_mesin);

        // check if the mesin exists before trying to delete it
        if(isset($mesin['id_mesin']))
        {
            $this->Mesin_model->delete_mesin($id_mesin);
            redirect('mesin/index');
        }
        else
            show_error('The mesin you are trying to delete does not exist.');
    }
    
}
