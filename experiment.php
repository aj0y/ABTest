<?php

// find the file its included from

class Experiment
{
	public static $current_file;
	public static $part_name;

	// ==============================
	/*
		####
			to be called from the file where the experiment code snippets
		####

		$current_file = absolute pathe to the filename
		$part_name =
			if there are many places in the same file,
			multiple code snippets on the same file that needs
			to be changed, this name is used to uniquely identify that part

	*/
	public static function testCode(
		$current_file,
		$part_name
	)
	{
		self::$current_file = $current_file;
		self::$part_name = $part_name;
		
		
	}
	
	// ==============================
	public function createTest(
		$experiment_name,
		$file_being_changed,
		$percentage,
		$date_start,
		$code_snippet
	)
	{
		
	}


	// ==============================
	public function startTest(
		$experiment_name
	)
	{
		
	}
	
	
	// ==============================
	public function stopTest(
		$experiment_name
	)
	{
		
	}
	
	public static function processDashboard()
	{
		if( $_SERVER['REQUEST_METHOD'] != 'POST')
		{
			return;
		}
	}
}

?>