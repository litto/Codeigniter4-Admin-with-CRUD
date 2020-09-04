<?php 

namespace Admin\Controllers;

/**
 * Admin abstract controller file
 *
 * @package CI-Admin
 * @author  Benoit VRIGNAUD <benoit.vrignaud@zaclys.net>
 * @license https://opensource.org/licenses/MIT	MIT License
 * @link    http://github.com/bbvrignaud/ci-admin
 */

class Home extends AbstractAdminController
{

	 private $configIonAuth;
	/**
	 * Affiche la page d'entrée du site en fonction du statut de l'utilisateur (non connecté, gamer ou leader)
	 *
	 * @return \CodeIgniter\HTTP\RedirectResponse|string
	 */


	public function index()
	{
		if (! $this->isAuthorized())
		{
			return redirect()->to('/');
		}
		//$this->ionAuth = new \IonAuth\Libraries\IonAuth();
		//return $this->view('home', lang('Admin.home-title'));
		$data['title']=lang('Admin.home-title');
          $user          = $this->ionAuth->user()->row();
            $data['user']=$user;
		$sidemenu =view("Admin\Views\admin_template\admin_sidebar" , $data);
		$notificationbar = view("Admin\Views\admin_template\admin_notification" , $data);
	    $data['sidemenu']=$sidemenu;
	    $data['notificationbar']=$notificationbar;

    echo view('Admin\Views\admin_template\admin_header', $data);
    echo view('IonAuth\Views\auth\dashboard', $data);
    echo view('Admin\Views\admin_template\admin_footer', $data);

	}
}
