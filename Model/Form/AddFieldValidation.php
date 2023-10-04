<?php declare(strict_types=1);
/**
 * @copyright   Copyright (c) Vendic B.V https://vendic.nl/
 */

namespace Vendic\HyvaCheckoutPostcodeNLFormat\Model\Form;

use Hyva\Checkout\Model\Form\EntityFormInterface;
use Hyva\Checkout\Model\Form\EntityFormModifierInterface;

class AddFieldValidation implements EntityFormModifierInterface
{
    public function apply(EntityFormInterface $form): EntityFormInterface
    {
        $form->registerModificationListener(
            'addValidationToPostcode',
            'form:build',
            [$this, 'addValidationToPostcode']
        );

        return $form;
    }

    public function addValidationToPostcode(EntityFormInterface $entityForm) : void
    {
        $postcode = $entityForm->getField('postcode');
        if (!$postcode) {
            return;
        }

        $postcode->setValidationRule('postcode-nl');
    }
}
