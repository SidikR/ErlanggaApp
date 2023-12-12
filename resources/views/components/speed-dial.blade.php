<div data-dial-init class="group fixed bottom-6 right-6 z-50 ">
    <div class="flex justify-center flex-col items-center">
        <div id="speed-dial-menu-hover" class="mb-4 hidden justify-center items-center space-y-2">
            <button onclick="sendMessageWhatsapp()" type="button" data-tooltip-target="tooltip-share"
                data-tooltip-placement="left"
                class="flex h-[52px] w-[52px] items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-400">
                <i class="bi bi-whatsapp text-xl"></i>
                <span class="sr-only">Share</span>
            </button>
            <div id="tooltip-share" role="tooltip"
                class="tooltip invisible absolute z-10 inline-block w-auto rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                WhatsApp
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button onclick="sendMessageEmail()" type="button" data-tooltip-target="tooltip-print"
                data-tooltip-placement="left"
                class="flex h-[52px] w-[52px] items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-400">
                <i class="bi bi-envelope-at-fill text-xl"></i>
                <span class="sr-only">Email</span>
            </button>
            <div id="tooltip-print" role="tooltip"
                class="tooltip invisible absolute z-10 inline-block w-auto rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                Email
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <button type="button" data-dial-toggle="speed-dial-menu-hover" data-dial-trigger="hover"
            aria-controls="speed-dial-menu-hover" aria-expanded="false"
            class="flex h-14 w-full p-2 px-4 items-center justify-center rounded-full bg-blue-700 text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Contact
            <span class="sr-only">Contact</span>
        </button>
    </div>

</div>

<script>
    const sendMessageWhatsapp = () => {
        let currentTime = new Date();
        let hours = currentTime.getHours();
        let minutes = currentTime.getMinutes();
        let timeOfDay = (hours < 12) ? "morning" : (hours < 18) ? "afternoon" : "evening";
        let phoneNumber = "6282113050357";
        let message = "Hello PT Erlangga Nusantara Ekspor,\nGood " + timeOfDay;
        let encodedMessage = encodeURIComponent(message);
        let whatsappLink = "https://wa.me/" + phoneNumber + "?text=" + encodedMessage;

        window.open(whatsappLink, '_blank');
    };

    const sendMessageEmail = () => {
        let currentTime = new Date();
        let hours = currentTime.getHours();
        let minutes = currentTime.getMinutes();
        let timeOfDay = (hours < 12) ? "morning" : (hours < 18) ? "afternoon" : "evening";
        let emailAddress = "inquiry@pterlangganusantaraekspor.com"; // Replace with the desired email address
        let subject = "I have a question";
        let message = "Hello PT Erlangga Nusantara Ekspor,\n\nGood " + timeOfDay +
            ".\n\nKind regards,\n[Your Name]"; // Replace [Your Name] with your name or other contact information

        let encodedSubject = encodeURIComponent(subject);
        let encodedMessage = encodeURIComponent(message);

        let emailLink = "mailto:" + emailAddress + "?subject=" + encodedSubject + "&body=" + encodedMessage;

        window.location.href = emailLink;
    };
</script>
