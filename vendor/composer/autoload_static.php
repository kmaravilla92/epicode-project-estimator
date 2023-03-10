<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6e43591b08bb5184a57331eb1249400
{
    public static $files = array (
        '73e92335c7f32c003a3a865afcb0bb63' => __DIR__ . '/../..' . '/includes/constants.php',
        'c94549a009ef82190b8eabe5270c6ccb' => __DIR__ . '/../..' . '/includes/helpers/icon-functions.php',
        '75bd4b3b7eed2dd3aad01078fa74055c' => __DIR__ . '/../..' . '/includes/helpers/view-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Svg\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src',
            ),
            'Sabberworm\\CSS' => 
            array (
                0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/includes',
    );

    public static $classMap = array (
        'ACF' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/acf.php',
        'ACF_Admin_Tool' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/tools/class-acf-admin-tool.php',
        'ACF_Admin_Tool_Export' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/tools/class-acf-admin-tool-export.php',
        'ACF_Admin_Tool_Import' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/tools/class-acf-admin-tool-import.php',
        'ACF_Admin_Upgrade' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/admin-upgrade.php',
        'ACF_Ajax' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/ajax/class-acf-ajax.php',
        'ACF_Ajax_Check_Screen' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/ajax/class-acf-ajax-check-screen.php',
        'ACF_Ajax_Query' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/ajax/class-acf-ajax-query.php',
        'ACF_Ajax_Query_Terms' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/ajax/class-acf-ajax-query-terms.php',
        'ACF_Ajax_Upgrade' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/ajax/class-acf-ajax-upgrade.php',
        'ACF_Ajax_User_Setting' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/ajax/class-acf-ajax-user-setting.php',
        'ACF_Assets' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/assets.php',
        'ACF_Compatibility' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/compatibility.php',
        'ACF_Form' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/form.php',
        'ACF_Form_Gutenberg' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-gutenberg.php',
        'ACF_Form_Post' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-post.php',
        'ACF_Form_User' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-user.php',
        'ACF_Media' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/media.php',
        'ACF_Taxonomy_Field_Walker' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/walkers/class-acf-walker-taxonomy-field.php',
        'ACF_Updates' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/updates.php',
        'ACF_WPML_Compatibility' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/wpml.php',
        'ACF_Walker_Nav_Menu_Edit' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/walkers/class-acf-walker-nav-menu-edit.php',
        'Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'Dompdf\\Adapter\\CPDF' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/CPDF.php',
        'Dompdf\\Adapter\\GD' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/GD.php',
        'Dompdf\\Adapter\\PDFLib' => __DIR__ . '/..' . '/dompdf/dompdf/src/Adapter/PDFLib.php',
        'Dompdf\\Autoloader' => __DIR__ . '/..' . '/dompdf/dompdf/src/Autoloader.php',
        'Dompdf\\Canvas' => __DIR__ . '/..' . '/dompdf/dompdf/src/Canvas.php',
        'Dompdf\\CanvasFactory' => __DIR__ . '/..' . '/dompdf/dompdf/src/CanvasFactory.php',
        'Dompdf\\Cellmap' => __DIR__ . '/..' . '/dompdf/dompdf/src/Cellmap.php',
        'Dompdf\\Css\\AttributeTranslator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/AttributeTranslator.php',
        'Dompdf\\Css\\Color' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Color.php',
        'Dompdf\\Css\\Style' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Style.php',
        'Dompdf\\Css\\Stylesheet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Css/Stylesheet.php',
        'Dompdf\\Dompdf' => __DIR__ . '/..' . '/dompdf/dompdf/src/Dompdf.php',
        'Dompdf\\Exception' => __DIR__ . '/..' . '/dompdf/dompdf/src/Exception.php',
        'Dompdf\\Exception\\ImageException' => __DIR__ . '/..' . '/dompdf/dompdf/src/Exception/ImageException.php',
        'Dompdf\\FontMetrics' => __DIR__ . '/..' . '/dompdf/dompdf/src/FontMetrics.php',
        'Dompdf\\Frame' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame.php',
        'Dompdf\\FrameDecorator\\AbstractFrameDecorator' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/AbstractFrameDecorator.php',
        'Dompdf\\FrameDecorator\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Block.php',
        'Dompdf\\FrameDecorator\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Image.php',
        'Dompdf\\FrameDecorator\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Inline.php',
        'Dompdf\\FrameDecorator\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/ListBullet.php',
        'Dompdf\\FrameDecorator\\ListBulletImage' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/ListBulletImage.php',
        'Dompdf\\FrameDecorator\\NullFrameDecorator' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/NullFrameDecorator.php',
        'Dompdf\\FrameDecorator\\Page' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Page.php',
        'Dompdf\\FrameDecorator\\Table' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Table.php',
        'Dompdf\\FrameDecorator\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableCell.php',
        'Dompdf\\FrameDecorator\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableRow.php',
        'Dompdf\\FrameDecorator\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/TableRowGroup.php',
        'Dompdf\\FrameDecorator\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameDecorator/Text.php',
        'Dompdf\\FrameReflower\\AbstractFrameReflower' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/AbstractFrameReflower.php',
        'Dompdf\\FrameReflower\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Block.php',
        'Dompdf\\FrameReflower\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Image.php',
        'Dompdf\\FrameReflower\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Inline.php',
        'Dompdf\\FrameReflower\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/ListBullet.php',
        'Dompdf\\FrameReflower\\NullFrameReflower' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/NullFrameReflower.php',
        'Dompdf\\FrameReflower\\Page' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Page.php',
        'Dompdf\\FrameReflower\\Table' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Table.php',
        'Dompdf\\FrameReflower\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableCell.php',
        'Dompdf\\FrameReflower\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableRow.php',
        'Dompdf\\FrameReflower\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/TableRowGroup.php',
        'Dompdf\\FrameReflower\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/FrameReflower/Text.php',
        'Dompdf\\Frame\\Factory' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/Factory.php',
        'Dompdf\\Frame\\FrameList' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameList.php',
        'Dompdf\\Frame\\FrameListIterator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameListIterator.php',
        'Dompdf\\Frame\\FrameTree' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTree.php',
        'Dompdf\\Frame\\FrameTreeIterator' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTreeIterator.php',
        'Dompdf\\Frame\\FrameTreeList' => __DIR__ . '/..' . '/dompdf/dompdf/src/Frame/FrameTreeList.php',
        'Dompdf\\Helpers' => __DIR__ . '/..' . '/dompdf/dompdf/src/Helpers.php',
        'Dompdf\\Image\\Cache' => __DIR__ . '/..' . '/dompdf/dompdf/src/Image/Cache.php',
        'Dompdf\\JavascriptEmbedder' => __DIR__ . '/..' . '/dompdf/dompdf/src/JavascriptEmbedder.php',
        'Dompdf\\LineBox' => __DIR__ . '/..' . '/dompdf/dompdf/src/LineBox.php',
        'Dompdf\\Options' => __DIR__ . '/..' . '/dompdf/dompdf/src/Options.php',
        'Dompdf\\PhpEvaluator' => __DIR__ . '/..' . '/dompdf/dompdf/src/PhpEvaluator.php',
        'Dompdf\\Positioner\\Absolute' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Absolute.php',
        'Dompdf\\Positioner\\AbstractPositioner' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/AbstractPositioner.php',
        'Dompdf\\Positioner\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Block.php',
        'Dompdf\\Positioner\\Fixed' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Fixed.php',
        'Dompdf\\Positioner\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/Inline.php',
        'Dompdf\\Positioner\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/ListBullet.php',
        'Dompdf\\Positioner\\NullPositioner' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/NullPositioner.php',
        'Dompdf\\Positioner\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/TableCell.php',
        'Dompdf\\Positioner\\TableRow' => __DIR__ . '/..' . '/dompdf/dompdf/src/Positioner/TableRow.php',
        'Dompdf\\Renderer' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer.php',
        'Dompdf\\Renderer\\AbstractRenderer' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/AbstractRenderer.php',
        'Dompdf\\Renderer\\Block' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Block.php',
        'Dompdf\\Renderer\\Image' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Image.php',
        'Dompdf\\Renderer\\Inline' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Inline.php',
        'Dompdf\\Renderer\\ListBullet' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/ListBullet.php',
        'Dompdf\\Renderer\\TableCell' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/TableCell.php',
        'Dompdf\\Renderer\\TableRowGroup' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/TableRowGroup.php',
        'Dompdf\\Renderer\\Text' => __DIR__ . '/..' . '/dompdf/dompdf/src/Renderer/Text.php',
        'EpicodeProjectCalculator\\ACFLoader' => __DIR__ . '/../..' . '/includes/class-acf-loader.php',
        'EpicodeProjectCalculator\\Admin\\AdminColumns' => __DIR__ . '/../..' . '/includes/admin/class-admin-columns.php',
        'EpicodeProjectCalculator\\Admin\\AdminNotice' => __DIR__ . '/../..' . '/includes/admin/class-admin-notice.php',
        'EpicodeProjectCalculator\\Admin\\MenuSetting' => __DIR__ . '/../..' . '/includes/admin/class-menu-setting.php',
        'EpicodeProjectCalculator\\Admin\\MetaBoxes\\PostTypeCalculator' => __DIR__ . '/../..' . '/includes/admin/meta-boxes/class-post-type-calculator.php',
        'EpicodeProjectCalculator\\Admin\\MetaBoxes\\PostTypeSubmission' => __DIR__ . '/../..' . '/includes/admin/meta-boxes/class-post-type-submission.php',
        'EpicodeProjectCalculator\\Admin\\Pages\\Main' => __DIR__ . '/../..' . '/includes/admin/pages/class-main.php',
        'EpicodeProjectCalculator\\FrontSite\\Calculator' => __DIR__ . '/../..' . '/includes/frontsite/class-calculator.php',
        'EpicodeProjectCalculator\\FrontSite\\DownloadQuotation' => __DIR__ . '/../..' . '/includes/frontsite/class-download-quotation.php',
        'EpicodeProjectCalculator\\FrontSite\\FrontendManager' => __DIR__ . '/../..' . '/includes/frontsite/class-frontend-manager.php',
        'EpicodeProjectCalculator\\PostTypesManager' => __DIR__ . '/../..' . '/includes/class-post-types-manager.php',
        'EpicodeProjectCalculator\\ProjectCalculator' => __DIR__ . '/../..' . '/includes/class-epicode-project-calculator.php',
        'EpicodeProjectCalculator\\ShortcodeManager' => __DIR__ . '/../..' . '/includes/class-shortcode-manager.php',
        'FontLib\\AdobeFontMetrics' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/AdobeFontMetrics.php',
        'FontLib\\Autoloader' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Autoloader.php',
        'FontLib\\BinaryStream' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/BinaryStream.php',
        'FontLib\\EOT\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EOT/File.php',
        'FontLib\\EOT\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EOT/Header.php',
        'FontLib\\EncodingMap' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/EncodingMap.php',
        'FontLib\\Exception\\FontNotFoundException' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Exception/FontNotFoundException.php',
        'FontLib\\Font' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Font.php',
        'FontLib\\Glyph\\Outline' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/Outline.php',
        'FontLib\\Glyph\\OutlineComponent' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComponent.php',
        'FontLib\\Glyph\\OutlineComposite' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineComposite.php',
        'FontLib\\Glyph\\OutlineSimple' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Glyph/OutlineSimple.php',
        'FontLib\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Header.php',
        'FontLib\\OpenType\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/OpenType/File.php',
        'FontLib\\OpenType\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/OpenType/TableDirectoryEntry.php',
        'FontLib\\Table\\DirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/DirectoryEntry.php',
        'FontLib\\Table\\Table' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Table.php',
        'FontLib\\Table\\Type\\cmap' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/cmap.php',
        'FontLib\\Table\\Type\\glyf' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/glyf.php',
        'FontLib\\Table\\Type\\head' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/head.php',
        'FontLib\\Table\\Type\\hhea' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/hhea.php',
        'FontLib\\Table\\Type\\hmtx' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/hmtx.php',
        'FontLib\\Table\\Type\\kern' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/kern.php',
        'FontLib\\Table\\Type\\loca' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/loca.php',
        'FontLib\\Table\\Type\\maxp' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/maxp.php',
        'FontLib\\Table\\Type\\name' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/name.php',
        'FontLib\\Table\\Type\\nameRecord' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/nameRecord.php',
        'FontLib\\Table\\Type\\os2' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/os2.php',
        'FontLib\\Table\\Type\\post' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/Table/Type/post.php',
        'FontLib\\TrueType\\Collection' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/Collection.php',
        'FontLib\\TrueType\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/File.php',
        'FontLib\\TrueType\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/Header.php',
        'FontLib\\TrueType\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/TrueType/TableDirectoryEntry.php',
        'FontLib\\WOFF\\File' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/File.php',
        'FontLib\\WOFF\\Header' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/Header.php',
        'FontLib\\WOFF\\TableDirectoryEntry' => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib/WOFF/TableDirectoryEntry.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
        'Sabberworm\\CSS\\CSSList\\AtRuleBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/AtRuleBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/CSSBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/CSSList.php',
        'Sabberworm\\CSS\\CSSList\\Document' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/Document.php',
        'Sabberworm\\CSS\\CSSList\\KeyFrame' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/KeyFrame.php',
        'Sabberworm\\CSS\\Comment\\Comment' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Comment/Comment.php',
        'Sabberworm\\CSS\\Comment\\Commentable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Comment/Commentable.php',
        'Sabberworm\\CSS\\OutputFormat' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/OutputFormat.php',
        'Sabberworm\\CSS\\OutputFormatter' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/OutputFormat.php',
        'Sabberworm\\CSS\\Parser' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parser.php',
        'Sabberworm\\CSS\\Parsing\\OutputException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/OutputException.php',
        'Sabberworm\\CSS\\Parsing\\SourceException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/SourceException.php',
        'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/UnexpectedTokenException.php',
        'Sabberworm\\CSS\\Property\\AtRule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/AtRule.php',
        'Sabberworm\\CSS\\Property\\CSSNamespace' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/CSSNamespace.php',
        'Sabberworm\\CSS\\Property\\Charset' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Charset.php',
        'Sabberworm\\CSS\\Property\\Import' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Import.php',
        'Sabberworm\\CSS\\Property\\Selector' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Selector.php',
        'Sabberworm\\CSS\\Renderable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Renderable.php',
        'Sabberworm\\CSS\\RuleSet\\AtRuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/AtRuleSet.php',
        'Sabberworm\\CSS\\RuleSet\\DeclarationBlock' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/DeclarationBlock.php',
        'Sabberworm\\CSS\\RuleSet\\RuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/RuleSet.php',
        'Sabberworm\\CSS\\Rule\\Rule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Rule/Rule.php',
        'Sabberworm\\CSS\\Settings' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Settings.php',
        'Sabberworm\\CSS\\Value\\CSSFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CSSFunction.php',
        'Sabberworm\\CSS\\Value\\CSSString' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CSSString.php',
        'Sabberworm\\CSS\\Value\\Color' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Color.php',
        'Sabberworm\\CSS\\Value\\PrimitiveValue' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/PrimitiveValue.php',
        'Sabberworm\\CSS\\Value\\RuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/RuleValueList.php',
        'Sabberworm\\CSS\\Value\\Size' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Size.php',
        'Sabberworm\\CSS\\Value\\URL' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/URL.php',
        'Sabberworm\\CSS\\Value\\Value' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Value.php',
        'Sabberworm\\CSS\\Value\\ValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/ValueList.php',
        'Svg\\DefaultStyle' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/DefaultStyle.php',
        'Svg\\Document' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Document.php',
        'Svg\\Gradient\\Stop' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Gradient/Stop.php',
        'Svg\\Style' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Style.php',
        'Svg\\Surface\\CPdf' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/CPdf.php',
        'Svg\\Surface\\SurfaceCpdf' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceCpdf.php',
        'Svg\\Surface\\SurfaceGmagick' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceGmagick.php',
        'Svg\\Surface\\SurfaceInterface' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfaceInterface.php',
        'Svg\\Surface\\SurfacePDFLib' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Surface/SurfacePDFLib.php',
        'Svg\\Tag\\AbstractTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/AbstractTag.php',
        'Svg\\Tag\\Anchor' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Anchor.php',
        'Svg\\Tag\\Circle' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Circle.php',
        'Svg\\Tag\\ClipPath' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/ClipPath.php',
        'Svg\\Tag\\Ellipse' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Ellipse.php',
        'Svg\\Tag\\Group' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Group.php',
        'Svg\\Tag\\Image' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Image.php',
        'Svg\\Tag\\Line' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Line.php',
        'Svg\\Tag\\LinearGradient' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/LinearGradient.php',
        'Svg\\Tag\\Path' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Path.php',
        'Svg\\Tag\\Polygon' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Polygon.php',
        'Svg\\Tag\\Polyline' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Polyline.php',
        'Svg\\Tag\\RadialGradient' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/RadialGradient.php',
        'Svg\\Tag\\Rect' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Rect.php',
        'Svg\\Tag\\Shape' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Shape.php',
        'Svg\\Tag\\Stop' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Stop.php',
        'Svg\\Tag\\StyleTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/StyleTag.php',
        'Svg\\Tag\\Text' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/Text.php',
        'Svg\\Tag\\UseTag' => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg/Tag/UseTag.php',
        'acf_admin' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/admin.php',
        'acf_admin_field_group' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/admin-field-group.php',
        'acf_admin_field_groups' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/admin-field-groups.php',
        'acf_admin_options_page' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/admin/admin-options-page.php',
        'acf_admin_settings_updates' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/admin/admin-settings-updates.php',
        'acf_admin_tools' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/admin-tools.php',
        'acf_cache' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/cache.php',
        'acf_deprecated' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/deprecated.php',
        'acf_field' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field.php',
        'acf_field__accordion' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-accordion.php',
        'acf_field__group' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-group.php',
        'acf_field_button_group' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-button-group.php',
        'acf_field_checkbox' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-checkbox.php',
        'acf_field_clone' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/fields/class-acf-field-clone.php',
        'acf_field_color_picker' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-color_picker.php',
        'acf_field_date_and_time_picker' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-date_time_picker.php',
        'acf_field_date_picker' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-date_picker.php',
        'acf_field_email' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-email.php',
        'acf_field_file' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-file.php',
        'acf_field_flexible_content' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/fields/class-acf-field-flexible-content.php',
        'acf_field_gallery' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/fields/class-acf-field-gallery.php',
        'acf_field_google_map' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-google-map.php',
        'acf_field_image' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-image.php',
        'acf_field_link' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-link.php',
        'acf_field_message' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-message.php',
        'acf_field_number' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-number.php',
        'acf_field_oembed' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-oembed.php',
        'acf_field_output' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-output.php',
        'acf_field_page_link' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-page_link.php',
        'acf_field_password' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-password.php',
        'acf_field_post_object' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-post_object.php',
        'acf_field_radio' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-radio.php',
        'acf_field_range' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-range.php',
        'acf_field_relationship' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-relationship.php',
        'acf_field_repeater' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/fields/class-acf-field-repeater.php',
        'acf_field_select' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-select.php',
        'acf_field_separator' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-separator.php',
        'acf_field_tab' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-tab.php',
        'acf_field_taxonomy' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-taxonomy.php',
        'acf_field_text' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-text.php',
        'acf_field_textarea' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-textarea.php',
        'acf_field_time_picker' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-time_picker.php',
        'acf_field_true_false' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-true_false.php',
        'acf_field_url' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-url.php',
        'acf_field_user' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-user.php',
        'acf_field_wysiwyg' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields/class-acf-field-wysiwyg.php',
        'acf_fields' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/fields.php',
        'acf_form_attachment' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-attachment.php',
        'acf_form_comment' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-comment.php',
        'acf_form_customizer' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-customizer.php',
        'acf_form_front' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-front.php',
        'acf_form_nav_menu' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-nav-menu.php',
        'acf_form_taxonomy' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-taxonomy.php',
        'acf_form_widget' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/forms/form-widget.php',
        'acf_json' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/json.php',
        'acf_local' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/local.php',
        'acf_location' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location.php',
        'acf_location_attachment' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-attachment.php',
        'acf_location_comment' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-comment.php',
        'acf_location_current_user' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-current-user.php',
        'acf_location_current_user_role' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-current-user-role.php',
        'acf_location_nav_menu' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-nav-menu.php',
        'acf_location_nav_menu_item' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-nav-menu-item.php',
        'acf_location_options_page' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/locations/class-acf-location-options-page.php',
        'acf_location_page' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-page.php',
        'acf_location_page_parent' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-page-parent.php',
        'acf_location_page_template' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-page-template.php',
        'acf_location_page_type' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-page-type.php',
        'acf_location_post' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post.php',
        'acf_location_post_category' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post-category.php',
        'acf_location_post_format' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post-format.php',
        'acf_location_post_status' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post-status.php',
        'acf_location_post_taxonomy' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post-taxonomy.php',
        'acf_location_post_template' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post-template.php',
        'acf_location_post_type' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-post-type.php',
        'acf_location_taxonomy' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-taxonomy.php',
        'acf_location_user_form' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-user-form.php',
        'acf_location_user_role' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-user-role.php',
        'acf_location_widget' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations/class-acf-location-widget.php',
        'acf_locations' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/locations.php',
        'acf_loop' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/loop.php',
        'acf_options_page' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/options-page.php',
        'acf_pro' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/acf-pro.php',
        'acf_pro_updates' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/pro/updates.php',
        'acf_revisions' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/revisions.php',
        'acf_settings_addons' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/settings-addons.php',
        'acf_settings_info' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/admin/settings-info.php',
        'acf_third_party' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/third-party.php',
        'acf_validation' => __DIR__ . '/../..' . '/includes/plugins/advanced-custom-fields-pro/includes/validation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6e43591b08bb5184a57331eb1249400::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6e43591b08bb5184a57331eb1249400::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc6e43591b08bb5184a57331eb1249400::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitc6e43591b08bb5184a57331eb1249400::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitc6e43591b08bb5184a57331eb1249400::$classMap;

        }, null, ClassLoader::class);
    }
}
