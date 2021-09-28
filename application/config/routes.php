<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method

*/
//$route['default_controller'] = 'welcome';
$route['404_override'] = 'Page_any/er';
$route['translate_uri_dashes'] = FALSE;

$route['blank-page']='Product/blank';

$route['admin/add-catagory']='Product/p_cat';
$route['act_p_cata']='Product/p_cata';
$route['admin/catagoru/(:any)']='Product/upd/$1';
$route['upd_catagory']='Product/upd_p_cata';

//ins game
$route['admin/add-product']='Product/p_insf';
$route['add_game']='Product/ins_gam';
$route['admin/all-game']='Product/sel_game';
$route['delete/(:any)']='Product/del_p/$1';
$route['update/(:any)']='Product/upd_g_s/$1';
$route['update_game']='Product/act_updgame';
$route['upd_gametable']='Product/game_upd_id';
//ins game end

//offer
$route['admin/offer']='Product/of_pag';
$route['off-save']='Product/act_off';
$route['admin/list-offers']='Product/se_off';
$route['updaet-offers/(:any)']='Product/sel_offers/$1';
$route['off-update']='Product/upd_off';
$route['delete-offers/(:any)']='Product/off_del/$1';
$route['act-offer']='Product/upd_stat';
//offer end

$route['admin/all-gemmar/(:any)']='Product/gaEntUse/$1';
$route['upd-result']='Product/addResult';
$route['admin/delete-result/(:any)/(:any)/(:any)']='Product/deleteResult/$1/$2/$3';
$route['admin/admin']='Product/seUser';
$route['userSerch']='Product/seUser';
$route['admin/user-ban']='Product/userBan';


$route['admin/add-user']='Product/in_Admin';
$route['ind-admin']='Product/insAdmin';
$route['admin/Myemployee']='Product/seleAllEmp';
$route['admin-user-update/(:any)']='Product/updAdmin/$1';
$route['update-admin']='Product/update_AdminUser';
$route['admin-user-delete/(:any)']='Product/deleteAdmin/$1';
// user ins
$route['cteate-account']='User_p/s_u_ins';
$route['save-info']='User_p/a_creat_a';
// use login
$route['login']='User_p/log_user';
//log out
$route['logout']='User_p/log_ou';


$route['verification/(:any)']='User_p/otp_page/$1';
$route['otp_ver']='User_p/actOtp';
$route['forgot-password']='User_p/vieForget';
$route['otp-verification']='User_p/fUser';
$route['new-password']='User_p/newpass';
$route['userNewPassword']='User_p/nPass';

$route['processing']='Use_account/add_sop';
$route['myGame']='Use_account/my_order';
$route['myGame/(:any)']="Use_account/ord_view/$1";
$route['myAccount']='Use_account/macc';
$route['upduser']='Use_account/updus';
$route['updateFrindgameid']='Use_account/updFId';
$route['updateRecivePayment']='Use_account/updBank';


//admin login

$route['admin-login']='User_p/admin_view';
$route['admin-up']='User_p/adminAct';
$route['admin-logout']='User_p/log_admin';


//public Page

$route['default_controller'] = 'Page_any/m_page';
// $route['read-more/(:any)']='Page_any/game_pag/$1';

$route['read-more/(:any)']='Page_any/selpro/$1';
$route['game-info/(:any)']='Page_any/realDataChangeGame/$1';
$route['sign-up']='Page_any/cr_acc';
$route['live']='Page_any/vlist';
$route['v/(:any)']='Page_any/ov/$1';


$route['result-game']='Page_any/resul';
$route['winres/(:any)']='Page_any/all_win/$1';

$route['about']='Page_any/abou';
$route['terms-conditions']='Page_any/ter';
