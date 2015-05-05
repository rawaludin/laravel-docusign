<?php namespace Rahmatawaludin\Docusign\Services;

class Envelope {
  public $TransactionID; // string
  public $Asynchronous; // boolean
  public $AccountId; // string
  public $Documents; // ArrayOfDocument
  public $Recipients; // ArrayOfRecipient
  public $Tabs; // ArrayOfTab
  public $Subject; // string
  public $EmailBlurb; // string
  public $SigningLocation; // SigningLocationCode
  public $CustomFields; // ArrayOfCustomField
  public $VaultingOptions; // VaultingOptions
  public $AutoNavigation; // boolean
  public $EnvelopeIdStamping; // boolean
  public $AuthoritativeCopy; // boolean
  public $Notification; // Notification
  public $EnvelopeAttachment; // ArrayOfAttachment
  public $EnforceSignerVisibility; // boolean
  public $EnableWetSign; // boolean
  public $AllowMarkup; // boolean
  public $EventNotification; // EventNotification

  public function __construct(Documents $documents)
  {
    $this->Documents = $documents;
  }
}
