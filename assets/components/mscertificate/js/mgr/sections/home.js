msCertificate.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'msc-panel-home',
            renderTo: 'msc-panel-home-div'
        }]
    });
    msCertificate.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msCertificate.page.Home, MODx.Component);
Ext.reg('msc-page-home', msCertificate.page.Home);