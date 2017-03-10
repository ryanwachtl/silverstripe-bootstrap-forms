<?php

class BootstrapUserForm extends Extension {

	public function updateForm() {
        $form = $this->owner;
		$form->Fields()->bootstrapify();
		$form->Actions()->bootstrapify();
		$form->setTemplate("BootstrapForm");
	}

}
