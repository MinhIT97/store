/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';




    config.filebrowserBrowseUrl = 'http://store.com/ckfinder/ckfinder.html';

    config.filebrowserImageBrowseUrl = 'http://store.com/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = 'http://store.com/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = 'http://store.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = 'http://store.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = 'http://store.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
