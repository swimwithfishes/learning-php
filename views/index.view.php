<?php require 'template/main.tmpl.php'; ?>

<!-- START CONTENT HERE -->

    <div class="order-box">
        <div class="order-image">
            <img src="https://unsplash.it/340/" />
        </div>
        <div class="order-details">
            <h5>Order Number: <?= htmlspecialchars($orderNumber);  ?></h5>
            <h3>Order Name: <?= htmlspecialchars($orderName); ?></h3>
            <p>Size: <?= htmlspecialchars($size);  ?></p>
            <p>Color: <?= htmlspecialchars($color); ?></p>
        </div>

        <p>Page <?= $page ?></p>
    </div>

<!-- STOP CONTENT HERE -->

<?php require 'template/footer.tmpl.php'; ?>


