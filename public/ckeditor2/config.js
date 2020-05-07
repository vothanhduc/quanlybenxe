/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // http://docs.ckeditor.com/#!/api/CKEDITOR.config

    // The toolbar groups arrangement, optimized for a single toolbar row.

    config.extraPlugins = 'youtube';

    config.toolbar_Basic =
        [
            ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'About', 'TextColor', 'BGColor', 'Table', 'Outdent', 'Indent']
        ];

    config.filebrowserBrowseUrl = "/public/ckfinder2/ckfinder.html";
    config.filebrowserImageBrowseUrl = '/public/ckfinder2/ckfinder.html?Type=Images';
    config.filebrowserFlashBrowseUrl = '/public/ckfinder2/ckfinder.html?Type=Flash';
    config.filebrowserUploadUrl = '/public/ckfinder2/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl ='/public/ckfinder2/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = '/public/ckfinder2/core/connector/php/connector.php?command=QuickUpload&type=Flash';
    // CKFinder.setupCKEditor(null, '/doanhnghiep/lib/ckfinder/');

};
