<?php namespace Rahmatawaludin\Docusign\Services;

class Tab {
  public $DocumentID; // positiveInteger
  public $RecipientID; // positiveInteger
  public $PageNumber; // nonNegativeInteger
  public $XPosition; // nonNegativeInteger
  public $YPosition; // nonNegativeInteger
  public $ScaleValue; // decimal
  public $AnchorTabItem; // AnchorTab
  public $Type; // TabTypeCode
  public $Name; // string
  public $TabLabel; // string
  public $Value; // string
  public $CustomTabType; // CustomTabType
  public $CustomTabWidth; // int
  public $CustomTabHeight; // int
  public $CustomTabRequired; // boolean
  public $CustomTabLocked; // boolean
  public $CustomTabDisableAutoSize; // boolean
  public $CustomTabListItems; // string
  public $CustomTabListValues; // string
  public $CustomTabListSelectedValue; // string
  public $CustomTabRadioGroupName; // string
  public $CustomTabValidationPattern; // string
  public $CustomTabValidationMessage; // string
  public $TemplateLocked; // boolean
  public $TemplateRequired; // boolean
  public $ConditionalParentLabel; // string
  public $ConditionalParentValue; // string
  public $SharedTab; // boolean
  public $RequireInitialOnSharedTabChange; // boolean
  public $ConcealValueOnDocument; // boolean

  public function __construct()
  {
    $this->AnchorTabItem = new AnchorTab;
  }
}
