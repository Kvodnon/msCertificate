msCertificate.window.CreateCertificate = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msc-certificate-window-create';
    }
    Ext.applyIf(config, {
        title: _('msc_certificate_create'),
        width: 550,
        autoHeight: true,
        url: msCertificate.config.connector_url,
        action: 'mgr/certificates/create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msCertificate.window.CreateCertificate.superclass.constructor.call(this, config);
};
Ext.extend(msCertificate.window.CreateCertificate, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'textfield',
            fieldLabel: _('msc_certificate_name'),
            name: 'name',
            id: config.id + '-name',
            anchor: '99%',
            allowBlank: false,
        }, {
            xtype: 'textarea',
            fieldLabel: _('msc_certificate_description'),
            name: 'description',
            id: config.id + '-description',
            height: 150,
            anchor: '99%'
        }, {
            xtype: 'xcheckbox',
            boxLabel: _('msc_certificate_active'),
            name: 'active',
            id: config.id + '-active',
            checked: true,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msc-certificate-window-create', msCertificate.window.CreateCertificate);


msCertificate.window.UpdateCertificate = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msc-certificate-window-update';
    }
    Ext.applyIf(config, {
        title: _('msc_certificate_update'),
        width: 550,
        autoHeight: true,
        url: msCertificate.config.connector_url,
        action: 'mgr/certificates/update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msCertificate.window.UpdateCertificate.superclass.constructor.call(this, config);
};
Ext.extend(msCertificate.window.UpdateCertificate, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('msc_certificate_name'),
            name: 'name',
            id: config.id + '-name',
            anchor: '99%',
            allowBlank: false,
        }, {
            xtype: 'textarea',
            fieldLabel: _('msc_certificate_description'),
            name: 'description',
            id: config.id + '-description',
            anchor: '99%',
            height: 150,
        }, {
            xtype: 'xcheckbox',
            boxLabel: _('msc_certificate_active'),
            name: 'active',
            id: config.id + '-active',
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msc-certificate-window-update', msCertificate.window.UpdateCertificate);