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
                            <div class="grid grid-cols-12 gap-y-2 messages">
                                @include('chat.receive', ['message' => 'hi'])
                            </div>
                            <div class="flex-grow ml-4">
                                <form id="chatForm" class="hidden lg:flex gap-3">
                                    <input type="text" id="message"
                                        class="w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition"
                                        placeholder="Напишите сообщение..." required>
                                    <button type="submit" class="shrink-0 w-12 !h-12 !px-0 btn btn-pink">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256"
                                            height="256" viewBox="0 0 256 256" xml:space="preserve">

                                            <defs>
                                            </defs>
                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.4 2.4)">
                                                <path
                                                    d="M 89.999 3.075 C 90 3.02 90 2.967 89.999 2.912 c -0.004 -0.134 -0.017 -0.266 -0.038 -0.398 c -0.007 -0.041 -0.009 -0.081 -0.018 -0.122 c -0.034 -0.165 -0.082 -0.327 -0.144 -0.484 c -0.018 -0.046 -0.041 -0.089 -0.061 -0.134 c -0.053 -0.119 -0.113 -0.234 -0.182 -0.346 C 89.528 1.382 89.5 1.336 89.469 1.29 c -0.102 -0.147 -0.212 -0.288 -0.341 -0.417 c -0.13 -0.13 -0.273 -0.241 -0.421 -0.344 c -0.042 -0.029 -0.085 -0.056 -0.129 -0.082 c -0.118 -0.073 -0.239 -0.136 -0.364 -0.191 c -0.039 -0.017 -0.076 -0.037 -0.116 -0.053 c -0.161 -0.063 -0.327 -0.113 -0.497 -0.147 c -0.031 -0.006 -0.063 -0.008 -0.094 -0.014 c -0.142 -0.024 -0.285 -0.038 -0.429 -0.041 C 87.03 0 86.983 0 86.936 0.001 c -0.141 0.003 -0.282 0.017 -0.423 0.041 c -0.035 0.006 -0.069 0.008 -0.104 0.015 c -0.154 0.031 -0.306 0.073 -0.456 0.129 L 1.946 31.709 c -1.124 0.422 -1.888 1.473 -1.943 2.673 c -0.054 1.199 0.612 2.316 1.693 2.838 l 34.455 16.628 l 16.627 34.455 C 53.281 89.344 54.334 90 55.481 90 c 0.046 0 0.091 -0.001 0.137 -0.003 c 1.199 -0.055 2.251 -0.819 2.673 -1.943 L 89.815 4.048 c 0.056 -0.149 0.097 -0.3 0.128 -0.453 c 0.008 -0.041 0.011 -0.081 0.017 -0.122 C 89.982 3.341 89.995 3.208 89.999 3.075 z M 75.086 10.672 L 37.785 47.973 L 10.619 34.864 L 75.086 10.672 z M 55.136 79.381 L 42.027 52.216 l 37.302 -37.302 L 55.136 79.381 z"
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;"
                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script>
        // Initialize Pusher
        const pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
            cluster: 'eu'
        });
        const channel = pusher.subscribe('public');

        // Bind to the chat event
        channel.bind('chat', function(data) {
            // Create a new form data object for the POST request
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('message', data.message);

            // Send the POST request
            fetch("/chat/receive", {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(res => {
                    const messageContainer = document.querySelector(".messages");
                    const messageElement = document.createElement('div');
                    messageElement.innerHTML = res;
                    messageContainer.appendChild(messageElement);
                    window.scrollTo(0, document.body.scrollHeight);
                });
        });

        // Handle the form submission
        document.querySelector("#chatForm").addEventListener('submit', function(event) {
            event.preventDefault();

            // Get the socket ID
            const socketId = pusher.connection.socket_id;

            // Create a new form data object for the AJAX request
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('message', document.querySelector("#chatForm #message").value);

            // Send the AJAX request
            fetch("/chat/broadcast", {
                    method: 'POST',
                    headers: {
                        'X-Socket-Id': socketId
                    },
                    body: formData
                })
                .then(response => response.text())
                .then(res => {
                    const messageContainer = document.querySelector(".messages");
                    const messageElement = document.createElement('div');
                    messageElement.innerHTML = res;
                    messageContainer.appendChild(messageElement);
                    document.querySelector("#chatForm #message").value = '';
                    window.scrollTo(0, document.body.scrollHeight);
                });
        });
    </script>
@endsection
