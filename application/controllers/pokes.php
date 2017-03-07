<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokes extends CI_Controller {

	public function pokeUser()
	{
		$pokeData = $this->input->post();

		$poke_confirm = $this->Poke->check_poke_status($pokeData);  
		if($poke_confirm)
		{
			$result = $this->Poke->add_to_existing_poke($pokeData);
			if($result)
			{
				redirect('/profile');
			}
			else
			{
				$this->session->set_flashdata("error", "Something went wrong. Could not add a poke at this time. Please try again later.");
				redirect('/profile');
			}
		}
		else
		{
			$result = $this->Poke->add_new_poke($pokeData);
			if($result)
			{
				$this->session->set_flashdata("success", "You poked this user for the first time. Nice one!");
				redirect('/profile');
			}
			else
			{
				$this->session->set_flashdata("error", "Something went wrong. Could not add a poke at this time. Please try again later.");
				redirect('/profile');
			}
		}
	}
}

?>