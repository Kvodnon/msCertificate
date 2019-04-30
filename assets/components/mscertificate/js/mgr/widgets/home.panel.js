msCertificate.panel.Home = function (config) {
    config = config || {};
    
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'mscertificate-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('msc') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('msc_items'),
                layout: 'anchor',
                items: [{
                    html: _('msc_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'msc-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    msCertificate.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(msCertificate.panel.Home, MODx.Panel);
Ext.reg('msc-panel-home', msCertificate.panel.Home);
