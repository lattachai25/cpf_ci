<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('Grocery_CRUD');
		$this->load->library('Image_crud');
	}


	public function index()
	{
	echo $this->session->userdata('username');
		$data = array( 'title' => 'Administrator ::   ',
								   'description' => "",
								   'keyword' => '',
								   'head' =>   '',
								   'content' => 'home_admin_view',

								);

		$this->load->view('template_admin',$data);
		}

function statusDis($value)
{
	if($value === 'เปิด' || $value === ''){

		  return "<center><img src='".base_url()."assets/uploads/icon_status_green.png'></center>";
	}else{

		return "<center><img src='".base_url()."assets/uploads/icon_status_red.png'></center>";

	}
}


function User()
	{
			$crud = new Grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table('users')

			->order_by('id','desc')
			->set_subject('User')
			->columns('username','uassword', 'email')
			->display_as('username','Username')
			->display_as('password','Password')
			->display_as('email','E-mail');

				// $crud->unset_fields('status','modified','created');
				// $crud->set_field_upload('img_name','assets/uploads');
				$output = $crud->render();
				$this->_example_output($output);
		}



		function socal()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('socal')
	
				->order_by('id','desc')
				->set_subject('Socal Menu')
				->columns('facebook','instagram', 'youtube')
				->display_as('facebook','facebook')
				->display_as('instagram','Instagram')
				->display_as('youtube','Youtube');
	
					$output = $crud->render();
					$this->_example_output($output);
			}



			function footer()
			{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('footer')
		
					->order_by('id','desc')
					->set_subject('Footer Menu')
					->columns('name_brand_en','name_brand_th', 'address_en','address_th','link_map','tel')
					->display_as('name_brand_en','Name Website')
					->display_as('name_brand_th','ชื่อเว็บ')
					->display_as('address_en','Address')
					->display_as('address_th','ที่อยู่')
					->display_as('link_map','link  Map')
					->display_as('tel','Phone');
		
						$output = $crud->render();
						$this->_example_output($output);
				}
	







		function slidehomes()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('slidehomes')
		
				->order_by('id','desc')
				->set_subject('Slide Home')
				->columns('text_title_en','	text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}


		function the_best()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('the_best_we')
		
				->order_by('id','desc')
				->set_subject('Slide Home')
				->columns('text_title_en','	text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off');
		
				    $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}


		function enjoy_your()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('enjoy__your__homes')
		
				->order_by('id','desc')
				->set_subject('Enjoy Your')
				->columns('text_title_en','	text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status','day')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off')
				->display_as('day','DAY');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}


		function valuce_partners()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('valuce_partners')
		
				->order_by('id','desc')
				->set_subject('Valuce Partners')
				->columns('text_title_en','	text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));	
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}

		function other_products()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('our__other_products__homes')
		
				->order_by('id','desc')
				->set_subject('Slide Home')
				->columns('text_title_en','	text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}



		function show_now()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('show__now__homes')
		
				->order_by('id','desc')
				->set_subject('Show Now')
				->columns('text_title_en','	text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status','day')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off')
				->display_as('day','DAY');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}



		function best_sellers()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('best__sellers__homes')
		
				->order_by('id','desc')
				->set_subject('Slide Home')
				->columns('text_title_en','text_title_th','name_product_en','name_product_th','detel_product_en','detel_product_th','images_product1','status')
				->display_as('text_title_en','title en')
				->display_as('text_title_th','title th')
				->display_as('name_product_en','NameProduct en')
				->display_as('name_product_th','NameProduct th')
				->display_as('detel_product_en','detel_product_en')
				->display_as('detel_product_th','detel_product_th')
				->display_as('images_product1','images product')
				->display_as('status','Status On / Off');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('images_product1','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
		}


		function meat()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('meats');
				$crud->set_relation('id_brand','brands','name_brand_en')

				->order_by('id','desc')
				->set_subject('MEAT')
				->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
				->display_as('title','Title Bar')
				->display_as('keywords','Keywords')
				->display_as('description','Description')
				->display_as('google','Google Code')
				->display_as('facebook','Facebook code')
				->display_as('orteh_code','Orteh code')

				->display_as('brade','Bade')
				->display_as('name_categories','Category')
				->display_as('id_brand','Brand')

				->display_as('text_title_en','Title')
				->display_as('text_title_th','ข้อความ Title')
				->display_as('name_product_en','Name Product')
				->display_as('name_product_th','ชื่อสินค้า')
				->display_as('detel_product_en','Detel Product')
				->display_as('detel_product_th','รายละเอียดสินค้า')
				->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
				->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
				->display_as('status','Status Active / Inactive');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
				}


	function meat_images($id=null)
	{

			$crud = new Grocery_CRUD_Multiuploader();

			$crud->set_theme("bootstrap");
			$crud->set_table("meat_images")
			->where('id',$id)
			->ORDER_BY('id','ASC')
			->set_subject('News Images ALL')
			->columns('images_show')
			->display_as('images_show','Images ');

	         $config = array(
			    "path_to_directory" =>'assets/uploads/',
			    "allowed_types" =>'gif|jpeg|jpg|png',
			    "show_allowed_types" => true,
			    "no_file_text" =>'No Pictures',
			    "enable_full_path" => false,
			    "enable_download_button" => true,
			    "download_allowed" => 'jpg'
			  );

	        $crud->field_type('id', 'hidden' ,$id);
	        $crud->new_multi_upload('images_show',$config);

			$output = $crud->render();
			$this->_example_output($output);
		}















		function poultr()
		{
			$crud = new Grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table('poultr')
		
			->order_by('id','desc')
			->set_subject('PULTR')
			->columns('title','keywords','description','google','Facebook','','','','','','','','','','status')
			->display_as('title','Title Bar')
			->display_as('keywords','keywords')
			->display_as('description','description')
			->display_as('google','google Code')
			->display_as('facebook','Facebook code')

			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('','')
			->display_as('status','Status On / Off');
		
		
			// $crud->unset_fields('status','modified','created');
			// $crud->set_field_upload('img_name','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
				}


		function beef()
		{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('beefs');
						$crud->set_relation('id_brand','brands','name_brand_en')
		
						->order_by('id','desc')
						->set_subject('Beef')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
		
						->display_as('brade','Bade')
						->display_as('name_categories','Category')
						->display_as('id_brand','Brand')
		
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
				
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
							$crud->set_field_upload('images_show2','assets/uploads');
							$crud->set_field_upload('images_show3','assets/uploads');
							$crud->set_field_upload('images_show4','assets/uploads');
							$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}

		function lamb()
		{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('lambs');
		$crud->set_relation('id_brand','brands','name_brand_en')
						
		->order_by('id','desc')
		->set_subject('Lambs')
		->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
		->display_as('title','Title Bar')
		->display_as('keywords','Keywords')
		->display_as('description','Description')
		->display_as('google','Google Code')
		->display_as('facebook','Facebook code')
		->display_as('orteh_code','Orteh code')
						
		->display_as('brade','Bade')
		->display_as('name_categories','Category')
		->display_as('id_brand','Brand')
						
		->display_as('text_title_en','Title')
		->display_as('text_title_th','ข้อความ Title')
		->display_as('name_product_en','Name Product')
		->display_as('name_product_th','ชื่อสินค้า')
		->display_as('detel_product_en','Detel Product')
		->display_as('detel_product_th','รายละเอียดสินค้า')
		->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
		->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
		->display_as('status','Status Active / Inactive');
								
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->unset_fields('id','id_cat','id_subcat');
			$crud->set_field_upload('images_show','assets/uploads');
			$crud->set_field_upload('images_show1','assets/uploads');
			$crud->set_field_upload('images_show2','assets/uploads');
			$crud->set_field_upload('images_show3','assets/uploads');
			$crud->set_field_upload('images_show4','assets/uploads');
			$crud->set_field_upload('images_show5','assets/uploads');
			$crud->set_field_upload('attachment','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
		}

		function venison()
		{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('venison');
		$crud->set_relation('id_brand','brands','name_brand_en')
						
		->order_by('id','desc')
		->set_subject('Venison')
		->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
		->display_as('title','Title Bar')
		->display_as('keywords','Keywords')
		->display_as('description','Description')
		->display_as('google','Google Code')
		->display_as('facebook','Facebook code')
		->display_as('orteh_code','Orteh code')
						
		->display_as('brade','Bade')
		->display_as('name_categories','Category')
		->display_as('id_brand','Brand')
						
		->display_as('text_title_en','Title')
		->display_as('text_title_th','ข้อความ Title')
		->display_as('name_product_en','Name Product')
		->display_as('name_product_th','ชื่อสินค้า')
		->display_as('detel_product_en','Detel Product')
		->display_as('detel_product_th','รายละเอียดสินค้า')
		->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
		->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
		->display_as('status','Status Active / Inactive');
								
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->unset_fields('id','id_cat','id_subcat');
			$crud->set_field_upload('images_show','assets/uploads');
			$crud->set_field_upload('images_show1','assets/uploads');
			$crud->set_field_upload('images_show2','assets/uploads');
			$crud->set_field_upload('images_show3','assets/uploads');
			$crud->set_field_upload('images_show4','assets/uploads');
			$crud->set_field_upload('images_show5','assets/uploads');
			$crud->set_field_upload('attachment','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
		}




		function turkey()
		{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('turkeys');
		$crud->set_relation('id_brand','brands','name_brand_en')
						
		->order_by('id','desc')
		->set_subject('Turkey')
		->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
		->display_as('title','Title Bar')
		->display_as('keywords','Keywords')
		->display_as('description','Description')
		->display_as('google','Google Code')
		->display_as('facebook','Facebook code')
		->display_as('orteh_code','Orteh code')
						
		->display_as('brade','Bade')
		->display_as('name_categories','Category')
		->display_as('id_brand','Brand')
						
		->display_as('text_title_en','Title')
		->display_as('text_title_th','ข้อความ Title')
		->display_as('name_product_en','Name Product')
		->display_as('name_product_th','ชื่อสินค้า')
		->display_as('detel_product_en','Detel Product')
		->display_as('detel_product_th','รายละเอียดสินค้า')
		->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
		->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
		->display_as('status','Status Active / Inactive');
								
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->unset_fields('id','id_cat','id_subcat');
			$crud->set_field_upload('images_show','assets/uploads');
			$crud->set_field_upload('images_show1','assets/uploads');
			$crud->set_field_upload('images_show2','assets/uploads');
			$crud->set_field_upload('images_show3','assets/uploads');
			$crud->set_field_upload('images_show4','assets/uploads');
			$crud->set_field_upload('images_show5','assets/uploads');
			$crud->set_field_upload('attachment','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
		}
	

		function seafood()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('seafoods');
				$crud->set_relation('id_brand','brands','name_brand_en')

				->order_by('id','desc')
				->set_subject('seafood')
				->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
				->display_as('title','Title Bar')
				->display_as('keywords','Keywords')
				->display_as('description','Description')
				->display_as('google','Google Code')
				->display_as('facebook','Facebook code')
				->display_as('orteh_code','Orteh code')

				->display_as('id_brand','Brand')
				->display_as('id_cat','Category')
				->display_as('id_subcat','Brand')

				->display_as('text_title_en','Title')
				->display_as('text_title_th','ข้อความ Title')
				->display_as('name_product_en','Name Product')
				->display_as('name_product_th','ชื่อสินค้า')
				->display_as('detel_product_en','Detel Product')
				->display_as('detel_product_th','รายละเอียดสินค้า')
				->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
				->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
				->display_as('status','Status Active / Inactive');
		
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
				}

		function fish()
		{
			$crud = new Grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table('fish');
			$crud->set_relation('id_brand','brands','name_brand_en')
							
			->order_by('id','desc')
			->set_subject('Fish')
			->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
			->display_as('title','Title Bar')
			->display_as('keywords','Keywords')
			->display_as('description','Description')
			->display_as('google','Google Code')
			->display_as('facebook','Facebook code')
			->display_as('orteh_code','Orteh code')
							
			->display_as('id_brand','Brand')
			->display_as('id_cat','Category')
			->display_as('id_subcat','SubCat')
							
			->display_as('text_title_en','Title')
			->display_as('text_title_th','ข้อความ Title')
			->display_as('name_product_en','Name Product')
			->display_as('name_product_th','ชื่อสินค้า')
			->display_as('detel_product_en','Detel Product')
			->display_as('detel_product_th','รายละเอียดสินค้า')
			->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
			->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
			->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
			->display_as('status','Status Active / Inactive');
									
				$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
				$crud->unset_fields('id','id_cat','id_subcat');
				$crud->set_field_upload('images_show','assets/uploads');
				$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
				$crud->set_field_upload('attachment','assets/uploads');
				$output = $crud->render();
				$this->_example_output($output);
			}

			function shells()
			{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('shells');
				$crud->set_relation('id_brand','brands','name_brand_en')
								
				->order_by('id','desc')
				->set_subject('shells')
				->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
				->display_as('title','Title Bar')
				->display_as('keywords','Keywords')
				->display_as('description','Description')
				->display_as('google','Google Code')
				->display_as('facebook','Facebook code')
				->display_as('orteh_code','Orteh code')
								
				->display_as('id_brand','Brand')
				->display_as('id_cat','Category')
				->display_as('id_subcat','SubCat')
								
				->display_as('text_title_en','Title')
				->display_as('text_title_th','ข้อความ Title')
				->display_as('name_product_en','Name Product')
				->display_as('name_product_th','ชื่อสินค้า')
				->display_as('detel_product_en','Detel Product')
				->display_as('detel_product_th','รายละเอียดสินค้า')
				->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
				->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
				->display_as('status','Status Active / Inactive');
										
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
				}


			function cephalopod()
			{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('cephalopods');
				$crud->set_relation('id_brand','brands','name_brand_en')
								
				->order_by('id','desc')
				->set_subject('cephalopod')
				->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
				->display_as('title','Title Bar')
				->display_as('keywords','Keywords')
				->display_as('description','Description')
				->display_as('google','Google Code')
				->display_as('facebook','Facebook code')
				->display_as('orteh_code','Orteh code')
								
				->display_as('id_brand','Brand')
				->display_as('id_cat','Category')
				->display_as('id_subcat','SubCat')
								
				->display_as('text_title_en','Title')
				->display_as('text_title_th','ข้อความ Title')
				->display_as('name_product_en','Name Product')
				->display_as('name_product_th','ชื่อสินค้า')
				->display_as('detel_product_en','Detel Product')
				->display_as('detel_product_th','รายละเอียดสินค้า')
				->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
				->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
				->display_as('status','Status Active / Inactive');
										
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
				}
			function shrimp()
			{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('shrimps');
				$crud->set_relation('id_brand','brands','name_brand_en')
								
				->order_by('id','desc')
				->set_subject('shrimp')
				->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
				->display_as('title','Title Bar')
				->display_as('keywords','Keywords')
				->display_as('description','Description')
				->display_as('google','Google Code')
				->display_as('facebook','Facebook code')
				->display_as('orteh_code','Orteh code')
								
				->display_as('id_brand','Brand')
				->display_as('id_cat','Category')
				->display_as('id_subcat','SubCat')
								
				->display_as('text_title_en','Title')
				->display_as('text_title_th','ข้อความ Title')
				->display_as('name_product_en','Name Product')
				->display_as('name_product_th','ชื่อสินค้า')
				->display_as('detel_product_en','Detel Product')
				->display_as('detel_product_th','รายละเอียดสินค้า')
				->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
				->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
				->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
				->display_as('status','Status Active / Inactive');
										
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
				}


				function apples()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('apples');
					$crud->set_relation('id_brand','brands','name_brand_en')
									
					->order_by('id','desc')
					->set_subject('Apples')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
									
					->display_as('id_brand','Brand')
					->display_as('id_cat','Category')
					->display_as('id_subcat','SubCat')
									
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
											
						$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
						$crud->unset_fields('id','id_cat','id_subcat');
						$crud->set_field_upload('images_show','assets/uploads');
						$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
						$crud->set_field_upload('attachment','assets/uploads');
						$output = $crud->render();
						$this->_example_output($output);
					}



				function fruit()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('fruits');
					$crud->set_relation('id_brand','brands','name_brand_en')
									
					->order_by('id','desc')
					->set_subject('Fruits')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
									
					->display_as('id_brand','Brand')
					->display_as('id_cat','Category')
					->display_as('id_subcat','SubCat')
									
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
											
						$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
						$crud->unset_fields('id','id_cat','id_subcat');
						$crud->set_field_upload('images_show','assets/uploads');
						$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
						$crud->set_field_upload('attachment','assets/uploads');
						$output = $crud->render();
						$this->_example_output($output);
					}


				function cherries()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('cherries');
					$crud->set_relation('id_brand','brands','name_brand_en')
									
					->order_by('id','desc')
					->set_subject('Cherries')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
									
					->display_as('id_brand','Brand')
					->display_as('id_cat','Category')
					->display_as('id_subcat','SubCat')
									
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
											
						$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
						$crud->unset_fields('id','id_cat','id_subcat');
						$crud->set_field_upload('images_show','assets/uploads');
						$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
						$crud->set_field_upload('attachment','assets/uploads');
						$output = $crud->render();
						$this->_example_output($output);
					}


				function stone_fruit()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('stonefruits');
					$crud->set_relation('id_brand','brands','name_brand_en')
									
					->order_by('id','desc')
					->set_subject('Stone Fruits')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
									
					->display_as('id_brand','Brand')
					->display_as('id_cat','Category')
					->display_as('id_subcat','SubCat')
									
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
											
						$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
						$crud->unset_fields('id','id_cat','id_subcat');
						$crud->set_field_upload('images_show','assets/uploads');
						$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
						$crud->set_field_upload('attachment','assets/uploads');
						$output = $crud->render();
						$this->_example_output($output);
					}
	
					function navel_citrus()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('navelcitruses');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('Navel Citruses')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}


					function strawberry()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('strawberry');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('Strawberry')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}


					function vegetable()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('vegetable');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('vegetable')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}



					function carrot()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('carrots');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('carrot')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}


					function beet_root()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('beetroots');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('beet_root')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}


					function sweet_potatoes()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('sweetpotatoes');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('Sweet Potatoes')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}


					function whit_onion()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('whitonion');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('WHITE ONION')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}


						
					function dairy()
					{
						$crud = new Grocery_CRUD();
						$crud->set_theme("bootstrap");
						$crud->set_table('dairy');
						$crud->set_relation('id_brand','brands','name_brand_en')
										
						->order_by('id','desc')
						->set_subject('Dairy')
						->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
						->display_as('title','Title Bar')
						->display_as('keywords','Keywords')
						->display_as('description','Description')
						->display_as('google','Google Code')
						->display_as('facebook','Facebook code')
						->display_as('orteh_code','Orteh code')
										
						->display_as('id_brand','Brand')
						->display_as('id_cat','Category')
						->display_as('id_subcat','SubCat')
										
						->display_as('text_title_en','Title')
						->display_as('text_title_th','ข้อความ Title')
						->display_as('name_product_en','Name Product')
						->display_as('name_product_th','ชื่อสินค้า')
						->display_as('detel_product_en','Detel Product')
						->display_as('detel_product_th','รายละเอียดสินค้า')
						->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
						->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
						->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
						->display_as('status','Status Active / Inactive');
												
							$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
							$crud->unset_fields('id','id_cat','id_subcat');
							$crud->set_field_upload('images_show','assets/uploads');
							$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
							$crud->set_field_upload('attachment','assets/uploads');
							$output = $crud->render();
							$this->_example_output($output);
						}



						function yogurt()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('yogurt');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('yogurt')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}



						function cheese()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('cheese');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('cheese')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}


						function butter()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('butter');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('Butter')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}


						function other()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('others');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('Others')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}


						function processed_foods()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('processedfoods');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('Processed Foods')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}


						function beveage()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('beverages');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('Beveage')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}




						function confetionary()
						{
							$crud = new Grocery_CRUD();
							$crud->set_theme("bootstrap");
							$crud->set_table('confectionaries');
							$crud->set_relation('id_brand','brands','name_brand_en')
											
							->order_by('id','desc')
							->set_subject('confetionary')
							->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
							->display_as('title','Title Bar')
							->display_as('keywords','Keywords')
							->display_as('description','Description')
							->display_as('google','Google Code')
							->display_as('facebook','Facebook code')
							->display_as('orteh_code','Orteh code')
											
							->display_as('id_brand','Brand')
							->display_as('id_cat','Category')
							->display_as('id_subcat','SubCat')
											
							->display_as('text_title_en','Title')
							->display_as('text_title_th','ข้อความ Title')
							->display_as('name_product_en','Name Product')
							->display_as('name_product_th','ชื่อสินค้า')
							->display_as('detel_product_en','Detel Product')
							->display_as('detel_product_th','รายละเอียดสินค้า')
							->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
							->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
							->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
							->display_as('status','Status Active / Inactive');
													
								$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
								$crud->unset_fields('id','id_cat','id_subcat');
								$crud->set_field_upload('images_show','assets/uploads');
								$crud->set_field_upload('images_show1','assets/uploads');
								$crud->set_field_upload('images_show2','assets/uploads');
								$crud->set_field_upload('images_show3','assets/uploads');
								$crud->set_field_upload('images_show4','assets/uploads');
								$crud->set_field_upload('images_show5','assets/uploads');
								$crud->set_field_upload('attachment','assets/uploads');
								$output = $crud->render();
								$this->_example_output($output);
							}



// -------------------------------------------------------   MEAT   ----------------------------------------------------------------------------

function slide_meat()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('slide_meat')

		->order_by('id','desc')
		->set_subject('Slide Meat')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 1024px X 500px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function meat_passion()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('meat_passion')

		->order_by('id','desc')
		->set_subject('Meat Passion')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


			function beef_products()
			{
			$crud = new Grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table('beef_products');
			$crud->set_relation('id_brand','brands','name_brand_en')
					
			->order_by('id','desc')
			->set_subject('Beef Pproducts')
			->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
			->display_as('title','Title Bar')
			->display_as('keywords','Keywords')
			->display_as('description','Description')
			->display_as('google','Google Code')
			->display_as('facebook','Facebook code')
			->display_as('orteh_code','Orteh code')
					
			->display_as('brade','Bade')
			->display_as('name_categories','Category')
			->display_as('id_brand','Brand')
					
			->display_as('text_title_en','Title')
			->display_as('text_title_th','ข้อความ Title')
			->display_as('name_product_en','Name Product')
			->display_as('name_product_th','ชื่อสินค้า')
			->display_as('detel_product_en','Detel Product')
			->display_as('detel_product_th','รายละเอียดสินค้า')
			->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
			->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
			->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
			->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
			->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
			->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
			->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
			->display_as('status','Status Active / Inactive');
							
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->unset_fields('id','id_cat','id_subcat');
			$crud->set_field_upload('images_show','assets/uploads');
			$crud->set_field_upload('images_show1','assets/uploads');
			$crud->set_field_upload('images_show2','assets/uploads');
			$crud->set_field_upload('images_show3','assets/uploads');
			$crud->set_field_upload('images_show4','assets/uploads');
			$crud->set_field_upload('images_show5','assets/uploads');
			$crud->set_field_upload('images_show6','assets/uploads');
			$crud->set_field_upload('attachment','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
			}
					

			function lamb_products()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('lamb_products');
					$crud->set_relation('id_brand','brands','name_brand_en')
							
					->order_by('id','desc')
					->set_subject('Lamb Pproducts')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
							
					->display_as('brade','Bade')
					->display_as('name_categories','Category')
					->display_as('id_brand','Brand')
							
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
									
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
					$crud->set_field_upload('images_show2','assets/uploads');
					$crud->set_field_upload('images_show3','assets/uploads');
					$crud->set_field_upload('images_show4','assets/uploads');
					$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('images_show6','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
					}

			function venison_products()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('venison_products');
					$crud->set_relation('id_brand','brands','name_brand_en')
							
					->order_by('id','desc')
					->set_subject('Venison Pproducts')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
							
					->display_as('brade','Bade')
					->display_as('name_categories','Category')
					->display_as('id_brand','Brand')
							
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
									
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
					$crud->set_field_upload('images_show2','assets/uploads');
					$crud->set_field_upload('images_show3','assets/uploads');
					$crud->set_field_upload('images_show4','assets/uploads');
					$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('images_show6','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
					}

			function turkey_products()
				{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('turkey_products');
					$crud->set_relation('id_brand','brands','name_brand_en')
							
					->order_by('id','desc')
					->set_subject('Tuekey Pproducts')
					->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
					->display_as('title','Title Bar')
					->display_as('keywords','Keywords')
					->display_as('description','Description')
					->display_as('google','Google Code')
					->display_as('facebook','Facebook code')
					->display_as('orteh_code','Orteh code')
							
					->display_as('brade','Bade')
					->display_as('name_categories','Category')
					->display_as('id_brand','Brand')
							
					->display_as('text_title_en','Title')
					->display_as('text_title_th','ข้อความ Title')
					->display_as('name_product_en','Name Product')
					->display_as('name_product_th','ชื่อสินค้า')
					->display_as('detel_product_en','Detel Product')
					->display_as('detel_product_th','รายละเอียดสินค้า')
					->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
					->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
					->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
					->display_as('status','Status Active / Inactive');
									
					$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->unset_fields('id','id_cat','id_subcat');
					$crud->set_field_upload('images_show','assets/uploads');
					$crud->set_field_upload('images_show1','assets/uploads');
					$crud->set_field_upload('images_show2','assets/uploads');
					$crud->set_field_upload('images_show3','assets/uploads');
					$crud->set_field_upload('images_show4','assets/uploads');
					$crud->set_field_upload('images_show5','assets/uploads');
					$crud->set_field_upload('images_show6','assets/uploads');
					$crud->set_field_upload('attachment','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
					}
// -------------------------------------------------------   MEAT   ----------------------------------------------------------------------------
// -------------------------------------------------------   Sefood   ----------------------------------------------------------------------------

function slide_seafood()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('slide_seafood')

		->order_by('id','desc')
		->set_subject('Slide Seafood')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 1024px X 500px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function seafood_passion()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('seafood_passion')

		->order_by('id','desc')
		->set_subject('Seafood Passion')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','images product');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function fish_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('fish_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Fish Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function shells_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('shells_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Shells Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}



function cephalopod_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('cephalopod_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Cephalopod Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}



function shrimp_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('shrimp_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Shrimp Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}



// -------------------------------------------------------  Sefood   ----------------------------------------------------------------------------
// -------------------------------------------------------   Fruit   ----------------------------------------------------------------------------

function slide_fruit()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('slide_fruit')

		->order_by('id','desc')
		->set_subject('Slide Fruit')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 1024px X 500px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function fruit_passion()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('fruit_passion')

		->order_by('id','desc')
		->set_subject('Fruit Passion')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','images product');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}



function apple_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('apple_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Apple Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function cherries_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('cherries_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Cherries Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}
function stone_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('stone_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Stone Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function citrus_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('citrus_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Citrus Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


// -------------------------------------------------------   Fruit   ----------------------------------------------------------------------------
// -------------------------------------------------------   Vegetable   ----------------------------------------------------------------------------


function slide_vegetable()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('slide_vegetable')

		->order_by('id','desc')
		->set_subject('Slide Vegetable')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 1024px X 500px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function vegetable_passion()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('vegetable_passion')

		->order_by('id','desc')
		->set_subject('Vegetable Passion')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','images product');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}




function carrot_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('carrot_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Carrot Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}

function beetroot_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('beetroot_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Beetroot Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function onion_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('onion_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Onion Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function potatoes_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('potatoes_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Potatoes Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}

// -------------------------------------------------------   Vegetable   ----------------------------------------------------------------------------
// -------------------------------------------------------   Dairy   ----------------------------------------------------------------------------

function slide_dairy()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('slide_dairy')

		->order_by('id','desc')
		->set_subject('Dairy Slide')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 1024px X 500px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function dairy_passion()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('dairy_passion')

		->order_by('id','desc')
		->set_subject('Dairy Passion')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','images product');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}



function yogurt_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('yogurt_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Yogurt Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function cheese_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('cheese_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Cheese Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


function butter_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('butter_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Butter Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}


// -------------------------------------------------------   Dairy   ----------------------------------------------------------------------------
// -------------------------------------------------------   Others   ----------------------------------------------------------------------------

function slide_others()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('slide_others')

		->order_by('id','desc')
		->set_subject('Others Slide')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','รูปโชว์ 1024px X 500px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}

function others_passion()
{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('others_passion')

		->order_by('id','desc')
		->set_subject('Others Passion')
		->columns('content_en','content_th','images_show')
		->display_as('content_en','Content')
		->display_as('content_th','รายละเอียด')
		->display_as('images_show','images product');

			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('images_show','assets/uploads');
			$output = $crud->render();
			$this->_example_output($output);
}


function processed_products()
{
	$crud = new Grocery_CRUD();
	$crud->set_theme("bootstrap");
	$crud->set_table('processed_products');
	$crud->set_relation('id_brand','brands','name_brand_en')
			
	->order_by('id','desc')
	->set_subject('Processed Pproducts')
	->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
	->display_as('title','Title Bar')
	->display_as('keywords','Keywords')
	->display_as('description','Description')
	->display_as('google','Google Code')
	->display_as('facebook','Facebook code')
	->display_as('orteh_code','Orteh code')
			
	->display_as('brade','Bade')
	->display_as('name_categories','Category')
	->display_as('id_brand','Brand')
			
	->display_as('text_title_en','Title')
	->display_as('text_title_th','ข้อความ Title')
	->display_as('name_product_en','Name Product')
	->display_as('name_product_th','ชื่อสินค้า')
	->display_as('detel_product_en','Detel Product')
	->display_as('detel_product_th','รายละเอียดสินค้า')
	->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
	->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
	->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
	->display_as('status','Status Active / Inactive');
					
	$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
	$crud->unset_fields('id','id_cat','id_subcat');
	$crud->set_field_upload('images_show','assets/uploads');
	$crud->set_field_upload('images_show1','assets/uploads');
	$crud->set_field_upload('images_show2','assets/uploads');
	$crud->set_field_upload('images_show3','assets/uploads');
	$crud->set_field_upload('images_show4','assets/uploads');
	$crud->set_field_upload('images_show5','assets/uploads');
	$crud->set_field_upload('images_show6','assets/uploads');
	$crud->set_field_upload('attachment','assets/uploads');
	$output = $crud->render();
	$this->_example_output($output);
	}




	function beverage_products()
	{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('beverage_products');
		$crud->set_relation('id_brand','brands','name_brand_en')
				
		->order_by('id','desc')
		->set_subject('Beverage Pproducts')
		->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
		->display_as('title','Title Bar')
		->display_as('keywords','Keywords')
		->display_as('description','Description')
		->display_as('google','Google Code')
		->display_as('facebook','Facebook code')
		->display_as('orteh_code','Orteh code')
				
		->display_as('brade','Bade')
		->display_as('name_categories','Category')
		->display_as('id_brand','Brand')
				
		->display_as('text_title_en','Title')
		->display_as('text_title_th','ข้อความ Title')
		->display_as('name_product_en','Name Product')
		->display_as('name_product_th','ชื่อสินค้า')
		->display_as('detel_product_en','Detel Product')
		->display_as('detel_product_th','รายละเอียดสินค้า')
		->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
		->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
		->display_as('status','Status Active / Inactive');
						
		$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
		$crud->unset_fields('id','id_cat','id_subcat');
		$crud->set_field_upload('images_show','assets/uploads');
		$crud->set_field_upload('images_show1','assets/uploads');
		$crud->set_field_upload('images_show2','assets/uploads');
		$crud->set_field_upload('images_show3','assets/uploads');
		$crud->set_field_upload('images_show4','assets/uploads');
		$crud->set_field_upload('images_show5','assets/uploads');
		$crud->set_field_upload('images_show6','assets/uploads');
		$crud->set_field_upload('attachment','assets/uploads');
		$output = $crud->render();
		$this->_example_output($output);
		}



	function confectionary_products()
	{
		$crud = new Grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('confectionary_products');
		$crud->set_relation('id_brand','brands','name_brand_en')
				
		->order_by('id','desc')
		->set_subject('Confectionary Pproducts')
		->columns('title','brade','category','sub_category','text_title_en','text_title_th','images_show')
		->display_as('title','Title Bar')
		->display_as('keywords','Keywords')
		->display_as('description','Description')
		->display_as('google','Google Code')
		->display_as('facebook','Facebook code')
		->display_as('orteh_code','Orteh code')
				
		->display_as('brade','Bade')
		->display_as('name_categories','Category')
		->display_as('id_brand','Brand')
				
		->display_as('text_title_en','Title')
		->display_as('text_title_th','ข้อความ Title')
		->display_as('name_product_en','Name Product')
		->display_as('name_product_th','ชื่อสินค้า')
		->display_as('detel_product_en','Detel Product')
		->display_as('detel_product_th','รายละเอียดสินค้า')
		->display_as('images_show','รูปโชว์ 400px X 600px และขนาดน้อยกว่า 500k รองรับไฟล์ png , jpg , jpeg ')
		->display_as('images_show1','รูปโชว์ Slide No.1 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show2','รูปโชว์ Slide No.2 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show3','รูปโชว์ Slide No.3 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show4','รูปโชว์ Slide No.4 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('images_show5','รูปโชว์ Slide No.5 แสดงในหน้ารายละเอียด 400 X 600px (PNG, png, JPEG, jpg)')
		->display_as('attachment','เอกสารแนบ PDF MAX SIZE 1Mb ')
		->display_as('status','Status Active / Inactive');
						
		$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
		$crud->unset_fields('id','id_cat','id_subcat');
		$crud->set_field_upload('images_show','assets/uploads');
		$crud->set_field_upload('images_show1','assets/uploads');
		$crud->set_field_upload('images_show2','assets/uploads');
		$crud->set_field_upload('images_show3','assets/uploads');
		$crud->set_field_upload('images_show4','assets/uploads');
		$crud->set_field_upload('images_show5','assets/uploads');
		$crud->set_field_upload('images_show6','assets/uploads');
		$crud->set_field_upload('attachment','assets/uploads');
		$output = $crud->render();
		$this->_example_output($output);
		}

// -------------------------------------------------------   Others   ----------------------------------------------------------------------------





























		function about()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('abouts')
																								
				->order_by('id','desc')
				->set_subject('ABOUT US')
				->columns('title','keywords','description','google_code','facrbook_code','orteh_code','story_en','story_th','history_en','history_th','name_en','name_th','protion_en','protion_th','content_en','content_th','images','status')
				->display_as('title','Title Bar')
				->display_as('keywords','keywords')
				->display_as('description','description')
				->display_as('google_code','google Code')
				->display_as('facrbook_code','Facebook code')
																						
				->display_as('orteh_code','Orteh code')
				->display_as('story_en','story en')
				->display_as('story_th','story th')
				->display_as('history_en','history en')
				->display_as('history_th','history th')
				->display_as('name_en','name_en')
				->display_as('name_th','name_th')
				->display_as('protion_en','protion_en')
				->display_as('protion_th','protion_th')
				->display_as('content_en','content_en')
				->display_as('content_th','content_th')
				->display_as('status','Status On / Off');
																								
																								
					$crud->unset_fields('status','modified','created');
					$crud->set_field_upload('images','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
			}




			function contact()
			{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('contacts')

					->order_by('id','desc')
					->set_subject('CONTACT US')
					->columns('title','keywords','description','google_code','facrbook_code','orteh_code',
					'text_title_en','text_title_th','address_en','address_th','faceboot_link_en','faceboot_link_th','line_link_en',
					'line_link_th','tel_link_en','tel_link_th','mobile_link_en','mobile_link_th','Email_link1_en','Email_link1_th',
					'Email_link2_en','Email_link2_th','link_map')
					->display_as('title','Title Bar')
					->display_as('keywords','keywords')
					->display_as('description','description')
					->display_as('google_code','google Code')
					->display_as('facrbook_code','Facebook code')
					->display_as('orteh_code','Orteh code')
																						
					->display_as('text_title_en','text_title_en')
					->display_as('text_title_th','text_title_th')
					->display_as('address_en','address_en')
					->display_as('address_th','address_th')
					->display_as('faceboot_link_en','faceboot_link_en')
					->display_as('faceboot_link_th','faceboot_link_th')
					->display_as('line_link_en','line_link_en')
					->display_as('line_link_th','line_link_th')
					->display_as('tel_link_en','tel_link_en')
					->display_as('tel_link_th','tel_link_th')
					->display_as('mobile_link_en','mobile_link_en')
					->display_as('mobile_link_th','mobile_link_th')
					->display_as('Email_link1_en','Email_link1_en')
					->display_as('Email_link1_th','Email_link1_th')
					->display_as('Email_link2_en','Email_link2_en')
					->display_as('Email_link2_th','Email_link2_th')
					->display_as('link_map','link_map');

						$output = $crud->render();
						$this->_example_output($output);
				}




























	function brand()
	{
			$crud = new Grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table('brands')

			->order_by('id_brand ','desc')
			->set_subject('Brand')
			->columns('name_brand_en','name_brand_th','images')
			->display_as('name_brand_en','Name Brand EN')
			->display_as('name_brand_th','Name Brand TH')
			->display_as('images','Images')
			->display_as('status','Status');

				$crud->unset_fields('status');
				$crud->set_field_upload('images','assets/uploads');
				$output = $crud->render();
				$this->_example_output($output);
		}



		function category()
		{
				$crud = new Grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('categories')
	
				->order_by('id_cat','desc')
				->set_subject('Category')
				->columns('name_categories')
				->display_as('name_categories','Name Category');

					// $crud->unset_fields('status');
					// $crud->set_field_upload('images','assets/uploads');
					$output = $crud->render();
					$this->_example_output($output);
			}


			function sub_category()
			{
					$crud = new Grocery_CRUD();
					$crud->set_theme("bootstrap");
					$crud->set_table('sub_categories')
		
					->order_by('id_subcat','desc')
					->set_subject('Sub Category')
					->columns('name_sub_categories')
					->display_as('name_sub_categories','Name Sub Category');
		
						$output = $crud->render();
						$this->_example_output($output);
				}












		public function _example_output($output = null)
		{
			$this->load->view('example.php',$output);
		}


}




