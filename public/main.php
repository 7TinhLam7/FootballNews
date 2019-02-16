<main>
  <div class="row">
    <div class="col-3 col-s-3 menu">
      <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
         Menu
       </li>
       <?php
       foreach($menu as $mn){
         ?>
         <li href="#" class="list-group-item menu1">
           <?=$mn->Ten?>
         </li>
         <ul>
           <?php
           $loaitin = explode(',',$mn->LoaiTin);
           foreach($loaitin as $loai){
            list($id, $ten, $tenkhongdau) = explode(':',$loai);
            ?>
            <li class="list-group-item">
              <a href="./loaitin.php?id_loai=<?=$id?>"><?=$ten?></a>
            </li>
            <?php
          }
          ?>
        </ul>
        <?php
      }
      ?>
      
    </div>
    <!-- end list  -->
    <div class="col-6 col-s-9 main" >
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
          for($i=0;$i<count($slide);$i++){
            if($i==0){
              ?>
              <div class="item active">
                <img src="./public/image/slide/<?=$slide[$i]->Hinh?>" alt="Los Angeles" style="width:100%;">
              </div>
              <?php
            }
            else{
              ?>         
              <div class="item">
                <img src="./public/image/slide/<?=$slide[$i]->Hinh?>" alt="Chicago" style="width:100%;">
              </div>
              <?php
            }
          }
          ?>
          
          
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon-chevron-right"></span>
        </a>
      </div>

      <!-- end slide -->
      <div class="panel-body">
        <!-- item -->
        <?php
        foreach($menu as $mn){
         ?>
         <div class="item">
          <h3>
            <a href="#"><?=$mn->Ten ?></a> |
            <?php
            $loaitin = explode(',',$mn->LoaiTin);
            foreach($loaitin as $loai){
              list($id, $ten, $tenkhongdau) = explode(':',$loai);
              ?>
              <small><a href="./loaitin.php?id_loai=<?=$id?>"><?=$ten?></a></small>|
              
              <?php
              
            }
            
            ?>					
          </h3>
          <div class="news">
            <div class="article">
              <div class="thumb" style="background-image: url(./public/image/tintuc/<?=$mn->HinhTin?>)"></div>
              <div class="title"><?= $mn->TieuDeTin ?></div>
            </div>
          </div>
          <div class="col-12 border-right">
            <div class="col-3">
             <a href="./chitiet.php?loai_tin=<?= $tenkhongdau?>&id_tin=<?=$mn->idTin?>">
               <img class="img-responsive" src="./public/image/tintuc/<?=$mn->HinhTin?>" width="150pt" alt="">
             </a>
           </div>

           <div class="col-9">
             <h3><?= $mn->TieuDeTin ?></h3>
             <p><?= $mn->TomTatTin ?></p>
             <a class="btn btn-primary" href="./chitiet.php?loai_tin=<?= $tenkhongdau?>&id_tin=<?=$mn->idTin?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
           </div>

         </div>
       </div>
       <?php
     }
     ?>
   </div>
 </div>


 <!--end panel-body -->
 
 
 <!-- end slide   -->
 <div class="col-3 col-s-12">
  <div class="aside">
    <h2>What?</h2>
    <p>Chania is a city on the island of Crete.</p>
    <h2>Where?</h2>
    <p>Crete is a Greek island in the Mediterranean Sea.</p>
    <h2>How?</h2>
    <p>You can reach Chania airport from all over Europe.</p>
  </div>
</div>
<!-- end aside   -->

</main>