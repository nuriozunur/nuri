<!DOCTYPE html>
<html lang="tr">



<?php include "head.php"; ?>

<body>
<!-- <section >
<div id="imagesequence">
	<img id="myimg" src="img/bg/1.png"><br>
</div>
</section> -->




<?php include "header.php"; ?>





  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row referans-row">
            <?php
              for ($i = 1; $i < 39; $i++) {


                 // $a = $i  * 0.001 + 0.25;
              $a=$i * 0.1;
                echo '<center><div class="col-md-2  wow fadeInDown" data-wow-delay="'. $a.'s"><img  class="a-img"  src="img/ref_eski/ref' . $i.'.jpg" > </div></center>';

              }

            
            ?>



        </div>

      </div>


    </div>

  </div>
  </div>





  <?php include "footer.php"; ?>

</body>

</html>