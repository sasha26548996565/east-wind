@extends('layouts.app')

@section('title', 'Бот')

@section('content')
	<div class="flex justify-center">
		<strong>Выберете параметры голосовой прослушки</strong>
	</div>

	<div style="margin-top: 26px; margin-bottom: 26px;">
		<hr>
	</div>

	<div class="flex justify-between">
		<div class="gap-2" style="margin-right: 26px;">
			<label for="filter-item-1" class="cursor-pointer text-body text-xxs font-medium">Выберете голос озвучки</label>
			<select id="filter-item-1" class="form-select w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition">
				<option value="Александр" class="text-dark">Александр</option>
				<option value="Максим" class="text-dark">Максим</option>
				<option value="Елена" class="text-dark">Елена</option>
			</select>
		</div>
		<div class="gap-2" style="margin-right: 26px;">
			<label for="filter-item-1" class="cursor-pointer text-body text-xxs font-medium">Выберете скорость озвучки</label>
			<select id="filter-item-1" class="form-select w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition">
				<option value="0.25x" class="text-dark">0.25x</option>
				<option value="0.5x" class="text-dark">0.5x</option>
				<option value="0.75x" class="text-dark">0.75x</option>
				<option value="Обычная" class="text-dark">Обычная</option>
				<option value="1.25x" class="text-dark">1.25x</option>
				<option value="1.5x" class="text-dark">1.5x</option>
				<option value="2x" class="text-dark">2x</option>
			</select>
		</div>
		<div class="gap-2">
			<label for="filter-item-1" class="cursor-pointer text-body text-xxs font-medium">Тональность голоса</label>
			<select id="filter-item-1" class="form-select w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition">
				<option value="very_low" class="text-dark">Очень низкая тональность: менее 85 Гц</option>
				<option value="low" class="text-dark">Низкая тональность: 85 Гц - 165 Гц</option>
				<option value="middle" class="text-dark">Средняя тональность: 165 Гц - 255 Гц</option>
				<option value="high" class="text-dark">Высокая тональность: 255 Гц - 395 Гц</option>
				<option value="very_high" class="text-dark">Очень высокая тональность: более 395 Гц</option>
			</select>
		</div>
	</div>

	<div class="flex flex-col items-center justify-center bg-gray-100 text-gray-800" style="min-height: 440px; margin-top: 26px;">
		<div class="flex flex-col flex-grow w-full max-w-xl bg-white shadow-xl rounded-lg overflow-hidden">
			<div class="flex flex-col flex-grow h-0 p-4 overflow-auto">
				<div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
					<div>
						<div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
							<p class="text-sm">Мне кажется, что я не справляюсь с работой..</p>
						</div>
						<span class="text-xs text-gray leading-none">2 минуты назад</span>
					</div>
					<div
						class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
						A
					</div>
				</div>
				<div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
					<div>
						<div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
							<p class="text-sm">Я боюсь, что мои ошибки станут явными для всех.</p>
						</div>
						<span class="text-xs text-gray leading-none">3 минуты назад</span>
					</div>
					<div
						class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
						A
					</div>
				</div>
				<div class="flex w-full mt-2 space-x-3 max-w-xs">
					<img src="{{ Vite::asset('resources/images/logo.png') }}" class="flex items-center justify-center h-10 w-10 rounded-full flex-shrink-0">

					<div>
						<div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
							<p class="text-sm text-gray">Понимаю ваше чувство неуверенности. Давайте разберемся вместе, какие именно аспекты работы вызывают у вас такие сильные эмоции.</p>
						</div>
						<span class="text-xs text-gray leading-none">3 минуты назад</span> <br><br>
						<a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
							>Скачать аудио ответ</a>
					</div>
				</div>
			</div>
			
			<div class="bg-gray-300 p-4">
				<input class="flex items-center h-10 text-gray w-full rounded px-3 text-sm" type="text" placeholder="Ваше сообщение…">
			</div>
		</div>
	</div>
@endsection
