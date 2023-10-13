<?php 

try{
  include_once("./admin/includes/conn.php");
  $sql="SELECT * FROM `testimonials`";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}
?>
    <div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-1 text-primary text-center">05</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Our Testimonials</h1>
        <div class="owl-carousel testimonial-carousel">
        <?php
        foreach($stmt->fetchAll() as $row){
            $testi_name=$row["name"];
            $position=$row["position"];
            $content=$row["content"];
            $id=$row["id"];
            $image=$row["photo"];
         
          ?>

            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">

                    <img class="img-fluid ml-n4" src="img/<?php echo $image?>" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1></div>
                <h4 class="text-uppercase mb-2"><?php echo $testi_name?></h4>
                <i class="mb-2"><?php echo $position?></i>
                <p class="m-0"><?php echo $content?></p>
                
            </div>
            <?php } ?>
        </div>
      
    </div>
  
</div>


