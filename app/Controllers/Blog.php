<?php namespace App\Controllers;
	use App\Models\BlogModel;
class Blog extends BaseController
{
	public function viewAll(){
		$blogModel = new BlogModel();
		$posts = $blogModel->findAll();
		
		print_r($posts);
	}
	public function view($postId){
		if(!is_numeric($postId)){
			throw \CodeIgniter\Exception\PageNotFoundException::forPageNotFound();
		}

		$blogModel = new BlogModel();
		$post = $blogModel->find($postId);
		
		if(empty($post)){
			throw \CodeIgniter\Exception\PageNotFoundException::forPageNotFound();
		}
		echo "One Post";
		print_r($post);

	}

	

	//--------------------------------------------------------------------

}
