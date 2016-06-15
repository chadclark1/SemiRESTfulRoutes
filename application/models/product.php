<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	function get_all_products(){
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	function add_product($product_info){
		$query = "INSERT INTO products (name, description, price, created_at) VALUES (?,?,?,?)";
		$values = array($product_info['name'], $product_info['description'], $product_info['price'], date("m/d/Y"));

		// var_dump($query); var_dump($values); die();

		return $this->db->query($query, $values);
	}

	function delete_product($id){
		$query = "DELETE FROM products WHERE id = $id";
		return $this->db->query($query);
	}

	function get_product_by_id($id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
	}

	function edit_product($product_info, $id){

		// var_dump($product_info, $id);
		// die();

		$query = "UPDATE products SET (name, description, price, updated_at) VALUES (?,?,?,?) WHERE id = $id";

		$values = array($product_info['name'], $product_info['description'], $product_info['price'], date("m/d/Y"));

		$query = "UPDATE products SET name = '$values[0]', description = '$values[1]', price = '$values[2]', updated_at = '$values[3]' WHERE id = $id";

		// var_dump($query); die();
		
		return $this->db->query($query, $values);
	}

}

?>
