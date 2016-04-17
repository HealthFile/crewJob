<?php

class Projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Projects_model');
        $this->load->library('form_validation');
        $this->load->library('image_lib');

    }
    public function index()
    {
        $category = $this->Category_model->getAllCategory();
        $projects = $this->Projects_model->getAllProjects();
        $projects_limit = $this->Projects_model->get_with_limit(2);

        echo "<h1>Projects:</h1>";
        echo "<pre>";
        print_r($projects);
        echo "</pre>";


        echo "<hr />";
        echo "<pre>";
        print_r($projects_limit);
        echo "</pre>";


        echo "<hr/>";
        echo "<h1>Categories:</h1>";
        foreach ($category as $item) {
            echo $item['name']. '<br />';
        }
    }

    public function show($id)
    {
        echo $this->session->flashdata('success_edit');
        $project = $this->Projects_model->getByID($id);
        if($project){
            echo "<pre>";
            print_r($project);
            echo "</pre>";
        }

    }

    public function create_view()
    {
        $data['categories'] = $this->Category_model->getAllCategory();
        if (!isset($_SESSION['user_id'])) { redirect("home"); }

        $this->load->view('header');
        $this->load->view('projects/create_project_view', $data);
        
    }

    public function create()
    {
        $this->form_validation->set_rules('project_name', 'Името на проекта', 'required');
        $this->form_validation->set_rules('project_description', 'Описанието на проекта', 'required');
        $this->form_validation->set_rules('categories[]', 'Категории', 'required');

        if ($this->form_validation->run() == FALSE)
        {
           $this->create_view();
        }
        else
        {

            $return = $this->Projects_model->insert();
            
            if($return){
                $this->session->set_flashdata('success_project', 'Успешно създаде проект');
                $this->session->set_flashdata('project_id', $return['id']);

                foreach ($this->input->post('categories') as $item) {
                    $this->Projects_model->insert_project_cat($item, $return['id']);
                }
                
                redirect('projects/upload');
            }else{
                $this->session->set_flashdata('fail_project', 'Провал');
                redirect('projects/create');
            }

        }
    }

    public function upload_view()
    {

        if (!isset($_SESSION['user_id'])) { redirect("home"); }

        echo $this->session->flashdata('success_project');
        $this->session->set_flashdata('keep_project_id', $this->session->flashdata('project_id'));

        $data['error'] = '';
        $this->load->view('header');
        $this->load->view('projects/upload',  $data);
        
    }

    public function upload()
    {
        $project_id = $this->session->flashdata('keep_project_id');
        $config['upload_path']          = 'assets/uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 6000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        /*  1st step. Chacking if is uploaded and also upload image  */
        if (!$this->upload->do_upload('file')) {
            
            $data['error'] = $this->upload->display_errors();
            
           $this->load->view('projects/upload', $data);
            
        } else {

            $data['error'] = '';
            $data_upload = $this->upload->data();



            $is_image = array('.jpg', '.png', '.JPG', '.JPEG', '.gif');

//            if(array_key_exists($data_upload['file_ext'], $is_image)){
                /*  2TH STEP. Storing uploaded image into variable. We will use it later in code  */
            $data['upload_data'] = $this->upload->data();


            /*  3TH STEP. resizing uploaded image  */
            $thumb = $this->resize($this->upload->data(), 500, 'crop-' . $_SESSION['user_id'], '-');
            /*  end resize  */


            /*  storing uploaded image into DB Attachments table  */
//                $this->Projects_model->insert_project_file($thumb['new_image'], $thumb['new_image'], pathinfo
//                ($thumb['new_image'])['extension'], $project_id, 2);
            $this->Projects_model->insert_project_file($data_upload['file_name'], $data_upload['orig_name'],
                $data_upload['file_ext'], $project_id, 1, $thumb['new_image']);
            /*  end crop  */


//            }else{
//                $this->Projects_model->insert_project_file($data_upload['file_name'], $data_upload['orig_name'],
//                    $data_upload['file_ext'], $project_id);
//            }


//            /*  8TH. STEP. Seting Flash data with seccess msg  */
//            if ($response) {
//                $this->session->set_flashdata('success_upload', 'Successfully uploaded image');
//                redirect('dashboard/upload/profile-image');
//            }


        }

    }

    public function edit_view($id)
    {
        if (!isset($_SESSION['user_id'])) { redirect("home"); }

        $project = $this->Projects_model->project_edit($id);

        if($project['num'] == 1){
            $data['project'] = $project['result'][0];
            $this->load->view('header');
            $this->load->view('projects/edit', $data);
            $this->load->view('footer');
        }else{
            redirect('projects/' . $id);
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('project_name', 'Името на проекта', 'required');
        $this->form_validation->set_rules('project_description', 'Описанието на проекта', 'required');
echo 1;
        if ($this->form_validation->run() == FALSE)
        {
            $this->edit_view($id);

        }else{
            
            $response = $this->Projects_model->update_project($id);
            if($response){

            }
            $this->session->set_flashdata('success_edit', 'Успешно редактирахте проекта');

            redirect('projects/' . $id);

        }

    }

    public function delete_image()
    {

        $resp = $this->Projects_model->get_project_file_by_id($_POST['id']);
        header('Content-Type: application/json');
        $this->Projects_model->delete_project_image($resp['id']);

        unlink('assets/uploads/' . $resp['filename']);
        unlink('assets/uploads/' . $resp['crop_file']);

        echo json_encode($resp);
    }

    /*  cropping method  */
    public function crop($img_full_path, $img_file_name, $width, $height, $prefix, $delimiter)
    {
        list($lwidth, $lheight, $ltype, $lattr) = getimagesize($img_full_path);
        if ($width > $lwidth) { // проверяваме дали подадената ширина не надвишава реалната ширина на снимката
            $width = $lwidth;   // ако е така слагаме реалната ширина на снимката. Т.е няма кроп по ширина
        }
        if ($height > $lheight) { // проверяваме дали подадената височина не надвишава реалната височина на снимката
            $height = $lheight;   // ако е така слагаме реалната височина на снимката. Т.е няма кроп по височина
        }
        $x_axis = ($lwidth - $width) / 2; // определяме офсета на ширината за да се кропва винаги от центъра
        $y_axis = ($lheight - $height) / 2; // определяме офсета на височината за да се кропва винаги от центъра
        $img_thumb = $img_full_path;
        $img_thumb_name = $img_file_name;
        $path_count = strlen($img_thumb) - strlen($img_thumb_name);
        $imgg = substr($img_thumb, $path_count);
        $thumb['image_library'] = 'gd2';
        $thumb['source_image'] = $img_thumb;
        //$thumb['create_thumb'] = TRUE;
        $thumb['x_axis'] = $x_axis;
        $thumb['y_axis'] = $y_axis;
        $thumb['maintain_ratio'] = FALSE;
        $thumb['width'] = $width;
        $thumb['height'] = $height;
        $thumb['new_image'] = $prefix . $delimiter . $imgg;
        $thumb['img_src'] = base_url() . $thumb['new_image'];
        $this->image_lib->initialize($thumb);
        if (!$this->image_lib->crop()) {
            $this->image_lib->clear();
            return False;
        }
        $this->image_lib->clear();
        return $thumb;
    }
    /*  resizing method  */
    public function resize($img, $height, $prefix, $delimiter)
    {
        $img_thumb = $img['full_path'];
        $img_thumb_name = $img['file_name'];
        $path_count = strlen($img_thumb) - strlen($img_thumb_name);
        $imgg = substr($img_thumb, $path_count);
        $thumb['image_library'] = 'gd2';
        $thumb['source_image'] = $img_thumb;
        //$thumb['create_thumb'] = TRUE;
        //$thumb['width'] = 250;
        $thumb['height'] = $height;
        $thumb['new_image'] = $prefix . $delimiter . $imgg;
        $thumb['img_src'] = base_url() . $thumb['new_image'];
        $this->image_lib->initialize($thumb);
        if (!$this->image_lib->resize()) {
            $this->image_lib->clear();
            return False;
        }
        $this->image_lib->clear();
        return $thumb;
    }
}