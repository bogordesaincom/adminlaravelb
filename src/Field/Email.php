<?php

namespace Terranet\Administrator\Field;

class Email extends Field
{
    /**
     * @return array
     */
    public function getAattributes(): array
    {
        return parent::getAttributes() + [
                'style' => 'width: 250px',
            ];
    }
}
