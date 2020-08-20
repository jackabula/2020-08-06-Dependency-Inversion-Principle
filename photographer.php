<?php

class photographer
{
	public function photography(camera $camera)
	{
	    $camera->photography();
	}
}

interface camera
{
	public function photography();
}

class filming implements camera
{
	public function photography()
	{
		echo '拍電影';
	}
}

class sng implements camera
{
	public function photography()
	{
		echo 'SNG實況轉播';
	}
}


$filming = new filming();
$sng = new sng();
$photographer  	= new photographer();
$photographer->photography($filming);
$photographer->photography($sng);