<html>
<head>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/clientCSS.css" type="text/css" media="screen"  charset="utf-8">
</head>


<body>
   <div style="width=100%;height:10%;border:1px solid black"> 
   <div class="optionBar"><?php echo anchor('product_controller/view_product_by_brands','Home');?></div>
   <div class="optionBar"><?php echo anchor('product_controller/view_product_by_brands','About Us');?></div>
   <div class="optionBar"><?php echo anchor('product_controller/view_product_by_brands','Contact Us');?></div>
   <div class="optionBar"><?php echo anchor('product_controller/view_product_by_brands','Register');?></div>
   <div class="optionBar"><?php echo anchor('product_controller/view_product_by_brands','Feedback');?></div>
   </div> 
              
   <div style="float:left;width:15%;height:90%;border:1px solid black;">
                <ul class="nav" id="main-menu">
                     <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i> Brands <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">               
                 <li ><?php echo anchor('product_controller/view_product_nokia','Nokia');?></li>
                 <li ><?php echo anchor('product_controller/view_product_samsung','Samsung');?></li>
                 <li ><?php echo anchor('product_controller/view_product_lava','Lava');?></li>  
                  <li ><?php echo anchor('product_controller/view_product_blackberry','BlackBerry');?></li>
                 <li ><?php echo anchor('product_controller/view_product_spice','Spice');?></li>
                 <li ><?php echo anchor('product_controller/view_product_lg','Lg');?></li>
                  <li ><?php echo anchor('product_controller/view_product_apple','Apple');?></li>
                         </ul>   
                      </li>  	
                </ul>
      </div>
      <!--
      <div style="float:left;width:15%;height:90%;border:1px solid black;">
     <div> <?php echo anchor('product_controller/view_brands','Brands');?></div>
      
      </div>-->