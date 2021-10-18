<!-- box cat -->
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $data["name_LoaiTin"][0]["Ten"] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $data["newest_news_follow_LoaiTin"][0]["TieuDe"] ?> </a></h3>
                  <img class="images_news" src="./public/upload/tintuc/<?php echo $data["newest_news_follow_LoaiTin"][0]["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $data["newest_news_follow_LoaiTin"][0]["TomTat"] ?></div>                 
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php  for($i=0 ; $i <= 5; $i++){ ?>
            <h3 class="tlq"><a href="#"><?php echo $data["list_newest_news_follow_LoaiTin"][$i]["TieuDe"] ?></a></h3>
            <?php } ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $data["name_LoaiTin"][1]["Ten"] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $data["newest_news_follow_LoaiTin"][1]["TieuDe"] ?> </a></h3>
                  <img class="images_news" src="./public/upload/tintuc/<?php echo $data["newest_news_follow_LoaiTin"][1]["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $data["newest_news_follow_LoaiTin"][1]["TomTat"] ?></div>                 
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php  for($i=6 ; $i <= 10; $i++){ ?>
            <h3 class="tlq"><a href="#"><?php echo $data["list_newest_news_follow_LoaiTin"][$i]["TieuDe"] ?></a></h3>
            <?php } ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- box cat -->
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $data["name_LoaiTin"][2]["Ten"] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $data["newest_news_follow_LoaiTin"][2]["TieuDe"] ?> </a></h3>
                  <img class="images_news" src="./public/upload/tintuc/<?php echo $data["newest_news_follow_LoaiTin"][2]["urlHinh"] ?>" align="left" />
                    <div class="des"><?php echo $data["newest_news_follow_LoaiTin"][2]["TomTat"] ?></div>                 
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php  for($i=11 ; $i <= 15; $i++){ ?>
            <h3 class="tlq"><a href="#"><?php echo $data["list_newest_news_follow_LoaiTin"][$i]["TieuDe"] ?></a></h3>
            <?php } ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>