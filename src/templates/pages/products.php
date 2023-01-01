<?php

use App\repository\productRepository;

require 'src/templates/base.php';
require 'src/repository/productRepository.php';

$repository = new productRepository();
$products = $repository->getAll();

?>
    <title>BoatShop - Products</title>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">

                <?php
                foreach ($products as $product) { ?>
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full" id="boat">
                        <a class="block relative h-48 rounded overflow-hidden" href="/boat/<?php echo $product['id'] ?>">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block transform transition duration-500 hover:scale-105"
                                 src="assets/boats/<?php echo $product['image'] ?>">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo ucfirst($product['category']); ?></h3>
                            <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo ucfirst($product['name']); ?></h2>

                            <?php
                            if ($product['category'] == "vertical") {
                                ?>
                                <p class="mt-1"><b class="text-indigo-500" style="writing-mode: vertical-rl; text-orientation: sideways;"><?php echo $product['price']; ?></b><b class="text-indigo-500">€</b> /jour
                                </p>
                                <?php
                            } else {
                                ?>
                                <p class="mt-1"><b class="text-indigo-500"><?php echo $product['price']; ?>€</b> /jour
                                </p>
                                <?php
                            }
                            ?>


                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </section>

    <script>
        ScrollReveal().reveal('#boat', { interval: 150, easing: 'ease-in' });
    </script>

<?php require 'src/templates/component/footer.php' ?>