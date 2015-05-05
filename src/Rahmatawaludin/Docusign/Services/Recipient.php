<?php namespace Rahmatawaludin\Docusign\Services;

class Recipient {
  public $ID; // positiveInteger
  public $UserName; // string
  public $SignerName; // string
  public $Email; // string
  public $Type; // RecipientTypeCode
  public $AccessCode; // string
  public $AddAccessCodeToEmail; // boolean
  public $RequireIDLookup; // boolean
  public $IDCheckConfigurationName; // string
  public $PhoneAuthentication; // RecipientPhoneAuthentication
  public $SignatureInfo; // RecipientSignatureInfo
  public $CaptiveInfo; // RecipientCaptiveInfo
  public $CustomFields; // ArrayOfString1
  public $RoutingOrder; // unsignedShort
  public $IDCheckInformationInput; // IDCheckInformationInput
  public $AutoNavigation; // boolean
  public $RecipientAttachment; // ArrayOfAttachment
  public $Note; // string
  public $RoleName; // string
  public $TemplateLocked; // boolean
  public $TemplateRequired; // boolean
  public $TemplateAccessCodeRequired; // boolean
  public $DefaultRecipient; // boolean

  public function __construct()
  {
    $this->CaptiveInfo = new RecipientCaptiveInfo;
    $this->SignatureInfo = new RecipientSignatureInfo;
    $this->IDCheckInformationInput = new IDCheckInformationInput;
  }
}
