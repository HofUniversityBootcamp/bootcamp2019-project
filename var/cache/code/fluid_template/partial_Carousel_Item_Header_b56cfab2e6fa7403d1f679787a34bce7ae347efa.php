<?php

class partial_Carousel_Item_Header_b56cfab2e6fa7403d1f679787a34bce7ae347efa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
    <div class="valign" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array9);

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$output11 = '';

$output11 .= 'style="color: ';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.text_color', $array12)]);

$output11 .= ';"';
$arguments6['then'] = $output11;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '>
        <div class="vcontainer">
            <div class="carousel-text-inner">
                <h';
$array13 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header_layout', $array13)]);

$output5 .= ' class="carousel-header text-center awesome';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.header_class', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$output19 = '';

$output19 .= ' ';
$array20 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header_class', $array20)]);
$arguments14['then'] = $output19;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output5 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.header', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$renderChildrenClosure22 = ($arguments21['value'] !== null) ? function() use ($arguments21) { return $arguments21['value']; } : $renderChildrenClosure22;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output5 .= '</h';
$array24 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header_layout', $array24)]);

$output5 .= '>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    <h';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader_layout', $array31)]);

$output30 .= ' class="carousel-subheader text-center awesome';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader_class', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$output37 = '';

$output37 .= ' ';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader_class', $array38)]);
$arguments32['then'] = $output37;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output30 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output30 .= '</h';
$array42 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader_layout', $array42)]);

$output30 .= '>
                ';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output5 .= '
            </div>
        </div>
    </div>
';
return $output5;
};
$arguments1 = array();
$arguments1['parameter'] = NULL;
$arguments1['target'] = '';
$arguments1['class'] = '';
$arguments1['title'] = '';
$arguments1['additionalParams'] = '';
$arguments1['additionalAttributes'] = array (
);
$arguments1['useCacheHash'] = false;
$arguments1['addQueryString'] = false;
$arguments1['addQueryStringMethod'] = 'GET';
$arguments1['addQueryStringExclude'] = '';
$arguments1['absolute'] = false;
$array3 = array (
);$arguments1['parameter'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array3);
// Rendering Array
$array4 = array();
$array4['draggable'] = 'false';
$arguments1['additionalAttributes'] = $array4;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#