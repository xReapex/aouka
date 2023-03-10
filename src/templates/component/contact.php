<div id="web3forms__widget" x-data="{ open: false }" x-cloak="">
    <div x-cloak=""
         id="w3f__widget--content"
         x-show="open"
         x-transition:enter-start="opacity-0 translate-y-5"
         x-transition:enter="transition duration-200 transform ease"
         x-transition:leave="transition duration-200 transform ease"
         x-transition:leave-end="opacity-0 translate-y-5"
         @click.away="open = false"
         class="fixed flex flex-col z-50 bottom-[100px] top-0 right-0 h-auto left-0 sm:top-auto sm:right-5 sm:left-auto h-[calc(100%-95px)] w-full sm:w-[350px] overflow-auto min-h-[250px] sm:h-[600px] border border-gray-300 bg-white shadow-2xl rounded-md"
    >
        <div class="flex p-5 flex-col justify-center items-center h-32 bg-indigo-600">
            <h3 class="text-lg text-white">Envoyez nous un mail!</h3>
            <p class="text-white opacity-50">Nous répondons en quelques heures.</p>
        </div>
        <div class="bg-gray-50 flex-grow p-6">

            <form
                    action=""
                    method="post"
                    id="form"
                    class="needs-validation"
                    novalidate
            >

                <div class="mb-4">
                    <label
                            for="full_name"
                            class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Nom</label
                    >
                    <input
                            type="text"
                            name="name"
                            id="full_name"
                            placeholder="Entrez votre nom"
                            required
                            class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                    />
                    <div
                            class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
                    >
                        Entrez votre nom
                    </div>
                </div>


                <div class="mb-4">
                    <label
                            for="email"
                            class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Adresse mail</label
                    >
                    <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Entrez votre email"
                            required
                            class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                    />
                    <div class="empty-feedback text-red-400 text-sm mt-1">
                        Entrez une adresse mail
                    </div>
                    <div class="invalid-feedback text-red-400 text-sm mt-1">
                        Entrez une adresse mail valide
                    </div>
                </div>


                <div class="mb-4">
                    <label
                            for="message"
                            class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Votre message</label
                    >

                    <textarea
                            rows="4"
                            name="message"
                            id="message"
                            placeholder="Votre message"
                            class="w-full h-28 px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                            required
                    ></textarea>
                    <div
                            class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
                    >
                        Entrez votre message.
                    </div>
                </div>
                <input
                        type="submit"
                        class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
                >
            </form>


        </div>
    </div>
    <button x-cloak=""
            id="w3f__widget--btn"
            @click="open = !open"
            class="fixed z-40 right-5 bottom-5 shadow-lg flex justify-center items-center w-14 h-14 bg-indigo-500 rounded-full focus:outline-none hover:bg-indigo-600 focus:bg-indigo-600 transition duration-300 ease"
    >
        <svg
                class="w-6 h-6 text-white absolute"
                x-show="!open"
                x-transition:enter-start="opacity-0 -rotate-45 scale-75"
                x-transition:enter="transition duration-200 transform ease"
                x-transition:leave="transition duration-100 transform ease"
                x-transition:leave-end="opacity-0 -rotate-45"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        >
            <path
                    d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
            ></path>
        </svg>

        <svg
                class="w-6 h-6 text-white absolute"
                x-show="open"
                x-transition:enter-start="opacity-0 rotate-45 scale-75"
                x-transition:enter="transition duration-200 transform ease"
                x-transition:leave="transition duration-100 transform ease"
                x-transition:leave-end="opacity-0 rotate-45"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        >
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>

</div>

<style>

    [x-cloak] {
        display: none;
    }

    .invalid-feedback,
    .empty-feedback {
        display: none;
    }

    .was-validated :placeholder-shown:invalid ~ .empty-feedback {
        display: block;
    }

    .was-validated :not(:placeholder-shown):invalid ~ .invalid-feedback {
        display: block;
    }

    .is-invalid,
    .was-validated :invalid {
        border-color: #dc3545;
    }

    .is-invalid,
    .was-validated :invalid:focus {
        --tw-ring-color: rgba(220, 53, 69, 0.2);
    }
</style>

<script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
></script>

<script>
    (function () {
        "use strict";

        const forms = document.querySelectorAll(".needs-validation");
        const result = document.getElementById("result");
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();

                        form.querySelectorAll(":invalid")[0].focus();
                    } else {

                        const formData = new FormData(form);
                        event.preventDefault();
                        event.stopPropagation();
                        const object = {};
                        formData.forEach((value, key) => {
                            object[key] = value;
                        });
                        const json = JSON.stringify(object);
                        result.innerHTML = "Please wait...";
                    }
                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>