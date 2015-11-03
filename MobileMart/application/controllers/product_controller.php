<?php


class product_controller extends CI_Controller
{
	public function index(){
		$this->view_product_all();
	}
	public function view_brands(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['brand'] = $this->details_view_model->BrandDetails();
		$data['main_content']= 'view_brand_details';
		$this->load->view('include/template',$data);
		$data['product'] = $this->details_view_model->BrandProductDetails('nokia');
		$this->load->view('view_product_brand_details',$data);
		  }
	   public function view_product_all(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->allProductDisplay();
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	  public function view_product_nokia(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->BrandProductDetails('nokia');
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	   public function view_product_apple(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->BrandProductDetails('apple');
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	   public function view_product_samsung(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->BrandProductDetails('samsung');
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	   public function view_product_lg(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->BrandProductDetails('lg');
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	   public function view_product_lava(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->BrandProductDetails('lava');
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	   public function view_product_blackberry(){
		$this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->BrandProductDetails('blackberry');
		$data['main_content']= 'view_product_brand_details';
		$this->load->view('include/template',$data);
	  }
	  public function read_more_nokia(){
		  $this->load->database();   
		$this->load->model('details_view_model');  
		$data['product'] = $this->details_view_model->ReadMoreProductDetails('nokia');
		$data['main_content']= 'view_read_brand_details';
		$this->load->view('include/template',$data);		  
	  }
}
?>