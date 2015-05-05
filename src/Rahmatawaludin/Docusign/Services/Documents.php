<?php namespace Rahmatawaludin\Docusign\Services;

class Documents {
  public $Document;
  public function __construct(Document $document)
  {
  	$this->Document = $document;
  }
}
