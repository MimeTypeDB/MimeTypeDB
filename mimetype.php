<?php
/**
 * MimeTypeDB
 * PHP Parser
 *
 * @author      BizLogic <hire@bizlogicdev.com>
 * @copyright   2017 BizLogic
 * @link        http://bizlogicdev.com
 *
 * @since       Monday, August 21, 2017 / 13:25 GMT+1
 * @edited      $Date: 2014-10-13 11:46:37 +0200 (Mon, 13 Oct 2014) $
 * @version     $Id: functions.php 109 2014-10-13 09:46:37Z dev@bizlogicdev.com $
 *
 * @package     MimeType DB
 * @category    Parser
*/

function mimeTypeListStatic()
{
    $mimeTypes = array(
        'txt'   => 'text/plain',
        'htm'   => 'text/html',
        'html'  => 'text/html',
        'php'   => 'text/html',
        'css'   => 'text/css',
        'js'    => 'application/javascript',
        'json'  => 'application/json',
        'xml'   => 'application/xml',
        'swf'   => 'application/x-shockwave-flash',
        'flv'   => 'video/x-flv',

        // images
        'png'   => 'image/png',
        'jpe'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'jpg'   => 'image/jpeg',
        'gif'   => 'image/gif',
        'bmp'   => 'image/bmp',
        'ico'   => 'image/vnd.microsoft.icon',
        'tiff'  => 'image/tiff',
        'tif'   => 'image/tiff',
        'svg'   => 'image/svg+xml',
        'svgz'  => 'image/svg+xml',

        // archives
        'zip'   => 'application/zip',
        'rar'   => 'application/x-rar-compressed',
        'cab'   => 'application/vnd.ms-cab-compressed',

        // executables
        'exe'   => 'application/x-msdownload',
        'msi'   => 'application/x-msdownload',

        // audio/video
        'mp3'   => 'audio/mpeg',
        'qt'    => 'video/quicktime',
        'mov'   => 'video/quicktime',

        // adobe
        'pdf'   => 'application/pdf',
        'psd'   => 'image/vnd.adobe.photoshop',
        'ai'    => 'application/postscript',
        'eps'   => 'application/postscript',
        'ps'    => 'application/postscript',

        // ms office
        'doc'   => 'application/msword',
        'rtf'   => 'application/rtf',
        'xls'   => 'application/vnd.ms-excel',
        'ppt'   => 'application/vnd.ms-powerpoint',
        'docx'  => 'application/msword',
        'xlsx'  => 'application/vnd.ms-excel',
        'pptx'  => 'application/vnd.ms-powerpoint',

        // open office
        'odt' => 'application/vnd.oasis.opendocument.text',
        'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
    );

    return $mimeTypes;
}

function getMimeTypeByFileExtension( $filename )
{
    $fileExt    = fetchFileExt( $filename );
    $mimeTypes  = mimeTypeListStatic();

    if( array_key_exists( $fileExt ) ) {
        return $mimeTypes[ $fileExt ];
    }

    return 'application/octet-stream';
}

/**
 * Fetch file extension
 *
 * @param   string
 * @return  string
*/
function fetchFileExt( $file )
{
    return strtolower( substr($file, strrpos( $file, '.', -1 ) + 1 ) );
}
