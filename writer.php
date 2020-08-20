<?php

class writer
{
	public function write(pen $pen)
	{
	    $pen->writing();
	}
}

interface pen
{
	public function writing();
}

class article implements pen
{
	public function writing()
	{
		echo '文章';
	}
}

class book implements pen
{
	public function writing()
	{
		echo '書';
	}
}


$article = new article();
$book  	= new book();
$writer	= new writer();
$writer->write($article);
$writer->write($book);