<?php include_once "../php_files/redirect_login.php" ;?>
<?php include_once "../php_files/add_book.php" ;?>
<html>
  <head>
  <link rel="stylesheet" href="../css_files/addbook.css"></head>
  <title>Add New Book</title>
  <body>
    <div class="container">
  <img src="../resource_files/headerlogo1.jpg" alt="background_header">
  <div class="centered"><h1>Book Store</h1></div>
</div >

    <fieldset id="book_form" >
      <h1>Add Book</h1>

      <form action="" method="post"  >
        <table>
          <tr>
          <td style="text-align: left;"> Book Name: </td>
        </tr>

        <tr>
          <td style="text-align: left;"><input type="text" name="bookname" value=<?php echo $bookname; ?>><span><?php echo $error_bookname; ?></span></td>
          </tr>

          <tr>
          <td style="text-align: left;">Category: </td>
        </tr>

        <tr>
          <td style="text-align: left; ">
              <select name="category"  >
              <option disabled selected> Select Category</option>

              <?php include_once "../php_files/book_category.php" ;?>
            </select> <span><?php echo $error_category; ?></span>
          </td>

          </tr>

          <td style="text-align: left;"> Description: </td>
        </tr>

        <tr>

             <td>
            <textarea name="desc"  ><?php echo $desc; ?></textarea><span><?php echo $error_desc; ?></span>
             </td>
         </tr>

         <tr>
         <td style="text-align: left;"> Pblisher: </td>           </tr>
         <tr>
         <td style="text-align: left;"><input type="text" name="publisher" value=<?php echo $publisher; ?>><span><?php echo $error_publisher; ?></span></td>
         </tr>

         <tr>
         <td style="text-align: left;"> Edition: </td>
       </tr>

       <tr>
         <td style="text-align: left;"><input type="text" name="edition" value=<?php echo $edition; ?>><span><?php echo $error_edition; ?></span></td>
         </tr>
         <tr>
         <td style="text-align: left;"> ISBN: </td>
       </tr>
       <tr>
         <td style="text-align: left;"><input type="text" name="isbn" value=<?php echo $isbn; ?>><span><?php echo $error_isbn; ?></span></td>
         </tr>

         <tr>
         <td style="text-align: left;"> Pages: </td>
       </tr>
       <tr>
         <td style="text-align: left;"><input type="text" name="pages" value=<?php echo $pages; ?>><span><?php echo $error_pages; ?></span></td>
         </tr>

         <tr>
         <td style="text-align: left;">Price: </td>
       </tr>
       <tr>
         <td style="text-align: left;"><input type="text" name="price" value=<?php echo $price; ?>><span><?php echo $error_price; ?></span></td>
         </tr>
         <tr>
          <td colspan="2" align="center">
          <input type="submit" name="addbook" value="Add Book">
          </td>
          </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>