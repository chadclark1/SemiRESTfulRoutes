<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function construct__(){
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{

		$this->load->model('Product');
		$show_products = $this->Product->get_all_products();

		$this->load->view('index', array('products' => $show_products));
	}

	public function add(){

		// You are duplicating entries to your database here.

		$this->load->model('Product');
		$product_info = $this->input->post();
		$this->Product->add_product($product_info);
		$product = $this->Product->add_product($product_info);

		// var_dump($product_info); die();

		redirect('/');
	}

	public function new_product()
	{
		$this->load->view('addproduct');
	}

	public function delete($id){

		$this->load->model('Product');
		$this->Product->delete_product($id);



		redirect('/');
	}



	public function show($id)
	{
		$this->load->model('Product');
		$product = $this->Product->get_product_by_id($id);

		$this->load->view('productinfo', array('product' => $product));
	}

	public function edit($id)
	{

		// var_dump($id);
		// die();
		$this->load->model('Product');
		$product = $this->Product->get_product_by_id($id);
		// var_dump($product);
		// die();

		$this->load->view('editproduct', array('product' => $product));
		// redirect("/editproduct/".$id);
	}


	public function edit_product($id)
	{

		// var_dump($id); die();

		$this->load->model('Product');
		$product_info = $this->input->post();

		// Why are you referencing your model twice here, once with 2 parameters and then again with just one?

		// $this->Product->edit_product($product_info, $id);

		// Is this call to your model correct?
		$product = $this->Product->edit_product($product_info);

		redirect('/');
	}
}
