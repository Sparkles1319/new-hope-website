<?php
/**
 * Created by PhpStorm.
 * User: ijeoma
 * Date: 9/3/16
 * Time: 9:10 PM
 * GNU means general medical unit
 * This file holds the various variables that will be referenced in any page. To be included in the header page
 */
//echo dirname($_SERVER['SCRIPT_NAME']);
$directory = realpath(dirname(__FILE__));
$document_root = realpath($_SERVER['DOCUMENT_ROOT']);
$base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .
    $_SERVER['HTTP_HOST'];
if(strpos($directory, $document_root)===0) {
    $base_url .= str_replace(DIRECTORY_SEPARATOR, '/', substr($directory, strlen($document_root)));
}

defined("APP_URL") ? null : define("APP_URL", str_replace("/lib", "", $base_url));
//Assets URL, location of your css, img, js, etc. files
defined("ASSETS_URL") ? null : define("ASSETS_URL", APP_URL);



$path_to_service_page="services/";
$path_to_blogs=$base_url."/blogs/";
//$maternity_include=$path_to_service_page."maternity.php";
$maternity_url=$path_to_service_page."maternity.php";
$icu_url=$path_to_service_page."icu.php";
$ctscan_url=$path_to_service_page."ctscan.php";
$xrayscan_url=$path_to_service_page."xray_scan.php";
$dialysis_url=$path_to_service_page."dialysis.php";
$gnu_url=$path_to_service_page."general_medical.php";
$theatre_url=$path_to_service_page."theatre.php";
$lab_url=$path_to_service_page."laboratory.php";
$home_url=$base_url."/index.php";
$about_url=$base_url."/about_us.php";
$services_url=$base_url."/services.php";
$contact_url=$base_url."/contact.php";
$staff_url=$base_url."/staff.php";
$blog_url=$base_url."/blog.php";
$image_url = $base_url."/images";
$image_home_slider = $image_url."/home_page_slider";
$image_blog=$image_url."/blog_images";
$image_staff = $image_url."/staff_pictures";
$gallery_url=$base_url."/gallery.php";
$faq_url=$base_url."/faq.php";
$endoscopy_url=$path_to_service_page."endoscopy.php";
$pharmacy_url=$path_to_service_page."pharmacy.php";
$antenatal_url=$path_to_service_page."antenatal.php";
$main_service_page=$path_to_service_page."main_service.php";
$inpatient_services_url=$path_to_service_page."inpatient.php";
$echocard_url=$path_to_service_page."echocard.php";
$family_planning_url=$path_to_service_page."family_planning.php";
$service_image =$image_url."/services_page/";

// asscoiative array containing values to be used in services pages
$maternity_dict=array("name"=>"Maternity and Child Care Services","url"=>$maternity_url,"breadcrumb"=>"maternity","image_path"=>$service_image.'maternity');
$pharmacy_dict=array("name"=>"Pharmacy and Drug Services","url"=>$pharmacy_url,"breadcrumb"=>"pharmacy","image_path"=>$service_image.'pharmacy');
$family_planning_dict=array("name"=>"Family Planning Services","url"=>$family_planning_url,"breadcrumb"=>"family planning","image_path"=>$service_image.'family planning');
$dialysis_dict=array("name"=>"Dialysis","url"=>$dialysis_url,"breadcrumb"=>"dialysis","image_path"=>$service_image.'dialysis');
$ctscan_dict=array("name"=>"CT Scan and MRI Services","url"=>$ctscan_url,"breadcrumb"=>"CTScan and MRI","image_path"=>$service_image.'ctscan');
$icu_dict=array("name"=>"Intensive Care Unit - ICU","url"=>$icu_url,"breadcrumb"=>"ICU","image_path"=>$service_image.'icu');
$theatre_dict=array("name"=>"Surgery and Theatre","url"=>$theatre_url,"breadcrumb"=>"surgery","image_path"=>$service_image.'surgery');
$inpatient_dict=array("name"=>"Inpatient and Ward Services","url"=>$inpatient_services_url,"breadcrumb"=>"In-Patient","image_path"=>$service_image.'inpatient');
$endoscopy_dict=array("name"=>"Endoscopy Services","url"=>$endoscopy_url,"breadcrumb"=>"Endoscopy","image_path"=>$service_image.'endoscopy');
$lab_dict=array("name"=>"Laboratory and Comprehensive Testing","url"=>$lab_url,"breadcrumb"=>"Lab","image_path"=>$service_image.'lab');
$gnu_dict=array("name"=>"General Medical and Health Care Services","url"=>$gnu_url,"breadcrumb"=>"General Medical","image_path"=>$service_image.'generalMedical');
$echocard_dict=array("name"=>"Echo-Cardiography Services","url"=>$echocard_url,"breadcrumb"=>"Echo-Cardiography","image_path"=>$service_image.'EchoCard');
$antenatal_dict=array("name"=>"Antenatal and Immunization Services","url"=>$antenatal_url,"breadcrumb"=>"Antenatal","image_path"=>$service_image.'antenatal');
$xrayscan_dict=array("name"=>"X-Ray and Scan Services","url"=>$xrayscan_url,"breadcrumb"=>"X-Ray and Scan","image_path"=>$service_image.'xray_scan');
$allservices_dict=array("name"=>"All Services","url"=>$main_service_page,"breadcrumb"=>"All Services","image_path"=>$service_image);

// full dictionary holding all the services pages
$services_dict=array("maternity"=>$maternity_dict,"icu"=>$icu_dict,"xrayscan"=>$xrayscan_dict,"general_medical"=>$gnu_dict,"theatre"=>$theatre_dict,"lab"=>$lab_dict,"endoscopy"=>$endoscopy_dict,"pharmacy"=>$pharmacy_dict,"ctscan"=>$ctscan_dict,"dialysis"=>$dialysis_dict,"antenatal"=>$antenatal_dict,"inpatient"=>$inpatient_dict,"echocard"=>$echocard_dict,"family_planning"=>$family_planning_dict,"all_services"=>$allservices_dict);
//echo MY_SERVER_PATH;
function file_exist_service($file_to_check, $default_file=""){
//    echo APP_URL.$file_to_check;
    $file_headers = @get_headers(htmlspecialchars(APP_URL.$file_to_check));


    if(!file_exists($file_to_check."")) {
        if ($default_file!=""){
            return $default_file;
        }
        else{
            return "/index.php";
        }
    }
    else{
        return $file_to_check;
    }

}