<?php namespace Rahmatawaludin\Docusign\Services;

class Document {
  public $ID; // positiveInteger
  public $Name; // string
  public $PDFBytes; // base64Binary
  public $Password; // string
  public $TransformPdfFields; // boolean
  public $FileExtension; // string
  public $MatchBoxes; // ArrayOfMatchBox
  public $AttachmentDescription; // string
}
