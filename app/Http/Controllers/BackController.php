<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Laravel\QueryAgent;

class BackController extends Controller {




	public function getAll(QueryAgent $queryAgent){
		$all =  $queryAgent->getBlock('static_all_site',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_all_site',[
			'static_all_site' => $all,
			'dom_all_images'  => $images
		]);
	}
	public function getContacts(QueryAgent $queryAgent){
		$all =  $queryAgent->getBlock('contacts',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.contacts',[
			'contacts' => $all,
			'dom_all_images'  => $images
		]);
	}
	public function getRec(QueryAgent $queryAgent){
		$all =  $queryAgent->getBlock('reconstruction',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.reconstruction',[
			'reconstruction' => $all,
			'dom_all_images'  => $images
		]);
	}
	public function getAbout(QueryAgent $queryAgent){
		$all =  $queryAgent->getBlock('about_school',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.about_school',[
			'about_school' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getSlider(QueryAgent $queryAgent){
		$all =  $queryAgent->getBlock('static_slider',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.static_slider',[
			'static_slider' => $all,
			'dom_all_images'  => $images
		]);
	}

	public function getBlog(QueryAgent $queryAgent){
		$all = $queryAgent->getBlock('static_blog',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		$dom_photos = $queryAgent->getBlock('dom_blog',[],[]);
		return view('back.blocks.dom_blog',[
			'static_blog' => 		$all,
			'dom_all_images' 	 => $images,
			'dom_blog'	     => $dom_photos
		]);
	}
	public function editBlog(QueryAgent $queryAgent, $id){
		$item 	= $queryAgent->getGroupItem('dom_blog','blog_post',$id);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.groupitems.dom_blog.blog_post_edit',[
			'item_blog_post' => $item,
			'dom_all_images' 	 => $images
		]);
	}

	public function getPhoto(QueryAgent $queryAgent){
		$all = $queryAgent->getBlock('static_photo_block',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		$dom_photos = $queryAgent->getBlock('dom_photos',[],[]);
		return view('back.blocks.dom_photos',[
			'static_photo_block' => $all,
			'dom_all_images' 	 => $images,
			'dom_photos'	     => $dom_photos
		]);
	}
	public function editPhoto(QueryAgent $queryAgent, $id){
		$item 	= $queryAgent->getGroupItem('dom_photos','album',$id);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.groupitems.dom_photos.album_edit',[
			'item_album' => $item,
			'dom_all_images' 	 => $images
		]);
	}


	public function getProgram(QueryAgent $queryAgent){
		$all = $queryAgent->getBlock('dom_program',[],[]);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.dom_program',[
			'dom_program' => $all,
			'dom_all_images' 	 => $images,
		]);
	}
	public function editProgram(QueryAgent $queryAgent, $id){
		$item 	= $queryAgent->getGroupItem('dom_program','programs',$id);
		$images = $queryAgent->getBlock('dom_all_images',[],[]);
		return view('back.blocks.groupitems.dom_program.programs_edit',[
			'item_programs' => $item,
			'dom_all_images' 	 => $images
		]);
	}

}
