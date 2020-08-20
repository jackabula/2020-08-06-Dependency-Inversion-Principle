<?php

class builder
{
	public function build(mallet $mallet)
	{
	    $mallet->building();
	}
}

interface mallet
{
	public function building();
}

class house implements mallet
{
	public function building()
	{
		echo '房子';
	}
}

class bridge implements mallet
{
	public function building()
	{
		echo '大橋';
	}
}


$house = new house();
$bridge  	= new bridge();
$builder	= new builder();
$builder->build($house);
$builder->build($bridge);