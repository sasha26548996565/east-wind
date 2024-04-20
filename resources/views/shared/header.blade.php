<header class="header pt-6 xl:pt-12">
    <div class="container">
        <div class="header-inner flex items-center justify-between lg:justify-start">
            <div class="header-logo shrink-0">
                <a href="{{ route('home') }}" rel="home">
                    <img src="{{ Vite::asset('/resources/images/logo.png') }}" style="border-radius: 100%;"
                        class="w-[120px] xs:w-[50px] md:w-[50px] h-[120px] xs:h-[50px] md:h-[50px]" alt="East wind">
                </a>
            </div><!-- /.header-logo -->
            <div class="header-menu grow hidden lg:flex items-center ml-8 mr-8 gap-8">
                <form class="hidden lg:flex gap-3">
                    <input type="search"
                        class="w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition"
                        placeholder="Поиск по никнейму..." required>
                    <button type="submit" class="shrink-0 w-12 !h-12 !px-0 btn btn-pink">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 52 52">
                            <path
                                d="M50.339 47.364 37.963 34.492a20.927 20.927 0 0 0 4.925-13.497C42.888 9.419 33.47 0 21.893 0 10.317 0 .898 9.419.898 20.995S10.317 41.99 21.893 41.99a20.77 20.77 0 0 0 12.029-3.8l12.47 12.97c.521.542 1.222.84 1.973.84.711 0 1.386-.271 1.898-.764a2.742 2.742 0 0 0 .076-3.872ZM21.893 5.477c8.557 0 15.518 6.961 15.518 15.518s-6.96 15.518-15.518 15.518c-8.556 0-15.518-6.961-15.518-15.518S13.337 5.477 21.893 5.477Z" />
                        </svg>
                    </button>
                </form>
                <nav class="hidden 2xl:flex gap-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-pink font-bold">Главная</a>
                    <a href="{{ route('bot.index') }}" class="text-white hover:text-pink font-bold">Бот</a>
                    <a href="{{ route('chat.index') }}" class="text-white hover:text-pink font-bold">Чат</a>
                </nav>
            </div><!-- /.header-menu -->
            <div class="header-actions flex items-center gap-3 md:gap-5">
                @guest
                <a href="{{ route('login') }}" class="profile hidden xs:flex items-center">
                    <svg class="profile-icon w-8 h-8 text-purple" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><defs/><path d="M26.749 24.93A13.99 13.99 0 1 0 2 16a13.899 13.899 0 0 0 3.251 8.93l-.02.017c.07.084.15.156.222.239c.09.103.187.2.28.3c.28.304.568.596.87.87c.092.084.187.162.28.242c.32.276.649.538.99.782c.044.03.084.069.128.1v-.012a13.901 13.901 0 0 0 16 0v.012c.044-.031.083-.07.128-.1c.34-.245.67-.506.99-.782c.093-.08.188-.159.28-.242c.302-.275.59-.566.87-.87c.093-.1.189-.197.28-.3c.071-.083.152-.155.222-.24zM16 8a4.5 4.5 0 1 1-4.5 4.5A4.5 4.5 0 0 1 16 8zM8.007 24.93A4.996 4.996 0 0 1 13 20h6a4.996 4.996 0 0 1 4.993 4.93a11.94 11.94 0 0 1-15.986 0z" fill="currentColor"/></svg>
                    <span class="profile-text relative ml-2 text-white text-xxs md:text-xs font-bold">Войти</span>
                </a>
                @else
                <div x-data="{ dropdownProfile: false }" class="profile relative">
                    <button @click="dropdownProfile = ! dropdownProfile"
                        class="flex items-center text-white hover:text-pink transition">
                        <span class="sr-only">Профиль</span>
                        <img src="{{ auth()->user()->avatar }}" class="shrink-0 w-7 md:w-9 h-7 md:h-9 rounded-full"
                            alt="{{ auth()->user()->name }}">
                        <span class="hidden md:block ml-2 font-medium">{{ auth()->user()->name }}</span>
                        <svg class="shrink-0 w-3 h-3 ml-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 30 16">
                            <path fill-rule="evenodd"
                                d="M27.536.72a2 2 0 0 1-.256 2.816l-12 10a2 2 0 0 1-2.56 0l-12-10A2 2 0 1 1 3.28.464L14 9.397 24.72.464a2 2 0 0 1 2.816.256Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="dropdownProfile" @click.away="dropdownProfile = false"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-150"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="absolute z-50 top-0 -right-20 xs:-right-8 sm:right-0 w-[280px] sm:w-[300px] mt-14 p-4 rounded-lg shadow-xl bg-card">
                        <h5 class="text-body text-xs">Мой профиль</h5>
                        <div class="flex items-center mt-3">
                            <img src="{{ auth()->user()->avatar }}" class="w-11 h-11 rounded-full" alt="{{ auth()->user()->name }}">
                            <span class="ml-3 text-xs md:text-sm font-bold">{{ auth()->user()->name }}</span>
                        </div>
                        <div class="mt-4">
                            <ul class="space-y-2">
                                <li><a href="edit-profile.html"
                                        class="text-body hover:text-white text-xs font-medium">Редактировать
                                        профиль</a></li>
                            </ul>
                        </div>
                        <div class="mt-6">
                            <form action="{{ route('logout') }}" method="POST" class="inline-flex items-center text-body hover:text-pink">
                                @csrf
                                <svg class="shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="m19.026 7.643-3.233-3.232a.833.833 0 0 0-1.178 1.178l3.232 3.233c.097.098.18.207.25.325-.012 0-.022-.007-.035-.007l-13.07.027a.833.833 0 1 0 0 1.666l13.066-.026c.023 0 .042-.012.064-.014a1.621 1.621 0 0 1-.278.385l-3.232 3.233a.833.833 0 1 0 1.178 1.178l3.233-3.232a3.333 3.333 0 0 0 0-4.714h.003Z" />
                                    <path
                                        d="M5.835 18.333H4.17a2.5 2.5 0 0 1-2.5-2.5V4.167a2.5 2.5 0 0 1 2.5-2.5h1.666a.833.833 0 1 0 0-1.667H4.17A4.172 4.172 0 0 0 .002 4.167v11.666A4.172 4.172 0 0 0 4.169 20h1.666a.833.833 0 1 0 0-1.667Z" />
                                </svg>
                                <button type="submit" class="ml-2 font-medium">Выйти</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
                <a href="cart.html" class="flex items-center gap-3 text-pink hover:text-white">
                    <div class="hidden sm:flex flex-col gap-2">
                        <span class="text-body text-xxs leading-none">0 шт.</span>
                        <span class="text-white text-xxs 2xl:text-xs font-bold !leading-none">Новые сообщения</span>
                    </div>
                </a>
                <button id="burgerMenu" class="flex 2xl:hidden text-white hover:text-pink transition">
                    <span class="sr-only">Меню</span>
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div><!-- /.header-actions -->
        </div><!-- /.header-inner -->
    </div><!-- /.container -->
</header>

<div id="mobileMenu" class="hidden bg-white fixed inset-0 z-[9999]">
	<div class="container">
		<div class="mmenu-heading flex items-center pt-6 xl:pt-12">
			<div class="shrink-0 grow">
				<a href="{{ route('home') }}" rel="home">
					<img src="{{ Vite::asset('/resources/images/logo.png') }}" style="border-radius: 100%;"
                        class="w-[120px] xs:w-[50px] md:w-[50px] h-[120px] xs:h-[50px] md:h-[50px]" alt="East wind">
				</a>
			</div>
			<div class="shrink-0 flex items-center">
				<button id="closeMobileMenu" class="text-dark hover:text-purple transition">
					<span class="sr-only">Закрыть меню</span>
					<svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
		</div><!-- /.mmenu-heading -->
		<div class="mmenu-inner pt-10">
            @guest
			<!-- <a href="{{ route('login') }}" class="profile flex items-center mr-12">
				<svg class="profile-icon w-8 h-8 text-purple" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><defs/><path d="M26.749 24.93A13.99 13.99 0 1 0 2 16a13.899 13.899 0 0 0 3.251 8.93l-.02.017c.07.084.15.156.222.239c.09.103.187.2.28.3c.28.304.568.596.87.87c.092.084.187.162.28.242c.32.276.649.538.99.782c.044.03.084.069.128.1v-.012a13.901 13.901 0 0 0 16 0v.012c.044-.031.083-.07.128-.1c.34-.245.67-.506.99-.782c.093-.08.188-.159.28-.242c.302-.275.59-.566.87-.87c.093-.1.189-.197.28-.3c.071-.083.152-.155.222-.24zM16 8a4.5 4.5 0 1 1-4.5 4.5A4.5 4.5 0 0 1 16 8zM8.007 24.93A4.996 4.996 0 0 1 13 20h6a4.996 4.996 0 0 1 4.993 4.93a11.94 11.94 0 0 1-15.986 0z" fill="currentColor"/></svg>
				<span class="profile-text relative ml-2 text-dark font-bold">Войти</span>
			</a> -->
            @else
			<div class="flex items-center">
				<img src="{{ auth()->user()->avatar }}" class="w-14 h-14 rounded-full" alt="{{ auth()->user()->name }}">
				<div class="flex flex-col items-start ml-4">
					<span class="text-dark text-xs md:text-sm font-bold">{{ auth()->user()->name }}</span>
					<a href="#" class="inline-flex items-center text-dark hover:text-pink">
						<svg class="shrink-0 w-[14px] h-[14px]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path d="m19.026 7.643-3.233-3.232a.833.833 0 0 0-1.178 1.178l3.232 3.233c.097.098.18.207.25.325-.012 0-.022-.007-.035-.007l-13.07.027a.833.833 0 1 0 0 1.666l13.066-.026c.023 0 .042-.012.064-.014a1.621 1.621 0 0 1-.278.385l-3.232 3.233a.833.833 0 1 0 1.178 1.178l3.233-3.232a3.333 3.333 0 0 0 0-4.714h.003Z"/>
							<path d="M5.835 18.333H4.17a2.5 2.5 0 0 1-2.5-2.5V4.167a2.5 2.5 0 0 1 2.5-2.5h1.666a.833.833 0 1 0 0-1.667H4.17A4.172 4.172 0 0 0 .002 4.167v11.666A4.172 4.172 0 0 0 4.169 20h1.666a.833.833 0 1 0 0-1.667Z"/>
						</svg>
						<form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button type="submit" class="ml-[6x] font-medium">Выйти</buttons>
                        </form>
					</a>
				</div>
			</div>
            @endguest
			<nav class="flex flex-col mt-8">
				<a href="{{ route('home') }}" class="self-start py-1 text-dark hover:text-pink text-md font-bold">Главная</a>
				<a href="{{ route('bot.index') }}" class="self-start py-1 text-dark hover:text-pink text-md font-bold">Бот</a>
				<a href="{{ route('chat.index') }}" class="self-start py-1 text-dark hover:text-pink text-md font-bold">Чат</a>
			</nav>
			<div class="flex flex-wrap items-center space-x-6 mt-8">
				<a href="#" class="inline-flex items-center text-darkblue hover:text-purple" target="_blank" rel="nofollow noopener">
					<img class="h-5 lg:h-6" src="{{ Vite::asset('/resources/images/icons/youtube.svg') }}" alt="YouTube">
					<span class="ml-2 lg:ml-3 text-xxs font-semibold">YouTube</span>
				</a>
				<a href="#" class="inline-flex items-center text-darkblue hover:text-purple" target="_blank" rel="nofollow noopener">
					<img class="h-5 lg:h-6" src="{{ Vite::asset('/resources/images/icons/telegram.svg') }}" alt="Telegram">
					<span class="ml-2 lg:ml-3 text-xxs font-semibold">Telegram</span>
				</a>
			</div>
		</div><!-- /.mmenu-inner -->
	</div><!-- /.container -->
</div>