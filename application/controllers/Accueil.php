<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends CI_Controller
{

	/**
	 * Method qui charge l'index a la page indique dans view
	 *
	 * Est la methode appelee au lancement de l'application
	 */
	public function index()
	{
		$data['titre'] = "Blog groupe 3"; // nom de la page

		//$data['log'] = $_SESSION['login']; // le login de connexion
		$bdd['request'] = array(); // les articles

		$this->load->helper('url');

		$this->load->view('header', $data); // menu
		$this->load->view('accueil_site', $bdd); // accueil
	}
}