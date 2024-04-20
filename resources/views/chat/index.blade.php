@extends('layouts.app')

@section('title', 'Чат')

@section('content')
    <!-- component -->
    <div class="flex h-screen antialiased text-gray-800">
        <div class="flex flex-row h-full w-full overflow-x-hidden">

            <div class="flex flex-col flex-auto h-full p-6">
                <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4">
                    <div class="flex flex-col h-full overflow-x-auto mb-4">
                        <div class="flex flex-col h-full">
                            <div class="grid grid-cols-12 gap-y-2">
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-red-800 flex-shrink-0">
                                            E
                                        </div>
                                        <div class="relative ml-3 text-sm text-gray bg-white py-2 px-4 shadow rounded-xl">
                                            <div>Я чувствую себя очень подавленным последнее время.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-yellow-500 flex-shrink-0">
                                            M
                                        </div>
                                        <div class="relative ml-3 text-gray  text-sm bg-white py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Мне кажется, что я ничего не достиг в жизни.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                    <div class="flex items-center justify-start flex-row-reverse">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div
                                            class="relative mr-3 text-gray  text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                            <div>Понимаю ваше состояние. Важно найти поддержку и способы справиться с этим</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                    <div class="flex items-center justify-start flex-row-reverse">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div
                                            class="relative mr-3 text-gray text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Лично мне помог этот проект!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">    
										<div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-green-500 flex-shrink-0">
                                            Б
                                        </div>
                                        <div class="relative ml-3 text-gray text-sm bg-white py-2 px-4 shadow rounded-xl">
                                            <div>Мне тоже!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                    <div class="flex items-center justify-start flex-row-reverse">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                            A
                                        </div>
                                        <div
                                            class="relative mr-3 text-gray text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Полагаю, ИИ это все таки хорошая вещь в психологии
                                            </div>
                                            <div class="absolute text-xs bottom-0 right-0 -mb-5 mr-2 text-gray-500">
                                                Seen
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                    <div class="flex flex-row items-center">
                                        <div
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-fuchsia-500 flex-shrink-0">
                                            И
                                        </div>
                                        <div class="relative ml-3 text-gray text-sm bg-white py-2 px-4 shadow rounded-xl">
                                            <div>
                                                Абсолютно согласен
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow ml-4">
                                <div class="relative w-full">
                                    <input type="text" placeholder="Напишите сообщение"
                                        class="flex w-full text-gray border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />
                                    <button
                                        class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
