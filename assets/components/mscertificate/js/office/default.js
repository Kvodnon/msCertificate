Ext.onReady(function () {
    msCertificate.config.connector_url = OfficeConfig.actionUrl;

    var grid = new msCertificate.panel.Home();
    grid.render('office-mscertificate-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});