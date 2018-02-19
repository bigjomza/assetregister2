<?php
function connect_db(){
	$con = mysqli_connect("nopadol.net:3306","root","[ibdkifu88","assets"); 
	mysqli_set_charset($con,"utf8"); 
	return $con;

}
function select_menu($level){
	switch($level){
		//case "Admin" : admin_menu();break;
		case "Admin" : admin_menu();break;
		case "1" : admin_menu();break;
		case "0" : test_menu();break;
		case "Teacher" : teacher_menu();break;
	}
}
function admin_menu(){
	echo "<nav class=\"navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">";
	echo "<div class=\"bg-white text-center navbar-brand-wrapper\">";
	echo "<a class=\"navbar-brand brand-logo\" href=\"index.html\"><img src=\"images/logo_star_black.png\" /></a>";
	echo "<a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"images/logo_star_mini.jpg\" alt=''></a></div>";
	echo "<div class=\"navbar-menu-wrapper d-flex align-items-center\">";
	echo "<button class=\"navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3\" type=\"button\" data-toggle=\"minimize\">";
	echo "<span class=\"navbar-toggler-icon\"></span></button>";
	echo "<form class=\"form-inline mt-2 mt-md-0 d-none d-lg-block\">";
		echo "<input class=\"form-control mr-sm-2 search\" type=\"text\" placeholder=\"Search\">";
	echo "</form>";
		echo "<ul class=\"navbar-nav ml-lg-auto d-flex align-items-center flex-row\">";
			echo "<li class=\"nav-item\">";
            echo "<a class=\"nav-link profile-pic\" href=\"#\"><img class=\"rounded-circle\" src=\"images/face.jpg\" alt=\"\"></a>";
		echo "</li>";
		echo "<li class=\"nav-item\">";
            echo "<a class=\"nav-link\" href='#'><i class=\"fa fa-th\"></i></a>";
		echo "</li>";
		echo "</ul>";
        echo "<button class=\"navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">";
		echo "<span class=\"navbar-toggler-icon\"></span>";
        echo "</button>";
      echo "</div>";
    echo "</nav>";
    /*<!-- partial -->*/
    echo "<div class=\"container-fluid\">";
      echo "<div class=\"row row-offcanvas row-offcanvas-right\">";
        /*<!-- partial:partials/_sidebar.html -->*/
        echo "<nav class=\"bg-white sidebar sidebar-offcanvas\" id=\"sidebar\">";
          echo "<div class=\"user-info\">";
            echo "<img src=\"images/face.jpg\" alt=''>";
            echo "<p class=\"name\">Richard V.Welsh</p>";
            echo "<p class=\"designation\">Manager</p>";
			echo " <span class=\"online\"></span>";
          echo "</div>";
          echo "<ul class=\"nav\">";
            echo "<li class=\"nav-item active\">";
              echo "<a class=\"nav-link\" href=\"index.html\">";
                echo "<img src=\"images/icons/1.png\" alt=''>";
                echo "<span class=\"menu-title\">Dashboard</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href='pages/Asset/List_Asset.php'>";
                echo "<img src=\"images/icons/2.png\" alt=''>";
                echo "<span class=\"menu-title\">Widgets</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"pages/forms/index.html\">";
                echo "<img src=\"images/icons/005-forms.png\" alt=''>";
                echo "<span class=\"menu-title\">Forms</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"pages/ui-elements/buttons.html\">";
                echo "<img src=\"images/icons/4.png\" alt=''>";
                echo "<span class=\"menu-title\">Buttons</span>";
              echo "</a>";
           echo " </li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"pages/tables/index.html\">";
                echo "<img src=\"images/icons/5.png\" alt=\"\">";
                echo "<span class=\"menu-title\">Tables</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"pages/charts/index.html\">";
                echo "<img src=\"images/icons/6.png\" alt=\"\">";
                echo "<span class=\"menu-title\">Charts</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"pages/icons/index.html\">";
                echo "<img src=\"images/icons/7.png\" alt=\"\">";
                echo "<span class=\"menu-title\">Icons</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"pages/ui-elements/typography.html\">";
                echo "<img src=\"images/icons/8.png\" alt=\"\">";
                echo "<span class=\"menu-title\">Typography</span>";
              echo "</a>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" data-toggle=\"collapse\" href=\"#sample-pages\" aria-expanded=\"false\" aria-controls=\"sample-pages\">";
                echo "<img src=\"images/icons/9.png\" alt=\"\">";
                echo "<span class=\"menu-title\">Sample Pages<i class=\"fa fa-sort-down\"></i></span>";
              echo "</a>";
              echo "<div class=\"collapse\" id=\"sample-pages\">";
                echo "<ul class=\"nav flex-column sub-menu\">";
                  echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"pages/samples/blank_page.html\">
                      Blank Page
                    </a>";
                 echo " </li>";
                 echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"pages/samples/login.html\">
                      Login
                    </a>";
                  echo "</li>";
                  echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"pages/samples/register.html\">
                      Register
                    </a>";
                  echo "</li>";
                  echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"pages/samples/404.html\">
                      404
                    </a>";
                  echo "</li>";
                  echo "<li class=\"nav-item\">";
                    echo "<a class=\"nav-link\" href=\"pages/samples/500.html\">
                      500
                    </a>";
                  echo "</li>";
                echo "</ul>";
              echo "</div>";
            echo "</li>";
            echo "<li class=\"nav-item\">";
              echo "<a class=\"nav-link\" href=\"#\">";
                echo "<img src=\"images/icons/10.png\" alt=\"\">";
                echo "<span class=\"menu-title\">Settings</span>
              </a>";
            echo "</li>";
          echo "</ul>";
        echo "</nav>";
	
	
}
function test_menu(){
	echo "ยังไม่มีจ้า";
				
}

function select_module($module,$action){
	$modules = array ("1" => "home"
							,"2" => "Asset"
							,"3" => "Category"
							,"4" => "Employee"
							,"5" => "Rent"
							,"6" => "Status"
							,"7" => "User"
							,"8" => "TestNew"
							,"9" => "Spare Part");
	$actions = array ("1" => "Home"
						,"2" => "Login" 
						,"3" => "Check_Login"
						,"96" => "Check_GLogin"
						,"4" => "Student_detile"
						,"5" => "Logout" 
						,"6" => "Form_Add"
						,"7" => "insert"
						,"8" => "form_adduser" 
						,"9" => "Form_edit[x]" 
						,"10" => "Delect_asset" 
						,"11" => "Edit_cat"
						,"12" => "EditForm_cat"
						,"13" => "Asset_update"
						,"14" => "categoty"
						,"15" => "Asset_detail"
						,"16" => "AddForm_cat"
						,"17" => "Admin_Login"
						,"18" => "Student_Login"
						,"19" => "User_Login"
						,"20" => "update_status"
						/*Status*/
						,"21" => "list_status"
						,"22" => "list_asset"
						,"23" => "form_receiveasset"
						,"24" => "assat_detail"
						,"25" => "assatt_detail"						
						,"26" => "Form_user"
						,"99" => "index_datatable"
						/*Rent*/
						,"27" => "add_acquire"
						,"28" => "add_rent"
						,"29" => "edit_rent"
						,"30" => "insert_rent"
						,"31" => "List_rent"
						,"32" => "Add_rent"
						,"33" => "update_rent"
						,"34" => "Delect_rent"
						,"88" => "Report"
						/*Spare Part*/
						,"35" => "menu_rent"
						,"36" => "list_spare"
						,"37" => "take"
						,"38" => "lend"
						,"39" => "list_category_spare"
						,"40" => "edit_spare"
						,"41" => "add_numspare"
						,"42" => "update_spare"
						,"43" => "add_spare"
						,"44" => "insert_spare"
						,"45" => "update_numspare"
						,"46" => "edit_category"
						,"47" => "update_category"
						,"48" => "add_category"
						,"49" => "add_category_spare"
						,"50" => "cart"
						,"51" => "Delect_rent"
						,"52" => "delete_spare"
						,"53" => "destroy"
						,"54" => "edit_category_spare"
						,"55" => "edit_form"
						,"56" => "edit_take"
						,"57" => "index_spUi"
						,"58" => "insert_numspare"
						,"59" => "layout"
						,"60" => "list_category"
						,"61" => "readData"
						,"62" => "removecart"
						,"63" => "render"
						,"64" => "render_list"
						,"65" => "Report"
						,"66" => "Sp_rent"
						,"67" => "update_category_spare"
						,"68" => "update_take"
						,"69" => "updatecart"
						,"70" => "updateSp_rent"	
						);	
	
	$module_name = $modules[$module]; //ชื่อโฟลเดอร์
	$action_name = $actions[$action].".php"; //ชื่อไฟล์
	include("	Module/$module_name/$action_name"); // module = ชื่อโฟลเดอร์ action = ชื่อไฟล์
}
?>