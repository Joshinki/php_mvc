<?php
	require_once 'Game.php';

	class Model {
	
		function getGames() {
			// Create some data
			return array(
				"Battlefield" => new Game('Battlefield 1', '2016', 'Action'),
				"COD" => new Game('Call Of Duty', '2008', 'Action'),
				"Farcry" => new Game('Farcry', '2015', 'Adventure'));
		}
		
		function showGame($title) {
			$games = $this->getGames();
			return $games[$title];
		}
	
	}