<div id="slide-left">
        	<div id="slideleft-main">
            <?php
              $newest_news = mysqli_fetch_array($data["newest_news"]);
            ?>
                <img src="./public/upload/tintuc/<?php echo $newest_news["urlHinh"] ?>"  /><br />
                <h2 class="title"><a href="index.php?url=chitiettin&idTin=<?php echo $newest_news["idTin"] ?>"><?php echo $newest_news["TieuDe"] ?></a> </h2>
                <div class="des">
                <?php echo $newest_news["TomTat"] ?>
                </div>
            	
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php while($row = mysqli_fetch_array($data["list_newest_news"])){ ?>
               <li>
                <div class="title_news">
               		<a href="index.php?url=chitiettin&idTin=<?php echo $row["idTin"] ?>" class="txt_link"> <?php echo $row["TieuDe"] ?></a> 
                </div>
              </li>
              <?php } ?>
              
 
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     