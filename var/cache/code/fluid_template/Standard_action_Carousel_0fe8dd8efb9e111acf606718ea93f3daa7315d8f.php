<?php

class Standard_action_Carousel_0fe8dd8efb9e111acf606718ea93f3daa7315d8f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div id="carousel-';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output6 .= '" class="carousel carousel-';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array8)]);

$output6 .= ' slide" data-interval="';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array9)]);

$output6 .= '" data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = 'true';
$arguments10['else'] = 'false';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '" data-ride="carousel">
            <div class="carousel-inner">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= 'background-color: ';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array27);

$output26 .= ';';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};
$arguments19 = array();
$arguments19['value'] = NULL;
$arguments19['name'] = NULL;
$arguments19['name'] = 'itemStyleColor';
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['then'] = ' active';

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output18 .= ' carousel-item carousel-item-type carousel-item-type-';
$array33 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array33)]);

$output18 .= '" data-itemno="';
$array34 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array34)]);

$output18 .= '" style="';
$array35 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleColor', $array35)]);

$output18 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['partial'] = 'Carousel/General/BackgroundImage';
$arguments36['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output18 .= '
                        <div class="carousel-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$output41 = '';

$output41 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array44 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array44);
};
$arguments42 = array();

$output41 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);
$arguments39['partial'] = $output41;
$arguments39['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output18 .= '
                        </div>
                    </div>
                ';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array17);
$arguments15['as'] = 'item';
$arguments15['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['section'] = NULL;
$arguments46['partial'] = NULL;
$arguments46['delegate'] = NULL;
$arguments46['renderable'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['optional'] = false;
$arguments46['default'] = NULL;
$arguments46['contentAs'] = NULL;
$arguments46['debug'] = true;
$arguments46['partial'] = 'Carousel/Control/Indicator';
$arguments46['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['section'] = NULL;
$arguments49['partial'] = NULL;
$arguments49['delegate'] = NULL;
$arguments49['renderable'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['optional'] = false;
$arguments49['default'] = NULL;
$arguments49['contentAs'] = NULL;
$arguments49['debug'] = true;
$arguments49['partial'] = 'Carousel/Control/Control';
$arguments49['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output6 .= '
        </div>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output52 = '';

$output52 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['name'] = 'Default';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output52 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
        <div id="carousel-';
$array64 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array64)]);

$output63 .= '" class="carousel carousel-';
$array65 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition', $array65)]);

$output63 .= ' slide" data-interval="';
$array66 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval', $array66)]);

$output63 .= '" data-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['then'] = 'true';
$arguments67['else'] = 'false';

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output63 .= '" data-ride="carousel">
            <div class="carousel-inner">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= 'background-color: ';
$array84 = array (
);
$output83 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array84);

$output83 .= ';';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_color', $array81);

$expression82 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
};
$arguments76 = array();
$arguments76['value'] = NULL;
$arguments76['name'] = NULL;
$arguments76['name'] = 'itemStyleColor';
$renderChildrenClosure77 = ($arguments76['value'] !== null) ? function() use ($arguments76) { return $arguments76['value']; } : $renderChildrenClosure77;
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
                    <div class="item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isFirst', $array88);

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['then'] = ' active';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output75 .= ' carousel-item carousel-item-type carousel-item-type-';
$array90 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array90)]);

$output75 .= '" data-itemno="';
$array91 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index', $array91)]);

$output75 .= '" style="';
$array92 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyleColor', $array92)]);

$output75 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['section'] = NULL;
$arguments93['partial'] = NULL;
$arguments93['delegate'] = NULL;
$arguments93['renderable'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['optional'] = false;
$arguments93['default'] = NULL;
$arguments93['contentAs'] = NULL;
$arguments93['debug'] = true;
$arguments93['partial'] = 'Carousel/General/BackgroundImage';
$arguments93['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output75 .= '
                        <div class="carousel-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['renderable'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['debug'] = true;
$output98 = '';

$output98 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.item_type', $array101);
};
$arguments99 = array();

$output98 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
$arguments96['partial'] = $output98;
$arguments96['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output75 .= '
                        </div>
                    </div>
                ';
return $output75;
};
$arguments72 = array();
$arguments72['each'] = NULL;
$arguments72['as'] = NULL;
$arguments72['key'] = NULL;
$arguments72['reverse'] = false;
$arguments72['iteration'] = NULL;
$array74 = array (
);$arguments72['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array74);
$arguments72['as'] = 'item';
$arguments72['iteration'] = 'iteration';

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output63 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['section'] = NULL;
$arguments103['partial'] = NULL;
$arguments103['delegate'] = NULL;
$arguments103['renderable'] = NULL;
$arguments103['arguments'] = array (
);
$arguments103['optional'] = false;
$arguments103['default'] = NULL;
$arguments103['contentAs'] = NULL;
$arguments103['debug'] = true;
$arguments103['partial'] = 'Carousel/Control/Indicator';
$arguments103['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['partial'] = 'Carousel/Control/Control';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output63 .= '
        </div>
    ';
return $output63;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '

';
return $output57;
};
$arguments55 = array();
$arguments55['name'] = NULL;
$arguments55['name'] = 'Main';

$output52 .= NULL;

$output52 .= '

';

return $output52;
}


}
#