<?php

class Form {

    private $form;
    
    function __construct($formName) {   

        $json = file_get_contents(__BLOG_WORK_DIR__ . '/forms/' . $formName . '.json');
        $this->form = json_decode($json, TRUE);
        //var_dump($this->form);;
        foreach($this->form as $fieldName => $fieldValue) {
            if ($fieldValue['tag'] == 'input') {
                $labelElement = '<label for="' . $fieldValue['labelAttr']['for'];
                $labelElement = '" class="' . $fieldValue['tagAttr']['class'] . '"></label>';
                $this->form[$fieldName]['labelElement'] = $labelElement;
                $tagElement = '<' . $fieldValue['tag'];
                $tagElement .= ' type="' . $fieldValue['tagAttr']['type'];
                $tagElement .= '" name="' . $fieldValue['tagAttr']['name'];
                $tagElement .= '" value="' . $fieldValue['tagAttr']['value'];
                $tagElement .= '" class="' . $fieldValue['tagAttr']['class'] . '">';
                $this->form[$fieldName]['tagElement'] = $tagElement;
            }
        }
        var_dump($this->form);
    }

    function getForm() {

        return $this->form;
    }

    function validate() {

        return false;
    }
}