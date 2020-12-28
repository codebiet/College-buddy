<?php
require 'common.php';
?>
<html>
    <head>
      <title>Books Store</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
        a:hover {
            color: black !important;
            cursor: pointer;
        }
        #background-image{
            
           border:2px #5cb85c solid;
           border-radius: 0px 0px 25px 25px;
           margin-bottom: 15px;
        }
    </style>
    </head>
    <?php
    include 'home2.php';
    ?>
    <body>
        <?php
        $select="SELECT * FROM images WHERE category='Components'";
        $cf=mysqli_query($con,$select);
        ?>
        <table>
        <tbody>
                    <?php
                    while($row=mysqli_fetch_array($cf)){
                        echo "<div class='text-center'><div class='col-md-3 col-xs-6 home-feature'><div id='background-image'><img src='".$row['filename']."' height='30%' width='99%'><div class='caption'><h3>Rs ".$row['price']."<h3><details><summary>".$row['product']."</summary><p>".$row['discription']."</p></details><h4>".$row['name']."</h4><h4>Contact:".$row['contact']."</h4><p>Addr:-".$row['address']."</p></div></div></div></div>";
                        
                    }
        ?>
         </tbody>
        </table>
    </body>
</html>
