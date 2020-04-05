
        <?php    
        require 'views/templates/control.tmpl.php';
            /* Content Starts Below */
        ?>

   
            <div class="info-box">    
                <div class="info-box-image">
                    <img src="https://unsplash.it/340/">
                </div>            
            


                <div class="info-box-text">
                    <h2>Tour: <?= $tour ?></h2>
                    <p>Location: <?= $loc ?></p>
                    <p>Date: <?= $date ?></p>
                    <p>Size: <?= $size ?></p>
                </div>
            </div>

            <?php    
            /* Content Ends Above */
        require 'views/templates/footer.tmpl.php';
        ?>

        

