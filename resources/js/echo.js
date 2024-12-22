import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

window.Echo.channel('mainChannel')
    .listen('SetAlert', (e) => {
        console.log(e)
        const alert = document.getElementById("alert-main")
        alert.classList.replace("hidden", "block")
        const mainText = document.getElementById("main-text")
        mainText.innerText = e["message"];
        const authorLabel = document.getElementById("author-label")
        authorLabel.innerHTML = "<p>By, "+ e["name"] +"</p>"
    })
