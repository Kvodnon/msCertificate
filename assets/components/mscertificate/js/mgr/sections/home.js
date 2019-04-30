msCertificate.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'mscertificate-panel-home',
            renderTo: 'mscertificate-panel-home-div'
        }]
    });
    msCertificate.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msCertificate.page.Home, MODx.Component);
Ext.reg('mscertificate-page-home', msCertificate.page.Home);