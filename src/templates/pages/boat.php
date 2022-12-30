<?php

use App\repository\productRepository;

require 'src/templates/base.php';
require 'src/repository/productRepository.php';

$repository = new productRepository();

// Get base url
function url()
{
    if (isset($_SERVER['HTTPS'])) {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}

// Get product ID and check if exists
$productId = explode("/", $_SERVER['REQUEST_URI'])[2];
$isProductExists = $repository->isProductExists($productId);

// Redirect if argument null or invalid
if ($productId == "" || !$isProductExists) {
    ?>
    <script>
        window.location.replace("<?php echo url() ?>");
    </script>
    <?php
}

$product = $repository->findById($productId);
$product = $product->fetch_assoc();
?>

<title>BoatShop - Boat#<?php echo $productId ?></title>

<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                 src="/assets/boats/<?php echo $product['image'] ?>">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest"><?php echo ucfirst($product['category']) ?></h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $product['name'] ?></h1>
                <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3">4 Reviews</span>
          </span>

                </div>
                <p class="leading-relaxed"><?php echo $product['description'] ?></p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                    <div class="flex items-center">
                        <span class="mr-3">Durée de la location</span>
                        <div class="relative">
                            <select id="duree" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                <option value="1">1 jour</option>
                                <option value="2">2 jours</option>
                                <option value="3">3 jours</option>
                                <option value="4">4 jours</option>
                                <option value="5">5 jours</option>
                                <option value="6">6 jours</option>
                                <option value="7">1 semaine</option>
                            </select>
                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">Total: <b class="text-indigo-500"><b id="show"><?php echo $product['price'] ?></b>€</b></span>
                    <a href="/reservation" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                        Réserver
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        var select_val;
        document.getElementById('duree').addEventListener('change', function() {
            select_val = this.value;
            document.getElementById("show").innerHTML = select_val * <?php echo $product['price'] ?>;
        }, false);
    })();
</script>