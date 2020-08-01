<?php

const __BLOG_WORK_DIR__ = '../..';
class Form {

    private $form;
    
    function __construct($formName) {   

        $json = file_get_contents(__BLOG_WORK_DIR__ . '/forms/' . $formName . '.json');
        $this->form = [
            'src' => json_decode($json, TRUE),
            'htmlElements' => []
        ];
        foreach( $this->form['src'] as $elemName => $elemValue) {
            $label = $elemValue['label'];
            $labelAttr = $elemValue['labelAttr'];
            $labelAttrStr = '';
            foreach($labelAttr as $attrName => $attrValue) {
                $labelAttrStr .= " $attrName=\"$attrValue\"";
            }
            $labelElement = "<label$labelAttrStr>$label</label>";
            $tag = $elemValue['tag'];
            $tagAttr = $elemValue['tagAttr'];
            $tagAttrStr = '';
            foreach($tagAttr as $attrName => $attrValue) {
                $tagAttrStr .= " $attrName=\"$attrValue\"";
            }
            if ($tag == 'input') {
                $tagElement = "<input$tagAttrStr>";
            }
            $this->form['htmlElements'][$elemName] = [
                'labelElement' => $labelElement,
                'tagElement' => $tagElement
            ];
        }
        
        
    }

    function getForm() {

        return $this->form;
    }

    function validate() {

        return false;
    }
}

$f = new Form('login');
var_dump($f->getForm()['htmlElements']);
