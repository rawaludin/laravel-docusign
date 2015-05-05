<?php namespace Rahmatawaludin\Docusign\Services;

class AddressInformationInput {
  public $AddressInformation; // AddressInformation
  public $DisplayLevel; // DisplayLevelCode
  public $ReceiveInResponse; // boolean

  public function __construct()
  {
  	$this->AddressInformation = new AddressInformation;
  	$this->DisplayLevel = new DisplayLevelCode;
  }
}
