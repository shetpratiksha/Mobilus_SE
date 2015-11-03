 <?php  
       class details_view_model extends CI_Model  
       {  
          function __construct()  
          {  
             // Call the Model constructor  
             parent::__construct();
			   
          }  
          //we will use the select function 
		  public function BrandDetails()  
          {  
			$this->db->select('*');
			$query = $this->db->get('brand');
			return $query->result();
          } 
		   public function allProductDisplay()  
          {  
			$this->db->select('*');
			$query = $this->db->get('product');
			return $query->result();
          } 
		  
		  public function BrandProductDetails($brand){
			$this->db->where(array('brand'=>$brand));
			$this->db->select('*');
			$query = $this->db->get('product');
			return $query->result();
		  }
	   }
	   ?>