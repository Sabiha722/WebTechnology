<?php
$bookname = $error_bookname = $error_category =$category = "";
$desc = $error_desc = $publisher = $error_publisher = $edition = $error_edition = $isbn = $error_isbn = $pages = $error_pages = $price = $error_price = "";

$hasError = false;
if(isset($_POST["addbook"])){
		if(empty($_POST["bookname"])){
			$error_bookname="Book name required";
			$hasError =true;
		}
		else{
			$bookname = htmlspecialchars($_POST["bookname"]);
		}


    if(empty($_POST["category"])){
      $error_category="Category required";
      $hasError =true;
    }
    else{
      $category = htmlspecialchars($_POST["category"]);
    }


    if(empty($_POST["desc"])){
      $error_desc="Desc required";
      $hasError =true;
    }
    else{
      $desc = htmlspecialchars($_POST["desc"]);
    }


    if(empty($_POST["publisher"])){
      $error_publisher="Publisher required";
      $hasError =true;
    }
    else{
      $publisher = htmlspecialchars($_POST["publisher"]);
    }


    if(empty($_POST["edition"])){
      $error_edition="Eedition required";
      $hasError =true;
    }
    else{
      $edition = htmlspecialchars($_POST["edition"]);
    }

    if(empty($_POST["isbn"])){
      $error_isbn="isbn required";
      $hasError =true;
    }
    else{
      $isbn = htmlspecialchars($_POST["isbn"]);
    }

    if(empty($_POST["pages"])){
      $error_pages="Pages required";
      $hasError =true;
    }
    elseif (!is_numeric($_POST["pages"]))
    {
    		$error_phone_code = "Pages must be neumeric";
    		$hasError = true;
    }
    else{
      $pages = htmlspecialchars($_POST["pages"]);
    }

    if(empty($_POST["price"])){
      $error_price="Price required";
      $hasError =true;
    }
    else{
      $price = htmlspecialchars($_POST["price"]);
    }

		if(!$hasError){
			$books = simplexml_load_file("../xml_files/books.xml");

			$book = $books->addChild("book");
			$book->addChild("fullname",$bookname);
			$book->addChild("category",$category);
			$book->addChild("desc",$desc);
			$book->addChild("publisher",$publisher);
			$book->addChild("edition","$edition");
			$book->addChild("isbn",$isbn);
      $book->addChild("pages",$pages);
      $book->addChild("price",$price);
			$book->addChild("type","book");

			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());

      $file = fopen("../xml_files/books.xml","w");
			fwrite($file,$xml->saveXML());

			header("Location: ../html_files/dashboard.php");
		}
	}

?>
