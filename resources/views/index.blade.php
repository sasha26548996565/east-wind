@extends('layouts.app')

@section('content')
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div>
            <h2 class="text-lg lg:text-[42px] font-black">Успейте приобрести!</h2>
            <div
                class="mt-8 p-3 sm:p-4 2xl:p-6 rounded-xl bg-blue-800 text-xs sm:text-sm lg:text-base text-white font-semibold shadow-lg">
                Только сейчас по цене <strong class="text-yellow-300">2000</strong> тг! Не упустите шанс, скоро цена
                поднимется до <strong class="text-red-500">5000</strong> тг.
                За 2000тг вы получаете следующее: <strong class="text-green-300">200</strong> сообщений нашему боту без
                временных ограничений! <br>
                <a class="btn btn-pink" href="tg://resolve?domain=r00t_S">Хочу купить!</a>
            </div>
        </div>
        <div>
            <h2 class="text-lg lg:text-[42px] font-black">Как начать пользоваться нашим ботом</h2>
            <div
                class="mt-8 p-3 sm:p-4 2xl:p-6 rounded-xl bg-blue-800 text-xs sm:text-sm lg:text-base text-white font-semibold shadow-lg">
                <div class="flex items-start space-x-4">
                    <div
                        class="flex-shrink-0 bg-pink text-black rounded-full h-8 w-8 flex items-center justify-center font-bold">
                        1</div>
                    <p class="flex-1">Зарегистрируйтесь на нашем сайте, чтобы получить доступ к услугам бота.</p>
                </div>
                <div class="flex items-start space-x-4">
                    <div
                        class="flex-shrink-0 bg-pink text-black rounded-full h-8 w-8 flex items-center justify-center font-bold">
                        2</div>
                    <p class="flex-1">Напишите админу в <a class="text-pink-400 underline"
                            href="tg://resolve?domain=r00t_S">Телеграме</a> для оплаты и активации вашего аккаунта.</p>
                </div>
                <div class="flex items-start space-x-4">
                    <div
                        class="flex-shrink-0 bg-pink text-black rounded-full h-8 w-8 flex items-center justify-center font-bold">
                        3</div>
                    <p class="flex-1">После подтверждения оплаты, бот станет доступен для использования!</p>
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-lg lg:text-[42px] font-black">О нас</h2>
            <div class="mt-8 p-3 sm:p-4 2xl:p-6 rounded-xl bg-card text-xxs sm:text-xs lg:text-sm text-white font-semibold">
                Build your life помогает людям, нуждающимся в эмоциональной
                поддержке,
                путем получения доступа к надежному и конфиденциальному психологическому сопровождению в удобном
                онлайн-формате
                с помощью
                ИИ-бота, обеспечивающего непрерывную поддержку и консультации
            </div>
        </div>
    </section>

    <section class="lg:mt-24">
        <!-- Section heading -->
        <h2 class="text-lg mt-16 lg:text-[42px] font-black">Наши преимущества</h2>

        <!-- Advantages -->
        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-3 sm:gap-4 md:gap-6 mt-8">
            <div
                class="flex flex-col items-center gap-2 py-6 md:py-8 px-4 md:px-6 rounded-xl bg-purple text-white text-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    class="w-10 md:w-12 h-10 md:h-12 opacity-40" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 25.098 46.604 h -8.424 c -0.749 0 -1.434 -0.418 -1.777 -1.083 c -0.343 -0.665 -0.286 -1.466 0.147 -2.076 l 7.684 -10.802 c 0.437 -0.613 0.498 -1.388 0.164 -2.073 c -0.15 -0.309 -0.609 -1.031 -1.612 -1.077 l -0.115 -0.002 c -1.373 0 -2.49 1.117 -2.49 2.49 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 c 0 -3.579 2.911 -6.49 6.49 -6.49 c 0.098 0 0.194 0.002 0.291 0.006 c 2.187 0.099 4.066 1.34 5.032 3.32 c 0.971 1.992 0.78 4.346 -0.5 6.145 l -5.437 7.643 h 4.547 c 1.104 0 2 0.896 2 2 S 26.203 46.604 25.098 46.604 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 40.326 46.604 c -1.104 0 -2 -0.896 -2 -2 v -1.181 h -7.996 c -0.75 0 -1.437 -0.419 -1.779 -1.086 c -0.342 -0.667 -0.283 -1.47 0.154 -2.08 l 9.996 -13.933 c 0.505 -0.706 1.408 -1.005 2.237 -0.738 c 0.827 0.266 1.388 1.035 1.388 1.904 v 11.933 h 1.2 c 1.104 0 2 0.896 2 2 s -0.896 2 -2 2 h -1.2 v 1.181 C 42.326 45.708 41.431 46.604 40.326 46.604 z M 34.227 39.423 h 4.1 v -5.714 L 34.227 39.423 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 58.815 64.51 c -0.344 0 -0.692 -0.089 -1.01 -0.274 c -0.953 -0.56 -1.272 -1.785 -0.714 -2.737 l 8.272 -14.103 h -6.547 c -1.104 0 -2 -0.895 -2 -2 c 0 -1.104 0.896 -2 2 -2 h 10.039 c 0.717 0 1.379 0.384 1.735 1.006 s 0.353 1.388 -0.01 2.006 l -10.04 17.113 C 60.17 64.156 59.502 64.51 58.815 64.51 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 40.35 64.51 c -0.333 0 -0.671 -0.083 -0.982 -0.259 c -0.961 -0.543 -1.301 -1.764 -0.757 -2.725 l 19.783 -35.02 c 0.543 -0.96 1.764 -1.301 2.725 -0.757 c 0.962 0.543 1.301 1.763 0.758 2.725 L 42.093 63.493 C 41.726 64.145 41.048 64.51 40.35 64.51 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 42.265 87.265 C 18.96 87.265 0 68.305 0 45 C 0 21.695 18.96 2.735 42.265 2.735 S 84.53 21.695 84.53 45 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 c 0 -21.1 -17.166 -38.265 -38.265 -38.265 C 21.166 6.735 4 23.9 4 45 s 17.166 38.265 38.265 38.265 c 13.546 0 26.214 -7.273 33.059 -18.982 c 0.558 -0.953 1.781 -1.274 2.736 -0.717 c 0.953 0.558 1.274 1.782 0.717 2.736 C 71.218 79.232 57.228 87.265 42.265 87.265 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 82.53 47 c -0.512 0 -1.023 -0.195 -1.414 -0.586 l -5.47 -5.47 c -0.781 -0.781 -0.781 -2.047 0 -2.828 c 0.781 -0.781 2.047 -0.781 2.828 0 l 4.056 4.055 l 4.056 -4.055 c 0.781 -0.781 2.047 -0.781 2.828 0 c 0.781 0.781 0.781 2.047 0 2.828 l -5.47 5.47 C 83.554 46.805 83.042 47 82.53 47 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <h5 class="pt-2 md:pt-4 text-sm md:text-md font-bold">24/7 доступ</h5>

            </div>
            <div
                class="flex flex-col items-center gap-2 py-6 md:py-8 px-4 md:px-6 rounded-xl bg-purple text-white text-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    class="w-10 md:w-12 h-10 md:h-12 opacity-40" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 77.127 81.457 h -0.373 v -2 h 0.373 c 1.239 0 2.432 -0.371 3.446 -1.072 l 1.137 1.645 C 80.36 80.964 78.775 81.457 77.127 81.457 z M 72.11 81.457 h -4.645 v -2 h 4.645 V 81.457 z M 62.822 81.457 h -4.645 v -2 h 4.645 V 81.457 z M 53.534 81.457 H 48.89 v -2 h 4.645 V 81.457 z M 44.246 81.457 h -4.644 v -2 h 4.644 V 81.457 z M 34.958 81.457 h -4.644 v -2 h 4.644 V 81.457 z M 84.813 75.85 l -1.904 -0.609 c 0.19 -0.596 0.287 -1.218 0.287 -1.852 c 0 -0.708 -0.121 -1.403 -0.36 -2.064 l 1.881 -0.68 c 0.318 0.88 0.479 1.804 0.479 2.744 C 85.195 74.229 85.066 75.058 84.813 75.85 z M 80.386 68.269 c -0.972 -0.62 -2.099 -0.948 -3.259 -0.948 h -0.634 v -2 h 0.634 c 1.542 0 3.041 0.437 4.335 1.263 L 80.386 68.269 z M 71.849 67.32 h -4.644 v -2 h 4.644 V 67.32 z M 62.561 67.32 h -4.408 c -0.092 0 -0.183 -0.001 -0.272 -0.005 l 0.074 -1.998 l 0.198 0.003 h 4.408 V 67.32 z M 53.016 65.474 c -1.37 -1.132 -2.34 -2.705 -2.732 -4.43 l 1.951 -0.443 c 0.294 1.296 1.024 2.479 2.055 3.332 L 53.016 65.474 z M 52.642 56.707 l -1.814 -0.84 c 0.744 -1.607 2.02 -2.945 3.59 -3.768 l 0.928 1.771 C 54.162 54.49 53.202 55.497 52.642 56.707 z M 64.038 53.184 h -4.645 v -2 h 4.645 V 53.184 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 21.094 27.868 C 9.444 27.868 0 37.311 0 48.961 c 0 5.201 1.891 9.954 5.011 13.632 l 16.082 18.941 l 16.082 -18.941 c 3.12 -3.678 5.011 -8.431 5.011 -13.632 C 42.187 37.311 32.743 27.868 21.094 27.868 z M 21.094 56.91 c -4.791 0 -8.675 -3.884 -8.675 -8.675 c 0 -4.791 3.884 -8.675 8.675 -8.675 s 8.675 3.884 8.675 8.675 C 29.768 53.026 25.885 56.91 21.094 56.91 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 73.577 11.624 c -9.015 0 -16.323 7.308 -16.323 16.323 c 0 4.025 1.463 7.703 3.878 10.549 l 12.445 14.657 l 12.445 -14.657 c 2.415 -2.846 3.878 -6.524 3.878 -10.549 C 89.9 18.932 82.592 11.624 73.577 11.624 z M 73.577 34.098 c -3.707 0 -6.713 -3.006 -6.713 -6.713 c 0 -3.707 3.005 -6.713 6.713 -6.713 c 3.707 0 6.713 3.006 6.713 6.713 C 80.29 31.093 77.285 34.098 73.577 34.098 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <h5 class="pt-2 md:pt-4 text-sm md:text-md font-bold">Независимость от местоположения</h5>

            </div>
            <div
                class="flex flex-col items-center gap-2 py-6 md:py-8 px-4 md:px-6 rounded-xl bg-purple text-white text-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    class="w-10 md:w-12 h-10 md:h-12 opacity-40" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 45 0 C 20.147 0 0 20.147 0 45 c 0 24.853 20.147 45 45 45 s 45 -20.147 45 -45 C 90 20.147 69.853 0 45 0 z M 45 83.5 C 23.737 83.5 6.5 66.263 6.5 45 C 6.5 23.737 23.737 6.5 45 6.5 S 83.5 23.737 83.5 45 C 83.5 66.263 66.263 83.5 45 83.5 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 49.731 41.74 h -9.462 c -0.959 0 -1.769 -0.81 -1.769 -1.769 V 32.63 c 0 -0.959 0.81 -1.769 1.769 -1.769 h 9.462 c 0.959 0 1.769 0.81 1.769 1.769 h 6 c 0 -4.284 -3.485 -7.769 -7.769 -7.769 H 48 v -5.502 h -6 v 5.502 h -1.731 c -4.284 0 -7.769 3.485 -7.769 7.769 v 7.341 c 0 4.284 3.485 7.769 7.769 7.769 v 0.001 h 9.462 c 0.959 0 1.769 0.81 1.769 1.769 v 7.341 c 0 0.959 -0.81 1.77 -1.769 1.77 h -9.462 c -0.959 0 -1.769 -0.811 -1.769 -1.77 h -6 c 0 4.284 3.485 7.77 7.769 7.77 H 42 v 5.502 h 6 v -5.502 h 1.731 c 4.283 0 7.769 -3.485 7.769 -7.77 v -7.341 C 57.5 45.225 54.015 41.74 49.731 41.74 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <h5 class="pt-2 md:pt-4 text-sm md:text-md font-bold">Доступность услуг: Экономия времени и денег</h5>

            </div>
            <div
                class="flex flex-col items-center gap-2 py-6 md:py-8 px-4 md:px-6 rounded-xl bg-purple text-white text-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    class="w-10 md:w-12 h-10 md:h-12 opacity-40" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 45 89.998 c -0.959 0 -1.918 -0.151 -2.831 -0.455 C 22.605 83.045 9.963 67.486 9.963 49.905 V 18.856 c 0 -3.162 2.252 -5.866 5.354 -6.43 l 0 0 c 9.925 -1.806 18.571 -5.528 25.698 -11.063 c 2.348 -1.823 5.623 -1.822 7.968 0 c 7.128 5.535 15.774 9.257 25.699 11.063 c 3.102 0.564 5.354 3.268 5.354 6.43 v 31.049 c 0 17.581 -12.642 33.14 -32.206 39.638 C 46.918 89.847 45.959 89.998 45 89.998 z M 45 6 c -0.108 0 -0.216 0.034 -0.304 0.103 C 36.799 12.236 27.276 16.35 16.392 18.33 c 0 0 0 0 -0.001 0 c -0.248 0.045 -0.428 0.267 -0.428 0.526 v 31.049 c 0 14.951 11.029 28.274 28.098 33.944 c 0.606 0.201 1.273 0.201 1.878 0 c 17.069 -5.669 28.097 -18.993 28.097 -33.944 V 18.856 c 0 -0.26 -0.18 -0.481 -0.427 -0.526 c -10.885 -1.98 -20.408 -6.094 -28.306 -12.227 C 45.215 6.035 45.108 6 45 6 z M 15.855 15.378 h 0.01 H 15.855 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 53.811 40.39 l -1.82 -1.82 c -0.624 -0.624 -1.636 -0.624 -2.261 0 l -6.242 6.242 l -3.218 -3.218 c -0.624 -0.624 -1.636 -0.624 -2.261 0 l -1.82 1.82 c -0.624 0.624 -0.624 1.636 0 2.261 l 6.168 6.168 c 0.624 0.624 1.636 0.624 2.261 0 l 9.193 -9.193 C 54.435 42.027 54.435 41.014 53.811 40.39 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 45 66.613 c -12.444 0 -22.568 -10.124 -22.568 -22.568 c 0 -12.444 10.124 -22.568 22.568 -22.568 s 22.568 10.124 22.568 22.568 C 67.568 56.489 57.444 66.613 45 66.613 z M 45 27.477 c -9.136 0 -16.568 7.433 -16.568 16.568 c 0 9.135 7.433 16.568 16.568 16.568 s 16.568 -7.433 16.568 -16.568 C 61.568 34.91 54.136 27.477 45 27.477 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <h5 class="pt-2 md:pt-4 text-sm md:text-md font-bold">Анонимность и конфиденциальность</h5>

            </div>
        </div>
    </section>
@endsection
