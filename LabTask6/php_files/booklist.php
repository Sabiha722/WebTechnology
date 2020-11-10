<?php
$books = simplexml_load_file("../xml_files/books.xml");
if (count($books)==0){
    echo "<tr>";
  echo "<td colspan=". 7 ."> No books to show. </td>";
  echo "</tr>";

}
else{
$cnt = 1;
foreach($books->book as $book)
{
echo "<tr>";
  echo "<td>". $cnt . "</td>" ;
  echo "<td>".(string)$book->bookname . "</td>" ;

  echo "<td>".(string)$book->publisher . "</td>" ;
  echo "<td>".(string)$book->isbn . "</td>" ;
  echo "<td>".(string)$book->price . "</td>" ;

  echo "<td " . ' style = "width:50px; align: center;" >' . "<img src=".(string)$book->image . ' style = "width:50px;" >' . "</td>" ;
  echo '<td><img src="../resource_files/drop.png"></td>' ;

  echo "</tr>";
  $cnt= $cnt+1;

}
}
 ?>