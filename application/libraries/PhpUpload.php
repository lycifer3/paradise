<?php

/**
 * Class Help Info
 *
 *          ->setFile()                      // Set upload file
 *          ->setFileExtensions()            // Allowed Extensions
 *          ->setFileRename()                // Rename file true/false
 *          ->setMaxSize()                   // Max size MB
 *          ->setMaxWidth()                  // Max Width PX
 *          ->setMaxHeight()                 // Max Height PX
 *          ->setMinWidth()                  // Min Width PX
 *          ->setMinHeight()                 // Min Height PX
 *          ->saveOriginal('path', 'suffix') // Save original file  (suffix if need)
 *
 *          // Add thumbnails
 *          // Max width and Max Height (suffix if need) and type adaptive/crop
 *          ->addThumbnail('path', width, height, 'suffix', 'type')
 *          ->addThumbnails(array(array(array('path', width, height, 'suffix', 'type') ... array N)
 *
 *          To set document root (without '/' slash in the end)
 *          ->setDocumentRoot()
 *
 *          ->isErrorExists()     // Return is error exists
 *          ->getErrors()         // Return all errors
 *          ->getFileName()       // Return file name
 *          ->getFileExtension()  // Return file extension
 *          ->upload();           // Upload file
 */

/*----------------------------------------------------------------------------------------------------------------------------------*/




/**
 * Class PhpUpload
 * @author Alexandr Malenko (Bitrop) <bitrop@mail.ru>
 * @copyright Alexandr Malenko (Bitrop)
 * 2013
 * Version 2.1
 */
Class PhpUpload
{
    protected $file;
    protected $maxSize        = 0;          // Max file size in MB. 0 - unlimited
    protected $maxWidth       = 0;          // Max file width.      0 - unlimited
    protected $maxHeight      = 0;          // Max file height.     0 - unlimited
    protected $minWidth       = 0;          // Min file width.      0 - unlimited
    protected $minHeight      = 0;          // Min file height.     0 - unlimited
    protected $fileRename     = false;      // Is file rename
    protected $fileExtensions = array();    // Allowed file extensions. Empty array all allowed extensions
    protected $thumbnails     = array();    // Image thumbnails
    protected $documentRoot   = '/';        // document root
    protected $originalPath   = '';         // Original Path
    protected $originalSuffix;              // Original Suffix
    protected $errors;                      // Errors
    protected $fileName;                    // File name
    protected $fileExtension;               // File extension
    protected $fileProportions;             // File width and height

    const FILE_UPLOAD_ERROR  = 'File upload error';
    const FILE_SIZE_ERROR    = 'File size error';
    const FILE_EXTS_ERROR    = 'File extensions error';
    const FILE_PROP_ERROR    = 'File proportions error';
    const FILE_COPY_ERROR    = 'File copy error';
    const FILE_SAVE_ERROR    = 'File save error';

    const UNLIMITED   = 0;
    const FILE_WIDTH  = 0;
    const FILE_HEIGHT = 1;

    const THUMBNAIL_PATH   = 0;
    const THUMBNAIL_WIDTH  = 1;
    const THUMBNAIL_HEIGHT = 2;
    const THUMBNAIL_SUFFIX = 3;
    const THUMBNAIL_TYPE   = 4;

    const ADAPTIVE_RESIZE  = 'adaptive';
    const CROP_RESIZE      = 'crop';

    const LANDSCAPE = 0;
    const PORTRAIT  = 1;

    /**
     * Set document root
     */
    public function __construct() {
        $this->documentRoot = $_SERVER['DOCUMENT_ROOT'] . '/';
    }

    /**
     * @param string $documentRoot
     * @return $this
     */
    public function setDocumentRoot($documentRoot) {
        $this->documentRoot = $documentRoot;
        return $this;
    }

    /**
     * @param mixed $file
     * @return $this
     */
    public function setFile($file) {
        $this->file = (object) $file;
        return $this;
    }

    /**
     * @param array $fileExtensions
     * @return $this
     */
    public function setFileExtensions($fileExtensions) {
        $this->fileExtensions = $fileExtensions;
        return $this;
    }

    /**
     * @param boolean $fileRename
     * @return $this
     */
    public function setFileRename($fileRename) {
        $this->fileRename = $fileRename;
        return $this;
    }

    /**
     * @param int $maxHeight
     * @return $this
     */
    public function setMaxHeight($maxHeight) {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * @param int $maxSize
     * @return $this
     */
    public function setMaxSize($maxSize) {
        $this->maxSize = $maxSize;
        return $this;
    }

    /**
     * @param int $maxWidth
     * @return $this
     */
    public function setMaxWidth($maxWidth) {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * @param int $minHeight
     * @return $this
     */
    public function setMinHeight($minHeight) {
        $this->minHeight = $minHeight;
        return $this;
    }

    /**
     * @param int $minWidth
     * @return $this
     */
    public function setMinWidth($minWidth) {
        $this->minWidth = $minWidth;
        return $this;
    }

    /**
     * @param string $filePath
     * @param string $fileSuffix
     * @return $this
     */
    public function saveOriginal($filePath, $fileSuffix = '') {
        $this->originalPath    = $filePath;
        $this->originalSuffix = ($fileSuffix != '') ? $fileSuffix . '_' : '';

        return $this;
    }

    /**
     * @param $filePath
     * @param $fileWidth
     * @param $fileHeight
     * @param string $fileSuffix
     * @param string $fileType
     * @return $this
     */
    public function addThumbnail($filePath, $fileWidth, $fileHeight, $fileSuffix = '', $fileType = self::ADAPTIVE_RESIZE) {
        $this->thumbnails[] = array($filePath, $fileWidth, $fileHeight, $fileSuffix, $fileType);
        return $this;
    }

    /**
     * @param $thumbnails
     * @return $this
     */
    public function addThumbnails($thumbnails) {
        $this->thumbnails = $thumbnails;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileExtension() {
        return $this->fileExtension;
    }

    /**
     * @return mixed
     */
    public function getFileName() {
        return $this->fileName;
    }

    /**
     * @param $error
     */
    public function addError($error) {
        $this->errors[] = $error;
    }

    /**
     * @return mixed
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * @return int
     */
    public function isErrorExists() {
        return count($this->errors) > 0;
    }

    /**
     * @return string
     */
    public function fileRename() {
        if($this->fileRename) {
            $fileHash       = substr(md5(md5(microtime(true)) . md5(0, 100)), 0, 10);
            $this->fileName = $fileHash . '.' . $this->fileExtension;
        } else {
            $this->fileName = $this->file->name;
        }
    }

    /**
     * File allow extensions check
     */
    public function checkAllowedExtension() {
        $this->fileExtension = substr($this->file->name, strrpos($this->file->name, '.') + 1);

        if(!empty($this->fileExtensions) AND !in_array(strtolower($this->fileExtension), $this->fileExtensions)) {
            $this->addError(self::FILE_EXTS_ERROR);
        }
    }

    /**
     * File size check
     */
    public function checkFileSize() {
        if($this->maxSize != self::UNLIMITED AND $this->file->size > $this->maxSize * 1024 * 1024) {
            $this->addError(self::FILE_SIZE_ERROR);
        }
    }

    /**
     * File check proportions
     */
    public function fileCheckProportions() {
        if($fileSize = getimagesize($this->file->tmp_name)) {
            $this->fileProportions = $fileSize;
        }

        if($this->maxWidth != self::UNLIMITED AND $this->maxWidth < $fileSize[self::FILE_WIDTH]) {
            $this->addError(self::FILE_PROP_ERROR);
        }

        if($this->maxHeight != self::UNLIMITED AND $this->maxHeight < $fileSize[self::FILE_HEIGHT]) {
            $this->addError(self::FILE_PROP_ERROR);
        }

        if($this->minWidth != self::UNLIMITED AND $this->minWidth > $fileSize[self::FILE_WIDTH]) {
            $this->addError(self::FILE_PROP_ERROR);
        }

        if($this->minHeight != self::UNLIMITED AND $this->minHeight > $fileSize[self::FILE_HEIGHT]) {
            $this->addError(self::FILE_PROP_ERROR);
        }
    }

    /**
     * Save original file
     */
    public function saveOriginalFile() {
        if(!empty($this->originalPath)) {
            if(!move_uploaded_file($this->file->tmp_name, $this->documentRoot . $this->originalPath. '/' . $this->originalSuffix . $this->fileName)) {
                $this->addError(self::FILE_UPLOAD_ERROR);
            }
        }
    }

    /**
     * Function for creating thumbnails
     */
    public function createThumbnails() {
        if(count($this->thumbnails) > 0) {
            foreach ($this->thumbnails as $thumbnail) {
                $this->fileResize($thumbnail[self::THUMBNAIL_PATH], $thumbnail[self::THUMBNAIL_SUFFIX], $thumbnail[self::THUMBNAIL_WIDTH], $thumbnail[self::THUMBNAIL_HEIGHT], $thumbnail[self::THUMBNAIL_TYPE]);
            }
        }
    }

    /**
     * @param $thumbnailPath
     * @param $thumbnailSuffix
     * @param $thumbnailMaxWidth
     * @param $thumbnailMaxHeight
     * @param $thumbnailType
     */
    public function fileResize($thumbnailPath, $thumbnailSuffix, $thumbnailMaxWidth, $thumbnailMaxHeight, $thumbnailType) {
        $originalWidth  = $this->fileProportions[self::FILE_WIDTH];
        $originalHeight = $this->fileProportions[self::FILE_HEIGHT];
        $imageType = ($originalWidth >= $originalHeight) ? self::LANDSCAPE : self::PORTRAIT;

        if(($thumbnailType == self::ADAPTIVE_RESIZE AND $imageType == self::LANDSCAPE) OR
            ($thumbnailType == self::CROP_RESIZE     AND $imageType == self::PORTRAIT)) {
            $thumbnailHeight = round($originalHeight / (round(($originalWidth / $thumbnailMaxWidth), 2)));
            $thumbnailWidth  = $thumbnailMaxWidth;
        } else {
            $thumbnailWidth   = round($originalWidth / (round(($originalHeight / $thumbnailMaxHeight), 2)));
            $thumbnailHeight  = $thumbnailMaxHeight;
        }

        $newImage          = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
        $backgroundColor   = imagecolorallocate($newImage, 255, 255, 255);
        imagefill($newImage, 0, 0, $backgroundColor);
        $extension         = (strtolower($this->fileExtension) == 'jpg') ? 'jpeg' : strtolower($this->fileExtension);
        $functionImageFrom = 'imagecreatefrom' . $extension;
        $functionImageSave = 'image' . $extension;

        // original path it's original copy indicator
        $resourceImage = $functionImageFrom(empty($this->originalPath) ? $this->file->tmp_name :
            $this->documentRoot . $this->originalPath. '/' . $this->originalSuffix . $this->fileName);

        if(!imagecopyresampled($newImage, $resourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight)) {
            $this->addError(self::FILE_COPY_ERROR);
        } else {
            $newImagePath = $this->documentRoot . $thumbnailPath .  '/' . (($thumbnailSuffix != '') ? $thumbnailSuffix . '_' : '') . $this->fileName;
            if(!$functionImageSave($newImage, $newImagePath)) {
                $this->addError(self::FILE_SAVE_ERROR);
            }

            if($thumbnailType == self::CROP_RESIZE AND $imageType == self::PORTRAIT) {
                $thumbnailMarginLeft = 0;
                $thumbnailMarginTop  = round(($thumbnailHeight - $thumbnailMaxHeight) / 2);
                $this->imageCrop($newImagePath, $functionImageFrom($newImagePath), $functionImageSave, $thumbnailMarginLeft, $thumbnailMarginTop, $thumbnailMaxWidth, $thumbnailMaxHeight);
            }

            if($thumbnailType == self::CROP_RESIZE AND $imageType == self::LANDSCAPE) {
                $thumbnailMarginTop  = 0;
                $thumbnailMarginLeft = round(($thumbnailWidth - $thumbnailMaxWidth) / 2);
                $this->imageCrop($newImagePath, $functionImageFrom($newImagePath), $functionImageSave, $thumbnailMarginLeft, $thumbnailMarginTop, $thumbnailMaxWidth, $thumbnailMaxHeight);
            }
        }
    }

    /**
     * @param $newImagePath
     * @param $resourceImage
     * @param $functionImageSave
     * @param $thumbnailMarginLeft
     * @param $thumbnailMarginTop
     * @param $thumbnailMaxWidth
     * @param $thumbnailMaxHeight
     */
    public function imageCrop($newImagePath, $resourceImage, $functionImageSave, $thumbnailMarginLeft, $thumbnailMarginTop, $thumbnailMaxWidth, $thumbnailMaxHeight) {
        $newImage          = imagecreatetruecolor($thumbnailMaxWidth, $thumbnailMaxHeight);
        $backgroundColor   = imagecolorallocate($newImage, 255, 255, 255);
        imagefill($newImage, 0, 0, $backgroundColor);

        if(!imagecopyresampled($newImage, $resourceImage, 0, 0, $thumbnailMarginLeft, $thumbnailMarginTop, $thumbnailMaxWidth, $thumbnailMaxHeight, $thumbnailMaxWidth, $thumbnailMaxHeight)) {
            $this->addError(self::FILE_COPY_ERROR);
        } else {
            if(!$functionImageSave($newImage, $newImagePath)) {
                $this->addError(self::FILE_SAVE_ERROR);
            }
        }
    }

    /**
     * Uploading
     * @return $this
     */
    public function upload() {
        $this->checkFileSize();
        $this->checkAllowedExtension();
        $this->fileCheckProportions();
        $this->fileRename();

        if(count($this->getErrors()) == 0) {
            $this->saveOriginalFile();
        }

        if(count($this->getErrors()) == 0) {
            $this->createThumbnails();
        }

        return $this;
    }
}