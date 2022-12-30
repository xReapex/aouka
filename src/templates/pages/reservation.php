<?php

use App\repository\productRepository;
use App\repository\reservationRepository;

require 'src/repository/productRepository.php';
require 'src/templates/base.php';

$productRepository = new productRepository();
$reservationRepository = new reservationRepository();

$msg = null;

if (count($_POST) !== 0) {

    echo $_POST['name'];
    echo $_POST['sname'];
    echo $_POST['guest'];
    echo $_POST['boat'];
    echo $_POST['date'];
    echo $_POST['datef'];

    // Check if all field are filled
    if ($_POST['name'] !== null || $_POST['sname'] !== null || $_POST['guest'] !== null || $_POST['date'] !== null || $_POST['datef'] !== null) {

        // Error by field
        if ($_POST['name'] == null) {
            $msg = "Veuillez saisir votre nom.";
        } else if ($_POST['sname'] == null) {
            $msg = "Veuillez saisir votre prénom.";
        } else if ($_POST['guest'] == null) {
            $msg = "Veuillez saisir le nombre de personnes présentes sur le bateau.";
        } else if ($_POST['date'] == null) {
            $msg = "Veuillez saisir la date de départ.";
        } else if ($_POST['datef'] == null) {
            $msg = "Veuillez saisir la date de fin.";
        }

        // Constraint
        if (strlen($_POST['name']) < 2 || strlen($_POST['name']) > 30) {
            $msg = "Le nom doit être compris entre 2 et 30 caractères.";
        } else if (strlen($_POST['sname']) < 2 || strlen($_POST['sname']) > 30) {
            $msg = "Le prénom doit être compris entre 2 et 30 caractères.";
        } else if ($_POST['date'] > $_POST['datef']) {
            $msg = "La date de début doit être plus récente que celle de retour.";
        }

        // If not error, save.
        if ($msg == null) {
            $reservationRepository->add($_POST['name'], $_POST['sname'], $_POST['guest'], $_POST['boat'], $_POST['date'], $_POST['datef']);
        }
    }
}
?>

<title>BoatShop - Reservation</title>

<div class="flex items-center justify-center p-32">
    <div class="mx-auto w-full max-w-[550px]">
        <form action="" method="post">

            <?php if ($msg == null) { ?>
                <div class="text-center py-4 lg:px-4">
                    <div class="p-2 bg-green-800 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex"
                         role="alert">
                        <span id="alert-type" class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Succès!</span>
                        <span class="font-semibold mr-2 text-left flex-auto">Votre réservation a bien été enregistrée!</span>
                        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                        </svg>
                    </div>
                </div>
            <?php } ?>

            <?php if ($msg !== null) {
                ?>
                <div class="text-center py-4 lg:px-4">
                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                     role="alert">
                    <span id="alert-type" class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Erreur</span>
                    <span class="font-semibold mr-2 text-left flex-auto"><?php echo $msg ?></span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                    </svg>
                </div>
                </div><?php
            }
            ?>

            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                                for="name"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Nom
                        </label>
                        <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Votre nom"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                                for="sname"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                        >Prénom
                        </label>
                        <input
                                type="text"
                                name="sname"
                                id="sname"
                                placeholder="Votre prénom"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <label
                        for="guest"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Nombres de personnes
                </label>
                <input
                        type="number"
                        name="guest"
                        id="guest"
                        placeholder="5"
                        min="1"
                        max="1000"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
            </div>


            <div class="mb-5">
                <label
                        for="boat"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Bateau à louer
                </label>

                <select
                        name="boat"
                        id="boat"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">

                    <?php
                    $products = $productRepository->getAll();

                    foreach ($products as $product) {
                        $product = explode('-', $product['name'])
                        ?>
                        <option value="<?php echo $product[1] ?>"><?php echo $product[1] ?></option>
                        <?php
                    }
                    ?>

                </select>

            </div>


            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                                for="date"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Date Début
                        </label>
                        <input min="<?php echo date("Y-m-d"); ?>"
                               type="date"
                               name="date"
                               id="date"
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                                for="datef"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Date Fin
                        </label>
                        <input min="<?php echo date("Y-m-d"); ?>"
                               type="date"
                               name="datef"
                               id="datef"
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                </div>
            </div>

            <div>
                <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                >
                    Réserver
                </button>
            </div>
        </form>
    </div>
</div>
