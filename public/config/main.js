function getEnvironment(){
    const environments = [
        {
            name: "http://127.0.0.1:8000/",
            hosts : {
                web : 'http://127.0.0.1:8000/',
                api : 'http://127.0.0.1:8000/api/',
            }
        }, {
            name: "http://drajessycamartins.madgic.com.br/",
            hosts : {
                web : 'http://drajessycamartins.madgic.com.br/',
                api : 'http://drajessycamartins.madgic.com.br/api/',
            }
        },

    ];

    return environments.filter(environment=>{
        return document.URL.includes(environment.name)
    })[0];
}
const VERSION   = 'v1.0';
const HOST = getEnvironment();
const PATH_IMAGE = HOST.name+'storage/profiles/';

const isIos = () => {
    const userAgent = window.navigator.userAgent.toLowerCase();
    return /iphone|ipad|ipod/.test( userAgent );
}
// Detects if device is in standalone mode
const isInStandaloneMode = () => ('standalone' in window.navigator) && (window.navigator.standalone);

// Checks if should display install popup notification:
if (isIos() && !isInStandaloneMode()) {
    this.setState({ showInstallMessage: true });
}

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
        .then(function () {
            console.log('service worker registered');
        })
        .catch(function () {
            console.warn('service worker failed');
        });
}
