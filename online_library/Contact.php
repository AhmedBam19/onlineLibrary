<?php

class Contact{

public $name_book;
public $author_name;
public $language;
public $date;
public $publisher;
public $num;
public $about;  

public function __construct(string $name_book,string $author_name,string $language,int $date,string $publisher,int $num,string $about ){

$this->name_book=$name_book;
$this->author_name=$author_name;
$this->language=$language;
$this->date=$date;
$this->publisher=$publisher;
$this->num=$num;
$this->about=$about;


}
public function getInfo(){
	$info ="اسم الكتاب: ".$this->name_book ."<br>اسم الكاتب: ".$this->author_name."<br>اللغة: ".$this->language.
	"<br>تاريخ: ".$this->date."<br>دار النشر: ".$this->publisher."<br>عدد الصفحات: ".$this->num."<br>نبذه عن الكتاب: ".$this->about; 
	return $info;
}





}

?>