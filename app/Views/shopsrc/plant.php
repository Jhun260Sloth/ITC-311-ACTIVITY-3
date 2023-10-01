    <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">

            <?php foreach ($prod as $us): ?>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product" style="border-radius: 10px">

                     <figure>
                    <img src="<?= $us['image'] ?>" alt="img" style="width: 300px; height: 200px; border-radius: 10px;" />
                  </figure>

                     <br>

                     <h4><?= $us['name'] ?></h4>

                    <h3> $<strong class="price_text"> <?= $us['price'] ?> </strong></h3>
                     <h5>Quantity: <?= $us['quantity'] ?> </h5>
                     <br>
                     <a href="/info/<?= $us['id']?>" class="btn btn-primary">View</a>
                  </div>

               </div>
            <?php endforeach; ?>

             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->