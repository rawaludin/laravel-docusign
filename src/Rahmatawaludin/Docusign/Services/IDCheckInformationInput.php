<?php namespace Rahmatawaludin\Docusign\Services;

class IDCheckInformationInput {
  public $AddressInformationInput; // AddressInformationInput
  public $DOBInformationInput; // DOBInformationInput
  public $SSN4InformationInput; // SSN4InformationInput
  public $SSN9InformationInput; // SSN9InformationInput

  public function __construct()
  {
  	$this->AddressInformationInput = new AddressInformationInput;
  }
}
