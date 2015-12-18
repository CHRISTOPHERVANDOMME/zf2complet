<?php
namespace MiniModule\Form\Element;

use Zend\Form\Element;
use Zend\InputFilter\InputProviderInterface;

class Password extends Element\Password implements InputProviderInterface
{
    public function __construct()
    {
        $options = array(
            'label' => '',
        );
        parent::__construct('pwd', $options);
        $this->setAttribute( 'size', 12 );
    }

    public function getInputSpecification()
    {
        return array(
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\Alnum',
                ),
            ),
        );
    }
}