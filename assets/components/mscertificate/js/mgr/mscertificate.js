var msCertificate = function (config) {
    config = config || {};
    msCertificate.superclass.constructor.call(this, config);
};
Ext.extend(msCertificate, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('mscertificate', msCertificate);

msCertificate = new msCertificate();