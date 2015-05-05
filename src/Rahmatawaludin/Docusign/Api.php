<?php namespace Rahmatawaludin\Docusign;

class Api {

	public function MakeTab($docID, $recID, $PageNumber, $X=null, $Y=null, $Type, $Name=null, $TabLabel=null, $Value=null,$AnchorTabString=null, $AnchorXOffset=null, $AnchorYOffset=null)
	{
		$tab = new Services\Tab();
		$tab->DocumentID = $docID;
		$tab->RecipientID = $recID;
		$tab->PageNumber =  $PageNumber;
		if (isset($X)) {
			$tab->XPosition = $X;
		}
		if (isset($Y)) {
			$tab->YPosition = $Y;
		}
		$tab->Type = $Type;
		if (isset($Name)) {
			$tab->Name = $Name;
		}
		if (isset($TabLabel)) {
			$tab->TabLabel = $TabLabel;
		}
		if (isset($Value)) {
			$tab->Value = $Value;
		}
		if (isset($AnchorTabString)) {
			$tab->AnchorTabItem->AnchorTabString = $AnchorTabString;
		}
		if (isset($AnchorXOffset)) {
			$tab->AnchorTabItem->XOffset = $AnchorXOffset;
		}
		if (isset($AnchorYOffset)) {
			$tab->AnchorTabItem->YOffset = $AnchorYOffset;
		}
		return $tab;
	}

	function makeRecipient($firstname, $lastname, $email, $useEmbeddedSigning)
	{
		$Recipient = new Services\Recipient();
		$Recipient->ID = "1";
		$Recipient->Email = $email;
		$Recipient->UserName = $firstname." ".$lastname;
		$Recipient->Type = "Signer";
		$Recipient->RequireIDLookup = false;
		// if the option to use embedded signing is set then set the CaptiveInfo element which will tell docusign to not send email invitations
		if ( $useEmbeddedSigning===true ) {
			// normally the ClientUserId would be a meaningful value but it only needs to be unique within an envelope context so we'll just use sessionId
			$Recipient->CaptiveInfo->ClientUserId = session_id();
			// signature info is optional but useful to set for embedded
			$Recipient->SignatureInfo->SignatureInitials = "RA";
			$Recipient->SignatureInfo->SignatureName = "Rahmat Awaludin";
			$Recipient->SignatureInfo->FontStyle = "BradleyHandITC";
		}

		return $Recipient;
	}

	// security
	// This section will request an ID Lookup based on the recipients name and address, so we'll prefill those
	// values from the form data.
	public function AddIDLookupToRecipient($recipient, $address1=null, $address2=null, $city=null, $state=null, $zip=null)
	{
		$recipient->RequireIDLookup = true;
		$recipient->IDCheckConfigurationName = "ID Check $";
		// prefill address
		if ($address1<> null) {
			$recipient->IDCheckInformationInput->AddressInformationInput->AddressInformation->Street1 = $address1;
		}
		if ($address2<> null) {
			$recipient->IDCheckInformationInput->AddressInformationInput->AddressInformation->Street2 = $address2;
		}
		if ($city<> null) {
			$recipient->IDCheckInformationInput->AddressInformationInput->AddressInformation->City = $city;
		}
		if ($state<> null) {
			$recipient->IDCheckInformationInput->AddressInformationInput->AddressInformation->State = $state;
		}
		if ($zip<> null) {
			$recipient->IDCheckInformationInput->AddressInformationInput->AddressInformation->Zip = $zip;
		}
		$recipient->IDCheckInformationInput->AddressInformationInput->DisplayLevel = "Editable";
		$recipient->IDCheckInformationInput->AddressInformationInput->ReceiveInResponse = true;
		return $recipient;
	}

}


