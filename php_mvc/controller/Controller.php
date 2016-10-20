<?php
	require_once 'model/Model.php';

	class Controller {
	
		function __construct() {
			$this->model = new Model();
		}
		
		function show() {
			if(isset($_GET['view']) AND $_GET['view'] != "") {
				//view game 
				$game = $this->model->showGame($_GET['view']);
				require_once 'view/show_game.php';
			} else {
				//list all games available
				$games = $this->model->getGames();
				require_once 'view/list_games.php';
			}
		}
	
	}