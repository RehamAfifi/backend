

    <!-- Related Car Start -->
 <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Related Cars</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
            <?php 
            foreach($stmtRel->fetchAll() as $row){
                $titleRel=$row["title"];
                $priceRel=$row["price"];
                $modelRel=$row["model"];
                $autoRel=$row["auto"];
                if($autoRel==0){
                  $auto_strRel="Manual";
              
                }else{
                  $auto_strRel="Automatic";
                }
                $imageRel=$row["image"];
                $propertiesRel=$row["properties"];
                $contentRel=$row["content"];
            
            ?>
            <div class="rent-item">
                    <img class="img-fluid mb-4" src="img/<?php echo $imageRel?>" alt="">
                    <h4 class="text-uppercase mb-4"><?php echo $titleRel?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span><?php echo $modelRel?></span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span><?php echo $auto_strRel?></span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span><?php echo $propertiesRel?></span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href=""><?php echo $priceRel?></a>
                </div>
              
                <?php } ?>
            </div>
           
        </div>
    </div>