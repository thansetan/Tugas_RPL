<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Shift extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Shift_model');
    } 

    /*
     * Listing of shift
     */
    function index()
    {
        $data['shift'] = $this->Shift_model->get_all_shift();
        
        $data['_view'] = 'shift/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new shift
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('keterangan','Keterangan','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $shift_id = $this->Shift_model->add_shift($params);
            redirect('shift/index');
        }
        else
        {            
            $data['_view'] = 'shift/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a shift
     */
    function edit($id_shift)
    {   
        // check if the shift exists before trying to edit it
        $data['shift'] = $this->Shift_model->get_shift($id_shift);
        
        if(isset($data['shift']['id_shift']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('keterangan','Keterangan','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'keterangan' => $this->input->post('keterangan'),
                );

                $this->Shift_model->update_shift($id_shift,$params);            
                redirect('shift/index');
            }
            else
            {
                $data['_view'] = 'shift/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The shift you are trying to edit does not exist.');
    } 

    /*
     * Deleting shift
     */
    function remove($id_shift)
    {
        $shift = $this->Shift_model->get_shift($id_shift);

        // check if the shift exists before trying to delete it
        if(isset($shift['id_shift']))
        {
            $this->Shift_model->delete_shift($id_shift);
            redirect('shift/index');
        }
        else
            show_error('The shift you are trying to delete does not exist.');
    }
    
}
