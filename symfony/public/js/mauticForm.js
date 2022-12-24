/** This section is only needed once per page if manually copying **/
if (typeof MauticSDKLoaded == 'undefined') {
    var MauticSDKLoaded = true;
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://mautic.net-et.sur.com.yjbt3669.odns.fr/media/js/mautic-form.js?v8bc1ce3c';
    script.onload = function() {
        MauticSDK.onLoad();
    };
    head.appendChild(script);
    var MauticDomain = 'http://mautic.net-et.sur.com.yjbt3669.odns.fr';
    var MauticLang = {
        'submittingMessage': "Merci de patienter..."
    }
} else
if (typeof MauticSDK != 'undefined') {
    MauticSDK.onLoad();
}
console.log('mauticForm.js');