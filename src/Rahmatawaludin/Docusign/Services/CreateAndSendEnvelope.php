<?php namespace Rahmatawaludin\Docusign\Services;

class CreateAndSendEnvelope {
	public $Envelope; // Envelope

	public function __construct(Envelope $envelope)
	{
		$this->Envelope = $envelope;
	}
}
