<?php require 'src/template/base.php';?>

<title>BoatShop - Contact</title>

<div  id="web3forms__widget" x-data="{ open: false }">
    <!-- x-init is only for demo purpose. you may remove it.  -->
    <div
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
            <h3 class="text-lg text-white">How can we help?</h3>
            <p class="text-white opacity-50">We usually respond in a few hours</p>
        </div>
        <div class="bg-gray-50 flex-grow p-6">

            <form
                action="https://api.web3forms.com/submit"
                method="POST"
                id="form"
                class="needs-validation"
                novalidate
            >
                <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE" />
                <input
                    type="hidden"
                    name="subject"
                    value="New Submission from Web3Forms"
                />
                <input
                    type="checkbox"
                    name="botcheck"
                    id=""
                    style="display: none;"
                />


                <div class="mb-4">
                    <label
                        for="full_name"
                        class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Full Name</label
                    >
                    <input
                        type="text"
                        name="name"
                        id="full_name"
                        placeholder="Enter your name"
                        required
                        class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                    />
                    <div
                        class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
                    >
                        Please provide your full name.
                    </div>
                </div>




                <div class="mb-4">
                    <label
                        for="email"
                        class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Email Address</label
                    >
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Enter your email"
                        required
                        class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                    />
                    <div class="empty-feedback text-red-400 text-sm mt-1">
                        Please provide your email address.
                    </div>
                    <div class="invalid-feedback text-red-400 text-sm mt-1">
                        Please provide a valid email address.
                    </div>
                </div>


                <div class="mb-4">
                    <label
                        for="message"
                        class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Your Message</label
                    >

                    <textarea
                        rows="4"
                        name="message"
                        id="message"
                        placeholder="Your Message"
                        class="w-full h-28 px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                        required
                    ></textarea>
                    <div
                        class="empty-feedback invalid-feedback text-red-400 text-sm mt-1"
                    >
                        Please enter your message.
                    </div>
                </div>
                <div class="">
                    <button
                        type="submit"
                        class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"
                    >
                        Send Message
                    </button>
                </div>
            </form>


        </div>
    </div>
    <button
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

<!-- Web3Forms Popup Widget End here -->

<main class="h-screen flex flex-col space-y-2 items-center justify-center bg-gray-50">
    <div class="flex flex-col items-center justify-center -translate-x-1/2"> <p class="text-center text-xl text-gray-500">Web3Forms</p>
        <h1 class="font-bold text-center text-4xl text-indigo-500">
            Contact Widget Demo
        </h1>
        <p class="text-center text-xl text-gray-500 mt-3">Please open in Full Screen ?</p>

        <div>
            <svg
                class="opacity-20 ml-16 mt-6"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                id="Capa_1"
                x="0px"
                y="0px"
                width="100"
                height="100"
                viewBox="0 0 415.262 415.261"
                style="enable-background: new 0 0 415.262 415.261;"
                xml:space="preserve"
            >
          <g>
              <path
                  d="M414.937,374.984c-7.956-24.479-20.196-47.736-30.601-70.992c-1.224-3.06-6.12-3.06-7.956-1.224   c-10.403,11.016-22.031,22.032-28.764,35.496h-0.612c-74.664,5.508-146.88-58.141-198.288-104.652   c-59.364-53.244-113.22-118.116-134.64-195.84c-1.224-9.792-2.448-20.196-2.448-30.6c0-4.896-6.732-4.896-7.344,0   c0,1.836,0,3.672,0,5.508C1.836,12.68,0,14.516,0,17.576c0.612,6.732,2.448,13.464,3.672,20.196   C8.568,203.624,173.808,363.356,335.376,373.76c-5.508,9.792-10.403,20.195-16.523,29.988c-3.061,4.283,1.836,8.567,6.12,7.955   c30.6-4.283,58.14-18.972,86.292-29.987C413.712,381.104,416.16,378.656,414.937,374.984z M332.928,399.464   c3.673-7.956,6.12-15.912,10.404-23.868c1.225-3.061-0.612-5.508-2.448-6.12c0-1.836-1.224-3.061-3.06-3.672   c-146.268-24.48-264.996-124.236-309.06-259.489c28.764,53.244,72.828,99.756,116.28,138.924   c31.824,28.765,65.484,54.468,102.204,75.888c28.764,16.524,64.872,31.824,97.92,21.421l0,0c-1.836,4.896,5.508,7.344,7.956,3.672   c7.956-10.404,15.912-20.196,24.48-29.376c8.567,18.972,17.748,37.943,24.479,57.527   C379.44,382.94,356.796,393.956,332.928,399.464z"
              />
          </g>
        </svg>
        </div>
    </div>
</main>

<script type="module" src="https://cdn.skypack.dev/twind/shim"></script>
<script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer
></script>

<script>
    (function () {
        "use strict";
        /*
         * Form Validation
         */

        // Fetch all the forms we want to apply custom validation styles to
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
                        /*
                         * Form Submission using fetch()
                         */

                        const formData = new FormData(form);
                        event.preventDefault();
                        event.stopPropagation();
                        const object = {};
                        formData.forEach((value, key) => {
                            object[key] = value;
                        });
                        const json = JSON.stringify(object);
                        result.innerHTML = "Please wait...";

                        fetch("https://api.web3forms.com/submit", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                Accept: "application/json"
                            },
                            body: json
                        })
                            .then(async (response) => {
                                let json = await response.json();
                                if (response.status == 200) {
                                    result.innerHTML = json.message;
                                    result.classList.remove("text-gray-500");
                                    result.classList.add("text-green-500");
                                } else {
                                    console.log(response);
                                    result.innerHTML = json.message;
                                    result.classList.remove("text-gray-500");
                                    result.classList.add("text-red-500");
                                }
                            })
                            .catch((error) => {
                                console.log(error);
                                result.innerHTML = "Something went wrong!";
                            })
                            .then(function () {
                                form.reset();
                                form.classList.remove("was-validated");
                                setTimeout(() => {
                                    result.style.display = "none";
                                }, 5000);
                            });
                    }
                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>