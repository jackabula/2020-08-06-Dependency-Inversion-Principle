<?php

class hunter
{
	public function hunt(shotgun $shotgun)
	{
	    $shotgun->hunting();
	}
}

interface shotgun
{
	public function hunting();
}

class catchanimals implements shotgun
{
	public function hunting()
    {
        echo '打獵';
    }
}

$hunter = new hunter();
$catchanimals  	= new catchanimals();
$hunter->hunt($catchanimals);