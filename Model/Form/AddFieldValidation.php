<?php

/**
 * @copyright   Copyright (c) Vendic B.V https://vendic.nl/
 */

declare(strict_types=1);

namespace Vendic\HyvaCheckoutPostcodeNLFormat\Model\Form;

use Hyva\Checkout\Model\Form\AbstractEntityForm;
use Hyva\Checkout\Model\Form\AbstractEntityFormModifier;

class AddFieldValidation extends AbstractEntityFormModifier
{
    public function apply(AbstractEntityForm $form): AbstractEntityForm
    {
        $form->registerModificationListener(
            'addValidationToPostcode',
            'form:build',
            [$this, 'addValidationToPostcode']
        );

        return $form;
    }

    public function addValidationToPostcode(AbstractEntityForm $entityForm): void
    {
        $postcode = $entityForm->getField('postcode');
        if (!$postcode) {
            return;
        }

        $postcode->setValidationRule('postcode-nl');
    }
}
