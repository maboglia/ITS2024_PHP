document.addEventListener('DOMContentLoaded', function () {
   
    const consentElement = document.getElementById('cookie-consent');
    const acceptButton = document.getElementById('accept-cookies');

    //verifico se user ha accettato i cookie
    if (!getCookie('cookie-consent')){
        consentElement.style.display = 'block';
    } 

    acceptButton.addEventListener('click', function () {
        setCookie('cookie-consent', 'accepted', 30);
        consentElement.style.display = 'none';
    })

    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + '=' + value + ';' + expires + ";path=/";
    }

    function getCookie(name) {
        const nameEQ = name + '=';
        const ca = document.cookie.split(';');
        console.log(ca);
        for (let i = 0; i < ca.length; i++) {
            let element = ca[i];
            while (element.charAt(0) === ' ') {
                element = element.substring(1)
                console.log('element',element);
                if (element.indexOf(nameEQ) === 0) 
                    return element.substring(nameEQ.length, element.length);
            }
        } 
        return null;
    }



});