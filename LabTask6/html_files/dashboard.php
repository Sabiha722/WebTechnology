<!DOCTYPE html>

<?php include_once "../php_files/redirect_login.php" ;?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
      <link rel="stylesheet" href="../css_files/dashboard.css"></head>
  </head>
  <body>
    <div class="container">
  <img src="../resource_files/headerlogo1.jpg" alt="background_header">
  <div class="centered"><h1>Book Store</h1></div>
</div>
<table id="book_table" border="1" class-"container">
  <tr>
    <td colspan="7"> <a href="add_book.php"> Add New Book</td>

  </tr>

  <tr>
    <th> SR. NO </th>
      <th> NAME  </th>
        <th> PUBLISHER  </th>
          <th> ISBN </th>
            <th> PRICE </th>
              <th>IMAGE  </th>
                <th> DELETE </th>
 </tr>

<?php include_once "../php_files/booklist.php" ;?>

</table>
</body>
</html>