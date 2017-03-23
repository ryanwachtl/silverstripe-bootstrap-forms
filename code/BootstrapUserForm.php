<?php

class BootstrapUserForm extends Extension {

	public function updateForm() {
		$form = $this->owner;
		$form->setTemplate("BootstrapForm");
	}

	public function updateFormFields($fields) {
		$fields->bootstrapify();
	}

	public function updateFormActions($actions) {
		$actions->bootstrapify();
	}

}
