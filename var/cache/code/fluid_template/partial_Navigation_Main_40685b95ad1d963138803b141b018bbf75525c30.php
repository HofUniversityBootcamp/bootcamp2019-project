<?php

class partial_Navigation_Main_40685b95ad1d963138803b141b018bbf75525c30 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments252 = array();

$output251 .= '';

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array260);

$expression261 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);
$arguments257['then'] = ' active';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['then'] = NULL;
$arguments262['else'] = NULL;
$arguments262['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments262['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments262['then'] = ' dropdown dropdown-hover';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output256 .= '">
                            <a href="';
$array267 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array267)]);

$output256 .= '" id="nav-item-';
$array268 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array268)]);

$output256 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['then'] = ' dropdown-toggle';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output256 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array277);

$expression278 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$output279 = '';

$output279 .= ' target="';
$array280 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array280)]);

$output279 .= '"';
$arguments274['then'] = $output279;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output256 .= ' title="';
$array281 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array281)]);

$output256 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output256 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['image'] = NULL;
$arguments317['src'] = NULL;
$arguments317['width'] = NULL;
$arguments317['height'] = NULL;
$array319 = array (
);$arguments317['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array319);
$array320 = array (
);$arguments317['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array320);
$array321 = array (
);$arguments317['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array321);

$output316 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= '
                                            ';
return $output316;
};
$arguments314 = array();

$output313 .= '';

$output313 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['additionalAttributes'] = NULL;
$arguments325['data'] = NULL;
$arguments325['class'] = NULL;
$arguments325['dir'] = NULL;
$arguments325['id'] = NULL;
$arguments325['lang'] = NULL;
$arguments325['style'] = NULL;
$arguments325['title'] = NULL;
$arguments325['accesskey'] = NULL;
$arguments325['tabindex'] = NULL;
$arguments325['onclick'] = NULL;
$arguments325['alt'] = NULL;
$arguments325['ismap'] = NULL;
$arguments325['longdesc'] = NULL;
$arguments325['usemap'] = NULL;
$arguments325['src'] = NULL;
$arguments325['treatIdAsReference'] = NULL;
$arguments325['image'] = NULL;
$arguments325['crop'] = NULL;
$arguments325['cropVariant'] = 'default';
$arguments325['width'] = NULL;
$arguments325['height'] = NULL;
$arguments325['minWidth'] = NULL;
$arguments325['minHeight'] = NULL;
$arguments325['maxWidth'] = NULL;
$arguments325['maxHeight'] = NULL;
$arguments325['absolute'] = false;
$array327 = array (
);$arguments325['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array327);
$array328 = array (
);$arguments325['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array328);
$array329 = array (
);$arguments325['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array329);
$array330 = array (
);$arguments325['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array330);
$array331 = array (
);$arguments325['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array331);

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
                                            ';
return $output324;
};
$arguments322 = array();
$arguments322['if'] = NULL;

$output313 .= '';

$output313 .= '
                                        ';
return $output313;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array311);
$array310['1'] = ' === svg';

$expression312 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments294['__thenClosure'] = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['image'] = NULL;
$arguments297['src'] = NULL;
$arguments297['width'] = NULL;
$arguments297['height'] = NULL;
$array299 = array (
);$arguments297['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array299);
$array300 = array (
);$arguments297['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array300);
$array301 = array (
);$arguments297['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array301);

$output296 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
                                            ';
return $output296;
};
$arguments294['__elseClosures'][] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['alt'] = NULL;
$arguments303['ismap'] = NULL;
$arguments303['longdesc'] = NULL;
$arguments303['usemap'] = NULL;
$arguments303['src'] = NULL;
$arguments303['treatIdAsReference'] = NULL;
$arguments303['image'] = NULL;
$arguments303['crop'] = NULL;
$arguments303['cropVariant'] = 'default';
$arguments303['width'] = NULL;
$arguments303['height'] = NULL;
$arguments303['minWidth'] = NULL;
$arguments303['minHeight'] = NULL;
$arguments303['maxWidth'] = NULL;
$arguments303['maxHeight'] = NULL;
$arguments303['absolute'] = false;
$array305 = array (
);$arguments303['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array305);
$array306 = array (
);$arguments303['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array306);
$array307 = array (
);$arguments303['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array307);
$array308 = array (
);$arguments303['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array308);
$array309 = array (
);$arguments303['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array309);

$output302 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
                                            ';
return $output302;
};

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
                                    </span>
                                ';
return $output293;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array290);
$array289['1'] = ' && ';
$array291 = array (
);$array289['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array291);

$expression292 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output256 .= '
                                <span class="nav-link-text">';
$array332 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array332)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments333 = array();
$arguments333['then'] = NULL;
$arguments333['else'] = NULL;
$arguments333['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array336);

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments333['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments333['__thenClosure'] = $renderChildrenClosure334;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output256 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array344 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array344)]);

$output343 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments421 = array();

$output420 .= '';

$output420 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
                                                <li>
                                                    <a href="';
$array426 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array426)]);

$output425 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array430);

$expression431 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['then'] = ' active';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output425 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['then'] = NULL;
$arguments432['else'] = NULL;
$arguments432['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array434 = array();
$array435 = array (
);$array434['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array435);

$expression436 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments432['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression436(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array434)
					),
					$renderingContext
				);
$output437 = '';

$output437 .= ' target="';
$array438 = array (
);
$output437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array438)]);

$output437 .= '"';
$arguments432['then'] = $output437;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output425 .= ' title="';
$array439 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array439)]);

$output425 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['image'] = NULL;
$arguments470['src'] = NULL;
$arguments470['width'] = NULL;
$arguments470['height'] = NULL;
$array472 = array (
);$arguments470['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array472);
$array473 = array (
);$arguments470['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array473);
$array474 = array (
);$arguments470['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array474);

$output469 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                                                                    ';
return $output469;
};
$arguments467 = array();

$output466 .= '';

$output466 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['alt'] = NULL;
$arguments478['ismap'] = NULL;
$arguments478['longdesc'] = NULL;
$arguments478['usemap'] = NULL;
$arguments478['src'] = NULL;
$arguments478['treatIdAsReference'] = NULL;
$arguments478['image'] = NULL;
$arguments478['crop'] = NULL;
$arguments478['cropVariant'] = 'default';
$arguments478['width'] = NULL;
$arguments478['height'] = NULL;
$arguments478['minWidth'] = NULL;
$arguments478['minHeight'] = NULL;
$arguments478['maxWidth'] = NULL;
$arguments478['maxHeight'] = NULL;
$arguments478['absolute'] = false;
$array480 = array (
);$arguments478['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array480);
$array481 = array (
);$arguments478['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array481);
$array482 = array (
);$arguments478['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array482);
$array483 = array (
);$arguments478['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array483);
$array484 = array (
);$arguments478['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array484);

$output477 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
                                                                    ';
return $output477;
};
$arguments475 = array();
$arguments475['if'] = NULL;

$output466 .= '';

$output466 .= '
                                                                ';
return $output466;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array464);
$array463['1'] = ' === svg';

$expression465 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments447['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array463)
					),
					$renderingContext
				);
$arguments447['__thenClosure'] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['image'] = NULL;
$arguments450['src'] = NULL;
$arguments450['width'] = NULL;
$arguments450['height'] = NULL;
$array452 = array (
);$arguments450['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array452);
$array453 = array (
);$arguments450['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array453);
$array454 = array (
);$arguments450['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array454);

$output449 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
                                                                    ';
return $output449;
};
$arguments447['__elseClosures'][] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['additionalAttributes'] = NULL;
$arguments456['data'] = NULL;
$arguments456['class'] = NULL;
$arguments456['dir'] = NULL;
$arguments456['id'] = NULL;
$arguments456['lang'] = NULL;
$arguments456['style'] = NULL;
$arguments456['title'] = NULL;
$arguments456['accesskey'] = NULL;
$arguments456['tabindex'] = NULL;
$arguments456['onclick'] = NULL;
$arguments456['alt'] = NULL;
$arguments456['ismap'] = NULL;
$arguments456['longdesc'] = NULL;
$arguments456['usemap'] = NULL;
$arguments456['src'] = NULL;
$arguments456['treatIdAsReference'] = NULL;
$arguments456['image'] = NULL;
$arguments456['crop'] = NULL;
$arguments456['cropVariant'] = 'default';
$arguments456['width'] = NULL;
$arguments456['height'] = NULL;
$arguments456['minWidth'] = NULL;
$arguments456['minHeight'] = NULL;
$arguments456['maxWidth'] = NULL;
$arguments456['maxHeight'] = NULL;
$arguments456['absolute'] = false;
$array458 = array (
);$arguments456['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array458);
$array459 = array (
);$arguments456['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array459);
$array460 = array (
);$arguments456['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array460);
$array461 = array (
);$arguments456['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array461);
$array462 = array (
);$arguments456['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array462);

$output455 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
                                                                    ';
return $output455;
};

$output446 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output446 .= '
                                                            </span>
                                                        ';
return $output446;
};
$arguments440 = array();
$arguments440['then'] = NULL;
$arguments440['else'] = NULL;
$arguments440['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array442 = array();
$array443 = array (
);$array442['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array443);
$array442['1'] = ' && ';
$array444 = array (
);$array442['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array444);

$expression445 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments440['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array442)
					),
					$renderingContext
				);
$arguments440['__thenClosure'] = $renderChildrenClosure441;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output425 .= '
                                                        <span class="dropdown-text">';
$array485 = array (
);
$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array485)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments486 = array();
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array489);

$expression490 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array488)
					),
					$renderingContext
				);
$arguments486['__thenClosure'] = $renderChildrenClosure487;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output425 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output425;
};
$arguments423 = array();
$arguments423['if'] = NULL;

$output420 .= '';

$output420 .= '
                                        ';
return $output420;
};
$arguments349 = array();
$arguments349['then'] = NULL;
$arguments349['else'] = NULL;
$arguments349['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments349['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments349['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments349['__elseClosures'][] = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
                                                <li>
                                                    <a href="';
$array352 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array352)]);

$output351 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array356);

$expression357 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments353['then'] = ' active';

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output351 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array361);

$expression362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$output363 = '';

$output363 .= ' target="';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array364)]);

$output363 .= '"';
$arguments358['then'] = $output363;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output351 .= ' title="';
$array365 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array365)]);

$output351 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['image'] = NULL;
$arguments396['src'] = NULL;
$arguments396['width'] = NULL;
$arguments396['height'] = NULL;
$array398 = array (
);$arguments396['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array398);
$array399 = array (
);$arguments396['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array399);
$array400 = array (
);$arguments396['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array400);

$output395 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
                                                                    ';
return $output395;
};
$arguments393 = array();

$output392 .= '';

$output392 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['class'] = NULL;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['title'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['alt'] = NULL;
$arguments404['ismap'] = NULL;
$arguments404['longdesc'] = NULL;
$arguments404['usemap'] = NULL;
$arguments404['src'] = NULL;
$arguments404['treatIdAsReference'] = NULL;
$arguments404['image'] = NULL;
$arguments404['crop'] = NULL;
$arguments404['cropVariant'] = 'default';
$arguments404['width'] = NULL;
$arguments404['height'] = NULL;
$arguments404['minWidth'] = NULL;
$arguments404['minHeight'] = NULL;
$arguments404['maxWidth'] = NULL;
$arguments404['maxHeight'] = NULL;
$arguments404['absolute'] = false;
$array406 = array (
);$arguments404['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array406);
$array407 = array (
);$arguments404['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array407);
$array408 = array (
);$arguments404['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array408);
$array409 = array (
);$arguments404['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array409);
$array410 = array (
);$arguments404['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array410);

$output403 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
                                                                    ';
return $output403;
};
$arguments401 = array();
$arguments401['if'] = NULL;

$output392 .= '';

$output392 .= '
                                                                ';
return $output392;
};
$arguments373 = array();
$arguments373['then'] = NULL;
$arguments373['else'] = NULL;
$arguments373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array390);
$array389['1'] = ' === svg';

$expression391 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments373['__thenClosure'] = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['image'] = NULL;
$arguments376['src'] = NULL;
$arguments376['width'] = NULL;
$arguments376['height'] = NULL;
$array378 = array (
);$arguments376['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array378);
$array379 = array (
);$arguments376['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array379);
$array380 = array (
);$arguments376['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array380);

$output375 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
                                                                    ';
return $output375;
};
$arguments373['__elseClosures'][] = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$arguments382['class'] = NULL;
$arguments382['dir'] = NULL;
$arguments382['id'] = NULL;
$arguments382['lang'] = NULL;
$arguments382['style'] = NULL;
$arguments382['title'] = NULL;
$arguments382['accesskey'] = NULL;
$arguments382['tabindex'] = NULL;
$arguments382['onclick'] = NULL;
$arguments382['alt'] = NULL;
$arguments382['ismap'] = NULL;
$arguments382['longdesc'] = NULL;
$arguments382['usemap'] = NULL;
$arguments382['src'] = NULL;
$arguments382['treatIdAsReference'] = NULL;
$arguments382['image'] = NULL;
$arguments382['crop'] = NULL;
$arguments382['cropVariant'] = 'default';
$arguments382['width'] = NULL;
$arguments382['height'] = NULL;
$arguments382['minWidth'] = NULL;
$arguments382['minHeight'] = NULL;
$arguments382['maxWidth'] = NULL;
$arguments382['maxHeight'] = NULL;
$arguments382['absolute'] = false;
$array384 = array (
);$arguments382['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array384);
$array385 = array (
);$arguments382['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array385);
$array386 = array (
);$arguments382['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array386);
$array387 = array (
);$arguments382['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array387);
$array388 = array (
);$arguments382['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array388);

$output381 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
                                                                    ';
return $output381;
};

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
                                                            </span>
                                                        ';
return $output372;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array369);
$array368['1'] = ' && ';
$array370 = array (
);$array368['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array370);

$expression371 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output351 .= '
                                                        <span class="dropdown-text">';
$array411 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array411)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments412['__thenClosure'] = $renderChildrenClosure413;

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output351 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output351;
};

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
                                    ';
return $output348;
};
$arguments345 = array();
$arguments345['each'] = NULL;
$arguments345['as'] = NULL;
$arguments345['key'] = NULL;
$arguments345['reverse'] = false;
$arguments345['iteration'] = NULL;
$array347 = array (
);$arguments345['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array347);
$arguments345['as'] = 'child';

$output343 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output343 .= '
                                </ul>
                            ';
return $output343;
};
$arguments338 = array();
$arguments338['then'] = NULL;
$arguments338['else'] = NULL;
$arguments338['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array341);

$expression342 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments338['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$arguments338['__thenClosure'] = $renderChildrenClosure339;

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output256 .= '
                        </li>
                    ';
return $output256;
};
$arguments254 = array();
$arguments254['if'] = NULL;

$output251 .= '';

$output251 .= '
                ';
return $output251;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
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
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output13 .= ' title="';
$array38 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array38)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['image'] = NULL;
$arguments74['src'] = NULL;
$arguments74['width'] = NULL;
$arguments74['height'] = NULL;
$array76 = array (
);$arguments74['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array76);
$array77 = array (
);$arguments74['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array77);
$array78 = array (
);$arguments74['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array78);

$output73 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                                            ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['alt'] = NULL;
$arguments82['ismap'] = NULL;
$arguments82['longdesc'] = NULL;
$arguments82['usemap'] = NULL;
$arguments82['src'] = NULL;
$arguments82['treatIdAsReference'] = NULL;
$arguments82['image'] = NULL;
$arguments82['crop'] = NULL;
$arguments82['cropVariant'] = 'default';
$arguments82['width'] = NULL;
$arguments82['height'] = NULL;
$arguments82['minWidth'] = NULL;
$arguments82['minHeight'] = NULL;
$arguments82['maxWidth'] = NULL;
$arguments82['maxHeight'] = NULL;
$arguments82['absolute'] = false;
$array84 = array (
);$arguments82['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array84);
$array85 = array (
);$arguments82['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array85);
$array86 = array (
);$arguments82['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array86);
$array87 = array (
);$arguments82['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array87);
$array88 = array (
);$arguments82['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array88);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                            ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output70 .= '';

$output70 .= '
                                        ';
return $output70;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array68);
$array67['1'] = ' === svg';

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['image'] = NULL;
$arguments54['src'] = NULL;
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$array56 = array (
);$arguments54['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array56);
$array57 = array (
);$arguments54['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array57);
$array58 = array (
);$arguments54['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array58);

$output53 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                                            ';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['src'] = NULL;
$arguments60['treatIdAsReference'] = NULL;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
$array62 = array (
);$arguments60['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array62);
$array63 = array (
);$arguments60['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array63);
$array64 = array (
);$arguments60['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array64);
$array65 = array (
);$arguments60['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array65);
$array66 = array (
);$arguments60['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array66);

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                            ';
return $output59;
};

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                    </span>
                                ';
return $output50;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array47);
$array46['1'] = ' && ';
$array48 = array (
);$array46['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array48);

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array89 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array89)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array101)]);

$output100 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments178 = array();

$output177 .= '';

$output177 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                                                <li>
                                                    <a href="';
$array183 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array183)]);

$output182 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array187);

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['then'] = ' active';

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output182 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$output194 = '';

$output194 .= ' target="';
$array195 = array (
);
$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array195)]);

$output194 .= '"';
$arguments189['then'] = $output194;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output182 .= ' title="';
$array196 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array196)]);

$output182 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['image'] = NULL;
$arguments227['src'] = NULL;
$arguments227['width'] = NULL;
$arguments227['height'] = NULL;
$array229 = array (
);$arguments227['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array229);
$array230 = array (
);$arguments227['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array230);
$array231 = array (
);$arguments227['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array231);

$output226 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
                                                                    ';
return $output226;
};
$arguments224 = array();

$output223 .= '';

$output223 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['additionalAttributes'] = NULL;
$arguments235['data'] = NULL;
$arguments235['class'] = NULL;
$arguments235['dir'] = NULL;
$arguments235['id'] = NULL;
$arguments235['lang'] = NULL;
$arguments235['style'] = NULL;
$arguments235['title'] = NULL;
$arguments235['accesskey'] = NULL;
$arguments235['tabindex'] = NULL;
$arguments235['onclick'] = NULL;
$arguments235['alt'] = NULL;
$arguments235['ismap'] = NULL;
$arguments235['longdesc'] = NULL;
$arguments235['usemap'] = NULL;
$arguments235['src'] = NULL;
$arguments235['treatIdAsReference'] = NULL;
$arguments235['image'] = NULL;
$arguments235['crop'] = NULL;
$arguments235['cropVariant'] = 'default';
$arguments235['width'] = NULL;
$arguments235['height'] = NULL;
$arguments235['minWidth'] = NULL;
$arguments235['minHeight'] = NULL;
$arguments235['maxWidth'] = NULL;
$arguments235['maxHeight'] = NULL;
$arguments235['absolute'] = false;
$array237 = array (
);$arguments235['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array237);
$array238 = array (
);$arguments235['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array238);
$array239 = array (
);$arguments235['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array239);
$array240 = array (
);$arguments235['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array240);
$array241 = array (
);$arguments235['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array241);

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
                                                                    ';
return $output234;
};
$arguments232 = array();
$arguments232['if'] = NULL;

$output223 .= '';

$output223 .= '
                                                                ';
return $output223;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array221);
$array220['1'] = ' === svg';

$expression222 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['image'] = NULL;
$arguments207['src'] = NULL;
$arguments207['width'] = NULL;
$arguments207['height'] = NULL;
$array209 = array (
);$arguments207['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array209);
$array210 = array (
);$arguments207['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array210);
$array211 = array (
);$arguments207['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array211);

$output206 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
                                                                    ';
return $output206;
};
$arguments204['__elseClosures'][] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['additionalAttributes'] = NULL;
$arguments213['data'] = NULL;
$arguments213['class'] = NULL;
$arguments213['dir'] = NULL;
$arguments213['id'] = NULL;
$arguments213['lang'] = NULL;
$arguments213['style'] = NULL;
$arguments213['title'] = NULL;
$arguments213['accesskey'] = NULL;
$arguments213['tabindex'] = NULL;
$arguments213['onclick'] = NULL;
$arguments213['alt'] = NULL;
$arguments213['ismap'] = NULL;
$arguments213['longdesc'] = NULL;
$arguments213['usemap'] = NULL;
$arguments213['src'] = NULL;
$arguments213['treatIdAsReference'] = NULL;
$arguments213['image'] = NULL;
$arguments213['crop'] = NULL;
$arguments213['cropVariant'] = 'default';
$arguments213['width'] = NULL;
$arguments213['height'] = NULL;
$arguments213['minWidth'] = NULL;
$arguments213['minHeight'] = NULL;
$arguments213['maxWidth'] = NULL;
$arguments213['maxHeight'] = NULL;
$arguments213['absolute'] = false;
$array215 = array (
);$arguments213['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array215);
$array216 = array (
);$arguments213['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array216);
$array217 = array (
);$arguments213['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array217);
$array218 = array (
);$arguments213['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array218);
$array219 = array (
);$arguments213['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array219);

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                                                                    ';
return $output212;
};

$output203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
                                                            </span>
                                                        ';
return $output203;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array200);
$array199['1'] = ' && ';
$array201 = array (
);$array199['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array201);

$expression202 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output182 .= '
                                                        <span class="dropdown-text">';
$array242 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array242)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array246);

$expression247 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['__thenClosure'] = $renderChildrenClosure244;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output182 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output182;
};
$arguments180 = array();
$arguments180['if'] = NULL;

$output177 .= '';

$output177 .= '
                                        ';
return $output177;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments106['__elseClosures'][] = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                                                <li>
                                                    <a href="';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array109)]);

$output108 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['then'] = ' active';

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output108 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$output120 = '';

$output120 .= ' target="';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array121)]);

$output120 .= '"';
$arguments115['then'] = $output120;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output108 .= ' title="';
$array122 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array122)]);

$output108 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['image'] = NULL;
$arguments153['src'] = NULL;
$arguments153['width'] = NULL;
$arguments153['height'] = NULL;
$array155 = array (
);$arguments153['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array155);
$array156 = array (
);$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array156);
$array157 = array (
);$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array157);

$output152 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                                                    ';
return $output152;
};
$arguments150 = array();

$output149 .= '';

$output149 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['alt'] = NULL;
$arguments161['ismap'] = NULL;
$arguments161['longdesc'] = NULL;
$arguments161['usemap'] = NULL;
$arguments161['src'] = NULL;
$arguments161['treatIdAsReference'] = NULL;
$arguments161['image'] = NULL;
$arguments161['crop'] = NULL;
$arguments161['cropVariant'] = 'default';
$arguments161['width'] = NULL;
$arguments161['height'] = NULL;
$arguments161['minWidth'] = NULL;
$arguments161['minHeight'] = NULL;
$arguments161['maxWidth'] = NULL;
$arguments161['maxHeight'] = NULL;
$arguments161['absolute'] = false;
$array163 = array (
);$arguments161['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array163);
$array164 = array (
);$arguments161['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array164);
$array165 = array (
);$arguments161['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array165);
$array166 = array (
);$arguments161['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array166);
$array167 = array (
);$arguments161['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array167);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                                                                    ';
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output149 .= '';

$output149 .= '
                                                                ';
return $output149;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array147);
$array146['1'] = ' === svg';

$expression148 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['image'] = NULL;
$arguments133['src'] = NULL;
$arguments133['width'] = NULL;
$arguments133['height'] = NULL;
$array135 = array (
);$arguments133['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array135);
$array136 = array (
);$arguments133['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array136);
$array137 = array (
);$arguments133['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array137);

$output132 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                                                                    ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['alt'] = NULL;
$arguments139['ismap'] = NULL;
$arguments139['longdesc'] = NULL;
$arguments139['usemap'] = NULL;
$arguments139['src'] = NULL;
$arguments139['treatIdAsReference'] = NULL;
$arguments139['image'] = NULL;
$arguments139['crop'] = NULL;
$arguments139['cropVariant'] = 'default';
$arguments139['width'] = NULL;
$arguments139['height'] = NULL;
$arguments139['minWidth'] = NULL;
$arguments139['minHeight'] = NULL;
$arguments139['maxWidth'] = NULL;
$arguments139['maxHeight'] = NULL;
$arguments139['absolute'] = false;
$array141 = array (
);$arguments139['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array141);
$array142 = array (
);$arguments139['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array142);
$array143 = array (
);$arguments139['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array143);
$array144 = array (
);$arguments139['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array144);
$array145 = array (
);$arguments139['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array145);

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                                                                    ';
return $output138;
};

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                                                            </span>
                                                        ';
return $output129;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array126);
$array125['1'] = ' && ';
$array127 = array (
);$array125['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array127);

$expression128 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output108 .= '
                                                        <span class="dropdown-text">';
$array168 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array168)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments169 = array();
$arguments169['then'] = NULL;
$arguments169['else'] = NULL;
$arguments169['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array172);

$expression173 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments169['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression173(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array171)
					),
					$renderingContext
				);
$arguments169['__thenClosure'] = $renderChildrenClosure170;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output108 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output108;
};

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
                                    ';
return $output105;
};
$arguments102 = array();
$arguments102['each'] = NULL;
$arguments102['as'] = NULL;
$arguments102['key'] = NULL;
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$array104 = array (
);$arguments102['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array104);
$arguments102['as'] = 'child';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output100 .= '
                                </ul>
                            ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

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
$output491 = '';

$output491 .= '

<header id="page-header" class="bp-page-header navbar navbar-mainnavigation navbar-';
$array492 = array (
);
$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array492)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$arguments493['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array495 = array();
$array496 = array (
);$array495['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array496);

$expression497 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments493['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression497(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);
$arguments493['then'] = ' navbar-has-image';

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$arguments498['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array500 = array();
$array501 = array (
);$array500['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array501);

$expression502 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments498['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression502(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array500)
					),
					$renderingContext
				);
$arguments498['else'] = ' navbar-top';
$output503 = '';

$output503 .= ' navbar-';
$array504 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array504)]);

$output503 .= ' navbar-fixed-';
$array505 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array505)]);
$arguments498['then'] = $output503;

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output491 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['src'] = NULL;
$arguments544['treatIdAsReference'] = false;
$arguments544['image'] = NULL;
$arguments544['crop'] = NULL;
$arguments544['cropVariant'] = 'default';
$arguments544['width'] = NULL;
$arguments544['height'] = NULL;
$arguments544['minWidth'] = NULL;
$arguments544['minHeight'] = NULL;
$arguments544['maxWidth'] = NULL;
$arguments544['maxHeight'] = NULL;
$arguments544['absolute'] = false;
$array546 = array (
);$arguments544['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array546);

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output543 .= '" alt="';
$array547 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array547)]);

$output543 .= '" height="';
$array548 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array548)]);

$output543 .= '" width="';
$array549 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array549)]);

$output543 .= '">
                    <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['src'] = NULL;
$arguments550['treatIdAsReference'] = false;
$arguments550['image'] = NULL;
$arguments550['crop'] = NULL;
$arguments550['cropVariant'] = 'default';
$arguments550['width'] = NULL;
$arguments550['height'] = NULL;
$arguments550['minWidth'] = NULL;
$arguments550['minHeight'] = NULL;
$arguments550['maxWidth'] = NULL;
$arguments550['maxHeight'] = NULL;
$arguments550['absolute'] = false;
$array552 = array (
);$arguments550['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array552);

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext)]);

$output543 .= '" alt="';
$array553 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array553)]);

$output543 .= '" height="';
$array554 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array554)]);

$output543 .= '" width="';
$array555 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array555)]);

$output543 .= '">
                ';
return $output543;
};
$arguments539 = array();
$arguments539['additionalAttributes'] = NULL;
$arguments539['data'] = NULL;
$arguments539['class'] = NULL;
$arguments539['dir'] = NULL;
$arguments539['id'] = NULL;
$arguments539['lang'] = NULL;
$arguments539['style'] = NULL;
$arguments539['title'] = NULL;
$arguments539['accesskey'] = NULL;
$arguments539['tabindex'] = NULL;
$arguments539['onclick'] = NULL;
$arguments539['target'] = NULL;
$arguments539['rel'] = NULL;
$arguments539['pageUid'] = NULL;
$arguments539['pageType'] = NULL;
$arguments539['noCache'] = NULL;
$arguments539['noCacheHash'] = NULL;
$arguments539['section'] = NULL;
$arguments539['linkAccessRestrictedPages'] = NULL;
$arguments539['additionalParams'] = NULL;
$arguments539['absolute'] = NULL;
$arguments539['addQueryString'] = NULL;
$arguments539['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments539['addQueryStringMethod'] = NULL;
$array541 = array (
);$arguments539['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array541);
$arguments539['class'] = 'navbar-brand navbar-brand-image';
$array542 = array (
);$arguments539['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array542);

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
            ';
return $output538;
};
$arguments536 = array();

$output535 .= '';

$output535 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$array563 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array563)]);
};
$arguments559 = array();
$arguments559['additionalAttributes'] = NULL;
$arguments559['data'] = NULL;
$arguments559['class'] = NULL;
$arguments559['dir'] = NULL;
$arguments559['id'] = NULL;
$arguments559['lang'] = NULL;
$arguments559['style'] = NULL;
$arguments559['title'] = NULL;
$arguments559['accesskey'] = NULL;
$arguments559['tabindex'] = NULL;
$arguments559['onclick'] = NULL;
$arguments559['target'] = NULL;
$arguments559['rel'] = NULL;
$arguments559['pageUid'] = NULL;
$arguments559['pageType'] = NULL;
$arguments559['noCache'] = NULL;
$arguments559['noCacheHash'] = NULL;
$arguments559['section'] = NULL;
$arguments559['linkAccessRestrictedPages'] = NULL;
$arguments559['additionalParams'] = NULL;
$arguments559['absolute'] = NULL;
$arguments559['addQueryString'] = NULL;
$arguments559['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments559['addQueryStringMethod'] = NULL;
$array561 = array (
);$arguments559['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array561);
$arguments559['class'] = 'navbar-brand navbar-brand-text';
$array562 = array (
);$arguments559['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array562);

$output558 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
            ';
return $output558;
};
$arguments556 = array();
$arguments556['if'] = NULL;

$output535 .= '';

$output535 .= '
        ';
return $output535;
};
$arguments506 = array();
$arguments506['then'] = NULL;
$arguments506['else'] = NULL;
$arguments506['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array533);

$expression534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments506['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$arguments506['__thenClosure'] = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['src'] = NULL;
$arguments514['treatIdAsReference'] = false;
$arguments514['image'] = NULL;
$arguments514['crop'] = NULL;
$arguments514['cropVariant'] = 'default';
$arguments514['width'] = NULL;
$arguments514['height'] = NULL;
$arguments514['minWidth'] = NULL;
$arguments514['minHeight'] = NULL;
$arguments514['maxWidth'] = NULL;
$arguments514['maxHeight'] = NULL;
$arguments514['absolute'] = false;
$array516 = array (
);$arguments514['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.file', $array516);

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext)]);

$output513 .= '" alt="';
$array517 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array517)]);

$output513 .= '" height="';
$array518 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array518)]);

$output513 .= '" width="';
$array519 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array519)]);

$output513 .= '">
                    <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['src'] = NULL;
$arguments520['treatIdAsReference'] = false;
$arguments520['image'] = NULL;
$arguments520['crop'] = NULL;
$arguments520['cropVariant'] = 'default';
$arguments520['width'] = NULL;
$arguments520['height'] = NULL;
$arguments520['minWidth'] = NULL;
$arguments520['minHeight'] = NULL;
$arguments520['maxWidth'] = NULL;
$arguments520['maxHeight'] = NULL;
$arguments520['absolute'] = false;
$array522 = array (
);$arguments520['src'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.fileInverted', $array522);

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext)]);

$output513 .= '" alt="';
$array523 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array523)]);

$output513 .= '" height="';
$array524 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array524)]);

$output513 .= '" width="';
$array525 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array525)]);

$output513 .= '">
                ';
return $output513;
};
$arguments509 = array();
$arguments509['additionalAttributes'] = NULL;
$arguments509['data'] = NULL;
$arguments509['class'] = NULL;
$arguments509['dir'] = NULL;
$arguments509['id'] = NULL;
$arguments509['lang'] = NULL;
$arguments509['style'] = NULL;
$arguments509['title'] = NULL;
$arguments509['accesskey'] = NULL;
$arguments509['tabindex'] = NULL;
$arguments509['onclick'] = NULL;
$arguments509['target'] = NULL;
$arguments509['rel'] = NULL;
$arguments509['pageUid'] = NULL;
$arguments509['pageType'] = NULL;
$arguments509['noCache'] = NULL;
$arguments509['noCacheHash'] = NULL;
$arguments509['section'] = NULL;
$arguments509['linkAccessRestrictedPages'] = NULL;
$arguments509['additionalParams'] = NULL;
$arguments509['absolute'] = NULL;
$arguments509['addQueryString'] = NULL;
$arguments509['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments509['addQueryStringMethod'] = NULL;
$array511 = array (
);$arguments509['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array511);
$arguments509['class'] = 'navbar-brand navbar-brand-image';
$array512 = array (
);$arguments509['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array512);

$output508 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output508 .= '
            ';
return $output508;
};
$arguments506['__elseClosures'][] = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
$array531 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array531)]);
};
$arguments527 = array();
$arguments527['additionalAttributes'] = NULL;
$arguments527['data'] = NULL;
$arguments527['class'] = NULL;
$arguments527['dir'] = NULL;
$arguments527['id'] = NULL;
$arguments527['lang'] = NULL;
$arguments527['style'] = NULL;
$arguments527['title'] = NULL;
$arguments527['accesskey'] = NULL;
$arguments527['tabindex'] = NULL;
$arguments527['onclick'] = NULL;
$arguments527['target'] = NULL;
$arguments527['rel'] = NULL;
$arguments527['pageUid'] = NULL;
$arguments527['pageType'] = NULL;
$arguments527['noCache'] = NULL;
$arguments527['noCacheHash'] = NULL;
$arguments527['section'] = NULL;
$arguments527['linkAccessRestrictedPages'] = NULL;
$arguments527['additionalParams'] = NULL;
$arguments527['absolute'] = NULL;
$arguments527['addQueryString'] = NULL;
$arguments527['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments527['addQueryStringMethod'] = NULL;
$array529 = array (
);$arguments527['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array529);
$arguments527['class'] = 'navbar-brand navbar-brand-text';
$array530 = array (
);$arguments527['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array530);

$output526 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);

$output526 .= '
            ';
return $output526;
};

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output491 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainnavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['section'] = NULL;
$arguments570['partial'] = NULL;
$arguments570['delegate'] = NULL;
$arguments570['renderable'] = NULL;
$arguments570['arguments'] = array (
);
$arguments570['optional'] = false;
$arguments570['default'] = NULL;
$arguments570['contentAs'] = NULL;
$arguments570['debug'] = true;
$arguments570['partial'] = 'DropIn/Navigation/MainBefore';
$arguments570['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments573 = array();
$arguments573['section'] = NULL;
$arguments573['partial'] = NULL;
$arguments573['delegate'] = NULL;
$arguments573['renderable'] = NULL;
$arguments573['arguments'] = array (
);
$arguments573['optional'] = false;
$arguments573['default'] = NULL;
$arguments573['contentAs'] = NULL;
$arguments573['debug'] = true;
$arguments573['section'] = 'MainNavigation';
// Rendering Array
$array575 = array();
$array576 = array (
);$array575['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array576);
$array577 = array (
);$array575['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array577);
$arguments573['arguments'] = $array575;

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext);

$output569 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['section'] = NULL;
$arguments578['partial'] = NULL;
$arguments578['delegate'] = NULL;
$arguments578['renderable'] = NULL;
$arguments578['arguments'] = array (
);
$arguments578['optional'] = false;
$arguments578['default'] = NULL;
$arguments578['contentAs'] = NULL;
$arguments578['debug'] = true;
$arguments578['partial'] = 'DropIn/Navigation/MainAfter';
$arguments578['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output569 .= '
            </nav>
        ';
return $output569;
};
$arguments564 = array();
$arguments564['then'] = NULL;
$arguments564['else'] = NULL;
$arguments564['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array566 = array();
$array567 = array (
);$array566['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array567);

$expression568 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments564['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression568(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array566)
					),
					$renderingContext
				);
$arguments564['__thenClosure'] = $renderChildrenClosure565;

$output491 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output491 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output834 = '';

$output834 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments835 = array();

$output834 .= '';

$output834 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
$output839 = '';

$output839 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure841 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments840 = array();
$arguments840['then'] = NULL;
$arguments840['else'] = NULL;
$arguments840['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array842 = array();
$array843 = array (
);$array842['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array843);

$expression844 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments840['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression844(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array842)
					),
					$renderingContext
				);
$arguments840['then'] = ' active';

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments840, $renderChildrenClosure841, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments845 = array();
$arguments845['then'] = NULL;
$arguments845['else'] = NULL;
$arguments845['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array847 = array();
$array848 = array (
);$array847['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array848);

$expression849 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments845['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression849(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array847)
					),
					$renderingContext
				);
$arguments845['then'] = ' dropdown dropdown-hover';

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output839 .= '">
                            <a href="';
$array850 = array (
);
$output839 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array850)]);

$output839 .= '" id="nav-item-';
$array851 = array (
);
$output839 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array851)]);

$output839 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure853 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments852 = array();
$arguments852['then'] = NULL;
$arguments852['else'] = NULL;
$arguments852['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array854 = array();
$array855 = array (
);$array854['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array855);

$expression856 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments852['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression856(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array854)
					),
					$renderingContext
				);
$arguments852['then'] = ' dropdown-toggle';

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments852, $renderChildrenClosure853, $renderingContext);

$output839 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments857 = array();
$arguments857['then'] = NULL;
$arguments857['else'] = NULL;
$arguments857['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array859 = array();
$array860 = array (
);$array859['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array860);

$expression861 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments857['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression861(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array859)
					),
					$renderingContext
				);
$output862 = '';

$output862 .= ' target="';
$array863 = array (
);
$output862 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array863)]);

$output862 .= '"';
$arguments857['then'] = $output862;

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments857, $renderChildrenClosure858, $renderingContext);

$output839 .= ' title="';
$array864 = array (
);
$output839 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array864)]);

$output839 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments865 = array();
$arguments865['then'] = NULL;
$arguments865['else'] = NULL;
$arguments865['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array867 = array();
$array868 = array (
);$array867['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array868);

$expression869 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments865['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression869(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array867)
					),
					$renderingContext
				);
$arguments865['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext);

$output839 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure871 = function() use ($renderingContext, $self) {
$output876 = '';

$output876 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$output896 = '';

$output896 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure898 = function() use ($renderingContext, $self) {
$output899 = '';

$output899 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments900 = array();
$arguments900['image'] = NULL;
$arguments900['src'] = NULL;
$arguments900['width'] = NULL;
$arguments900['height'] = NULL;
$array902 = array (
);$arguments900['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array902);
$array903 = array (
);$arguments900['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array903);
$array904 = array (
);$arguments900['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array904);

$output899 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext);

$output899 .= '
                                            ';
return $output899;
};
$arguments897 = array();

$output896 .= '';

$output896 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
$output907 = '';

$output907 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments908 = array();
$arguments908['additionalAttributes'] = NULL;
$arguments908['data'] = NULL;
$arguments908['class'] = NULL;
$arguments908['dir'] = NULL;
$arguments908['id'] = NULL;
$arguments908['lang'] = NULL;
$arguments908['style'] = NULL;
$arguments908['title'] = NULL;
$arguments908['accesskey'] = NULL;
$arguments908['tabindex'] = NULL;
$arguments908['onclick'] = NULL;
$arguments908['alt'] = NULL;
$arguments908['ismap'] = NULL;
$arguments908['longdesc'] = NULL;
$arguments908['usemap'] = NULL;
$arguments908['src'] = NULL;
$arguments908['treatIdAsReference'] = NULL;
$arguments908['image'] = NULL;
$arguments908['crop'] = NULL;
$arguments908['cropVariant'] = 'default';
$arguments908['width'] = NULL;
$arguments908['height'] = NULL;
$arguments908['minWidth'] = NULL;
$arguments908['minHeight'] = NULL;
$arguments908['maxWidth'] = NULL;
$arguments908['maxHeight'] = NULL;
$arguments908['absolute'] = false;
$array910 = array (
);$arguments908['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array910);
$array911 = array (
);$arguments908['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array911);
$array912 = array (
);$arguments908['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array912);
$array913 = array (
);$arguments908['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array913);
$array914 = array (
);$arguments908['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array914);

$output907 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments908, $renderChildrenClosure909, $renderingContext);

$output907 .= '
                                            ';
return $output907;
};
$arguments905 = array();
$arguments905['if'] = NULL;

$output896 .= '';

$output896 .= '
                                        ';
return $output896;
};
$arguments877 = array();
$arguments877['then'] = NULL;
$arguments877['else'] = NULL;
$arguments877['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array893 = array();
$array894 = array (
);$array893['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array894);
$array893['1'] = ' === svg';

$expression895 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments877['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression895(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array893)
					),
					$renderingContext
				);
$arguments877['__thenClosure'] = function() use ($renderingContext, $self) {
$output879 = '';

$output879 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments880 = array();
$arguments880['image'] = NULL;
$arguments880['src'] = NULL;
$arguments880['width'] = NULL;
$arguments880['height'] = NULL;
$array882 = array (
);$arguments880['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array882);
$array883 = array (
);$arguments880['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array883);
$array884 = array (
);$arguments880['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array884);

$output879 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);

$output879 .= '
                                            ';
return $output879;
};
$arguments877['__elseClosures'][] = function() use ($renderingContext, $self) {
$output885 = '';

$output885 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure887 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments886 = array();
$arguments886['additionalAttributes'] = NULL;
$arguments886['data'] = NULL;
$arguments886['class'] = NULL;
$arguments886['dir'] = NULL;
$arguments886['id'] = NULL;
$arguments886['lang'] = NULL;
$arguments886['style'] = NULL;
$arguments886['title'] = NULL;
$arguments886['accesskey'] = NULL;
$arguments886['tabindex'] = NULL;
$arguments886['onclick'] = NULL;
$arguments886['alt'] = NULL;
$arguments886['ismap'] = NULL;
$arguments886['longdesc'] = NULL;
$arguments886['usemap'] = NULL;
$arguments886['src'] = NULL;
$arguments886['treatIdAsReference'] = NULL;
$arguments886['image'] = NULL;
$arguments886['crop'] = NULL;
$arguments886['cropVariant'] = 'default';
$arguments886['width'] = NULL;
$arguments886['height'] = NULL;
$arguments886['minWidth'] = NULL;
$arguments886['minHeight'] = NULL;
$arguments886['maxWidth'] = NULL;
$arguments886['maxHeight'] = NULL;
$arguments886['absolute'] = false;
$array888 = array (
);$arguments886['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array888);
$array889 = array (
);$arguments886['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array889);
$array890 = array (
);$arguments886['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array890);
$array891 = array (
);$arguments886['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array891);
$array892 = array (
);$arguments886['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array892);

$output885 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments886, $renderChildrenClosure887, $renderingContext);

$output885 .= '
                                            ';
return $output885;
};

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output876 .= '
                                    </span>
                                ';
return $output876;
};
$arguments870 = array();
$arguments870['then'] = NULL;
$arguments870['else'] = NULL;
$arguments870['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array872 = array();
$array873 = array (
);$array872['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array873);
$array872['1'] = ' && ';
$array874 = array (
);$array872['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array874);

$expression875 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments870['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression875(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array872)
					),
					$renderingContext
				);
$arguments870['__thenClosure'] = $renderChildrenClosure871;

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments870, $renderChildrenClosure871, $renderingContext);

$output839 .= '
                                <span class="nav-link-text">';
$array915 = array (
);
$output839 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array915)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure917 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments916 = array();
$arguments916['then'] = NULL;
$arguments916['else'] = NULL;
$arguments916['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array918 = array();
$array919 = array (
);$array918['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array919);

$expression920 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments916['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression920(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array918)
					),
					$renderingContext
				);
$arguments916['__thenClosure'] = $renderChildrenClosure917;

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments916, $renderChildrenClosure917, $renderingContext);

$output839 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure922 = function() use ($renderingContext, $self) {
$output926 = '';

$output926 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array927 = array (
);
$output926 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array927)]);

$output926 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure929 = function() use ($renderingContext, $self) {
$output931 = '';

$output931 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
$output1003 = '';

$output1003 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments1004 = array();

$output1003 .= '';

$output1003 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1007 = function() use ($renderingContext, $self) {
$output1008 = '';

$output1008 .= '
                                                <li>
                                                    <a href="';
$array1009 = array (
);
$output1008 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array1009)]);

$output1008 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1010 = array();
$arguments1010['then'] = NULL;
$arguments1010['else'] = NULL;
$arguments1010['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1012 = array();
$array1013 = array (
);$array1012['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array1013);

$expression1014 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1010['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1014(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1012)
					),
					$renderingContext
				);
$arguments1010['then'] = ' active';

$output1008 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1010, $renderChildrenClosure1011, $renderingContext);

$output1008 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1016 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1015 = array();
$arguments1015['then'] = NULL;
$arguments1015['else'] = NULL;
$arguments1015['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1017 = array();
$array1018 = array (
);$array1017['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array1018);

$expression1019 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1015['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1019(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1017)
					),
					$renderingContext
				);
$output1020 = '';

$output1020 .= ' target="';
$array1021 = array (
);
$output1020 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array1021)]);

$output1020 .= '"';
$arguments1015['then'] = $output1020;

$output1008 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1015, $renderChildrenClosure1016, $renderingContext);

$output1008 .= ' title="';
$array1022 = array (
);
$output1008 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1022)]);

$output1008 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1024 = function() use ($renderingContext, $self) {
$output1029 = '';

$output1029 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1031 = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1051 = function() use ($renderingContext, $self) {
$output1052 = '';

$output1052 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1054 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1053 = array();
$arguments1053['image'] = NULL;
$arguments1053['src'] = NULL;
$arguments1053['width'] = NULL;
$arguments1053['height'] = NULL;
$array1055 = array (
);$arguments1053['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1055);
$array1056 = array (
);$arguments1053['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1056);
$array1057 = array (
);$arguments1053['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1057);

$output1052 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1053, $renderChildrenClosure1054, $renderingContext);

$output1052 .= '
                                                                    ';
return $output1052;
};
$arguments1050 = array();

$output1049 .= '';

$output1049 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1059 = function() use ($renderingContext, $self) {
$output1060 = '';

$output1060 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1061 = array();
$arguments1061['additionalAttributes'] = NULL;
$arguments1061['data'] = NULL;
$arguments1061['class'] = NULL;
$arguments1061['dir'] = NULL;
$arguments1061['id'] = NULL;
$arguments1061['lang'] = NULL;
$arguments1061['style'] = NULL;
$arguments1061['title'] = NULL;
$arguments1061['accesskey'] = NULL;
$arguments1061['tabindex'] = NULL;
$arguments1061['onclick'] = NULL;
$arguments1061['alt'] = NULL;
$arguments1061['ismap'] = NULL;
$arguments1061['longdesc'] = NULL;
$arguments1061['usemap'] = NULL;
$arguments1061['src'] = NULL;
$arguments1061['treatIdAsReference'] = NULL;
$arguments1061['image'] = NULL;
$arguments1061['crop'] = NULL;
$arguments1061['cropVariant'] = 'default';
$arguments1061['width'] = NULL;
$arguments1061['height'] = NULL;
$arguments1061['minWidth'] = NULL;
$arguments1061['minHeight'] = NULL;
$arguments1061['maxWidth'] = NULL;
$arguments1061['maxHeight'] = NULL;
$arguments1061['absolute'] = false;
$array1063 = array (
);$arguments1061['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1063);
$array1064 = array (
);$arguments1061['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1064);
$array1065 = array (
);$arguments1061['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1065);
$array1066 = array (
);$arguments1061['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1066);
$array1067 = array (
);$arguments1061['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1067);

$output1060 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1061, $renderChildrenClosure1062, $renderingContext);

$output1060 .= '
                                                                    ';
return $output1060;
};
$arguments1058 = array();
$arguments1058['if'] = NULL;

$output1049 .= '';

$output1049 .= '
                                                                ';
return $output1049;
};
$arguments1030 = array();
$arguments1030['then'] = NULL;
$arguments1030['else'] = NULL;
$arguments1030['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1046 = array();
$array1047 = array (
);$array1046['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array1047);
$array1046['1'] = ' === svg';

$expression1048 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments1030['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1048(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1046)
					),
					$renderingContext
				);
$arguments1030['__thenClosure'] = function() use ($renderingContext, $self) {
$output1032 = '';

$output1032 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1034 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1033 = array();
$arguments1033['image'] = NULL;
$arguments1033['src'] = NULL;
$arguments1033['width'] = NULL;
$arguments1033['height'] = NULL;
$array1035 = array (
);$arguments1033['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1035);
$array1036 = array (
);$arguments1033['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1036);
$array1037 = array (
);$arguments1033['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1037);

$output1032 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1033, $renderChildrenClosure1034, $renderingContext);

$output1032 .= '
                                                                    ';
return $output1032;
};
$arguments1030['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1038 = '';

$output1038 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1040 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1039 = array();
$arguments1039['additionalAttributes'] = NULL;
$arguments1039['data'] = NULL;
$arguments1039['class'] = NULL;
$arguments1039['dir'] = NULL;
$arguments1039['id'] = NULL;
$arguments1039['lang'] = NULL;
$arguments1039['style'] = NULL;
$arguments1039['title'] = NULL;
$arguments1039['accesskey'] = NULL;
$arguments1039['tabindex'] = NULL;
$arguments1039['onclick'] = NULL;
$arguments1039['alt'] = NULL;
$arguments1039['ismap'] = NULL;
$arguments1039['longdesc'] = NULL;
$arguments1039['usemap'] = NULL;
$arguments1039['src'] = NULL;
$arguments1039['treatIdAsReference'] = NULL;
$arguments1039['image'] = NULL;
$arguments1039['crop'] = NULL;
$arguments1039['cropVariant'] = 'default';
$arguments1039['width'] = NULL;
$arguments1039['height'] = NULL;
$arguments1039['minWidth'] = NULL;
$arguments1039['minHeight'] = NULL;
$arguments1039['maxWidth'] = NULL;
$arguments1039['maxHeight'] = NULL;
$arguments1039['absolute'] = false;
$array1041 = array (
);$arguments1039['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1041);
$array1042 = array (
);$arguments1039['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1042);
$array1043 = array (
);$arguments1039['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1043);
$array1044 = array (
);$arguments1039['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1044);
$array1045 = array (
);$arguments1039['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1045);

$output1038 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1039, $renderChildrenClosure1040, $renderingContext);

$output1038 .= '
                                                                    ';
return $output1038;
};

$output1029 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1030, $renderChildrenClosure1031, $renderingContext);

$output1029 .= '
                                                            </span>
                                                        ';
return $output1029;
};
$arguments1023 = array();
$arguments1023['then'] = NULL;
$arguments1023['else'] = NULL;
$arguments1023['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1025 = array();
$array1026 = array (
);$array1025['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array1026);
$array1025['1'] = ' && ';
$array1027 = array (
);$array1025['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array1027);

$expression1028 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1023['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1028(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1025)
					),
					$renderingContext
				);
$arguments1023['__thenClosure'] = $renderChildrenClosure1024;

$output1008 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1023, $renderChildrenClosure1024, $renderingContext);

$output1008 .= '
                                                        <span class="dropdown-text">';
$array1068 = array (
);
$output1008 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1068)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1070 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1069 = array();
$arguments1069['then'] = NULL;
$arguments1069['else'] = NULL;
$arguments1069['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1071 = array();
$array1072 = array (
);$array1071['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1072);

$expression1073 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1069['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1073(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1071)
					),
					$renderingContext
				);
$arguments1069['__thenClosure'] = $renderChildrenClosure1070;

$output1008 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1069, $renderChildrenClosure1070, $renderingContext);

$output1008 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output1008;
};
$arguments1006 = array();
$arguments1006['if'] = NULL;

$output1003 .= '';

$output1003 .= '
                                        ';
return $output1003;
};
$arguments932 = array();
$arguments932['then'] = NULL;
$arguments932['else'] = NULL;
$arguments932['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1000 = array();
$array1001 = array (
);$array1000['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array1001);

$expression1002 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments932['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1002(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1000)
					),
					$renderingContext
				);
$arguments932['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments932['__elseClosures'][] = function() use ($renderingContext, $self) {
$output934 = '';

$output934 .= '
                                                <li>
                                                    <a href="';
$array935 = array (
);
$output934 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array935)]);

$output934 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments936 = array();
$arguments936['then'] = NULL;
$arguments936['else'] = NULL;
$arguments936['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array938 = array();
$array939 = array (
);$array938['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array939);

$expression940 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments936['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression940(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array938)
					),
					$renderingContext
				);
$arguments936['then'] = ' active';

$output934 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext);

$output934 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments941 = array();
$arguments941['then'] = NULL;
$arguments941['else'] = NULL;
$arguments941['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array943 = array();
$array944 = array (
);$array943['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array944);

$expression945 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments941['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression945(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array943)
					),
					$renderingContext
				);
$output946 = '';

$output946 .= ' target="';
$array947 = array (
);
$output946 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array947)]);

$output946 .= '"';
$arguments941['then'] = $output946;

$output934 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext);

$output934 .= ' title="';
$array948 = array (
);
$output934 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array948)]);

$output934 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
$output955 = '';

$output955 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
$output975 = '';

$output975 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
$output978 = '';

$output978 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments979 = array();
$arguments979['image'] = NULL;
$arguments979['src'] = NULL;
$arguments979['width'] = NULL;
$arguments979['height'] = NULL;
$array981 = array (
);$arguments979['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array981);
$array982 = array (
);$arguments979['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array982);
$array983 = array (
);$arguments979['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array983);

$output978 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments979, $renderChildrenClosure980, $renderingContext);

$output978 .= '
                                                                    ';
return $output978;
};
$arguments976 = array();

$output975 .= '';

$output975 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure985 = function() use ($renderingContext, $self) {
$output986 = '';

$output986 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure988 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments987 = array();
$arguments987['additionalAttributes'] = NULL;
$arguments987['data'] = NULL;
$arguments987['class'] = NULL;
$arguments987['dir'] = NULL;
$arguments987['id'] = NULL;
$arguments987['lang'] = NULL;
$arguments987['style'] = NULL;
$arguments987['title'] = NULL;
$arguments987['accesskey'] = NULL;
$arguments987['tabindex'] = NULL;
$arguments987['onclick'] = NULL;
$arguments987['alt'] = NULL;
$arguments987['ismap'] = NULL;
$arguments987['longdesc'] = NULL;
$arguments987['usemap'] = NULL;
$arguments987['src'] = NULL;
$arguments987['treatIdAsReference'] = NULL;
$arguments987['image'] = NULL;
$arguments987['crop'] = NULL;
$arguments987['cropVariant'] = 'default';
$arguments987['width'] = NULL;
$arguments987['height'] = NULL;
$arguments987['minWidth'] = NULL;
$arguments987['minHeight'] = NULL;
$arguments987['maxWidth'] = NULL;
$arguments987['maxHeight'] = NULL;
$arguments987['absolute'] = false;
$array989 = array (
);$arguments987['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array989);
$array990 = array (
);$arguments987['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array990);
$array991 = array (
);$arguments987['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array991);
$array992 = array (
);$arguments987['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array992);
$array993 = array (
);$arguments987['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array993);

$output986 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments987, $renderChildrenClosure988, $renderingContext);

$output986 .= '
                                                                    ';
return $output986;
};
$arguments984 = array();
$arguments984['if'] = NULL;

$output975 .= '';

$output975 .= '
                                                                ';
return $output975;
};
$arguments956 = array();
$arguments956['then'] = NULL;
$arguments956['else'] = NULL;
$arguments956['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array972 = array();
$array973 = array (
);$array972['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array973);
$array972['1'] = ' === svg';

$expression974 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments956['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression974(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array972)
					),
					$renderingContext
				);
$arguments956['__thenClosure'] = function() use ($renderingContext, $self) {
$output958 = '';

$output958 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure960 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments959 = array();
$arguments959['image'] = NULL;
$arguments959['src'] = NULL;
$arguments959['width'] = NULL;
$arguments959['height'] = NULL;
$array961 = array (
);$arguments959['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array961);
$array962 = array (
);$arguments959['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array962);
$array963 = array (
);$arguments959['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array963);

$output958 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments959, $renderChildrenClosure960, $renderingContext);

$output958 .= '
                                                                    ';
return $output958;
};
$arguments956['__elseClosures'][] = function() use ($renderingContext, $self) {
$output964 = '';

$output964 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments965 = array();
$arguments965['additionalAttributes'] = NULL;
$arguments965['data'] = NULL;
$arguments965['class'] = NULL;
$arguments965['dir'] = NULL;
$arguments965['id'] = NULL;
$arguments965['lang'] = NULL;
$arguments965['style'] = NULL;
$arguments965['title'] = NULL;
$arguments965['accesskey'] = NULL;
$arguments965['tabindex'] = NULL;
$arguments965['onclick'] = NULL;
$arguments965['alt'] = NULL;
$arguments965['ismap'] = NULL;
$arguments965['longdesc'] = NULL;
$arguments965['usemap'] = NULL;
$arguments965['src'] = NULL;
$arguments965['treatIdAsReference'] = NULL;
$arguments965['image'] = NULL;
$arguments965['crop'] = NULL;
$arguments965['cropVariant'] = 'default';
$arguments965['width'] = NULL;
$arguments965['height'] = NULL;
$arguments965['minWidth'] = NULL;
$arguments965['minHeight'] = NULL;
$arguments965['maxWidth'] = NULL;
$arguments965['maxHeight'] = NULL;
$arguments965['absolute'] = false;
$array967 = array (
);$arguments965['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array967);
$array968 = array (
);$arguments965['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array968);
$array969 = array (
);$arguments965['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array969);
$array970 = array (
);$arguments965['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array970);
$array971 = array (
);$arguments965['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array971);

$output964 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments965, $renderChildrenClosure966, $renderingContext);

$output964 .= '
                                                                    ';
return $output964;
};

$output955 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments956, $renderChildrenClosure957, $renderingContext);

$output955 .= '
                                                            </span>
                                                        ';
return $output955;
};
$arguments949 = array();
$arguments949['then'] = NULL;
$arguments949['else'] = NULL;
$arguments949['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array951 = array();
$array952 = array (
);$array951['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array952);
$array951['1'] = ' && ';
$array953 = array (
);$array951['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array953);

$expression954 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments949['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression954(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array951)
					),
					$renderingContext
				);
$arguments949['__thenClosure'] = $renderChildrenClosure950;

$output934 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments949, $renderChildrenClosure950, $renderingContext);

$output934 .= '
                                                        <span class="dropdown-text">';
$array994 = array (
);
$output934 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array994)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure996 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments995 = array();
$arguments995['then'] = NULL;
$arguments995['else'] = NULL;
$arguments995['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array997 = array();
$array998 = array (
);$array997['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array998);

$expression999 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments995['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression999(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array997)
					),
					$renderingContext
				);
$arguments995['__thenClosure'] = $renderChildrenClosure996;

$output934 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments995, $renderChildrenClosure996, $renderingContext);

$output934 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output934;
};

$output931 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments932, $renderChildrenClosure933, $renderingContext);

$output931 .= '
                                    ';
return $output931;
};
$arguments928 = array();
$arguments928['each'] = NULL;
$arguments928['as'] = NULL;
$arguments928['key'] = NULL;
$arguments928['reverse'] = false;
$arguments928['iteration'] = NULL;
$array930 = array (
);$arguments928['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array930);
$arguments928['as'] = 'child';

$output926 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments928, $renderChildrenClosure929, $renderingContext);

$output926 .= '
                                </ul>
                            ';
return $output926;
};
$arguments921 = array();
$arguments921['then'] = NULL;
$arguments921['else'] = NULL;
$arguments921['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array923 = array();
$array924 = array (
);$array923['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array924);

$expression925 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments921['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression925(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array923)
					),
					$renderingContext
				);
$arguments921['__thenClosure'] = $renderChildrenClosure922;

$output839 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments921, $renderChildrenClosure922, $renderingContext);

$output839 .= '
                        </li>
                    ';
return $output839;
};
$arguments837 = array();
$arguments837['if'] = NULL;

$output834 .= '';

$output834 .= '
                ';
return $output834;
};
$arguments594 = array();
$arguments594['then'] = NULL;
$arguments594['else'] = NULL;
$arguments594['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array831 = array();
$array832 = array (
);$array831['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array832);

$expression833 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments594['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression833(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array831)
					),
					$renderingContext
				);
$arguments594['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments594['__elseClosures'][] = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['then'] = NULL;
$arguments597['else'] = NULL;
$arguments597['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array599 = array();
$array600 = array (
);$array599['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array600);

$expression601 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments597['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression601(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array599)
					),
					$renderingContext
				);
$arguments597['then'] = ' active';

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['then'] = NULL;
$arguments602['else'] = NULL;
$arguments602['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array604 = array();
$array605 = array (
);$array604['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array605);

$expression606 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments602['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression606(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array604)
					),
					$renderingContext
				);
$arguments602['then'] = ' dropdown dropdown-hover';

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output596 .= '">
                            <a href="';
$array607 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array607)]);

$output596 .= '" id="nav-item-';
$array608 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array608)]);

$output596 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['then'] = NULL;
$arguments609['else'] = NULL;
$arguments609['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array611 = array();
$array612 = array (
);$array611['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array612);

$expression613 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments609['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression613(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array611)
					),
					$renderingContext
				);
$arguments609['then'] = ' dropdown-toggle';

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output596 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments614 = array();
$arguments614['then'] = NULL;
$arguments614['else'] = NULL;
$arguments614['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array616 = array();
$array617 = array (
);$array616['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array617);

$expression618 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments614['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression618(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array616)
					),
					$renderingContext
				);
$output619 = '';

$output619 .= ' target="';
$array620 = array (
);
$output619 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array620)]);

$output619 .= '"';
$arguments614['then'] = $output619;

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext);

$output596 .= ' title="';
$array621 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array621)]);

$output596 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['then'] = NULL;
$arguments622['else'] = NULL;
$arguments622['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array624 = array();
$array625 = array (
);$array624['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array625);

$expression626 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments622['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression626(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array624)
					),
					$renderingContext
				);
$arguments622['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output596 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
$output633 = '';

$output633 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
$output653 = '';

$output653 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['image'] = NULL;
$arguments657['src'] = NULL;
$arguments657['width'] = NULL;
$arguments657['height'] = NULL;
$array659 = array (
);$arguments657['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array659);
$array660 = array (
);$arguments657['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array660);
$array661 = array (
);$arguments657['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array661);

$output656 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output656 .= '
                                            ';
return $output656;
};
$arguments654 = array();

$output653 .= '';

$output653 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$output664 = '';

$output664 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments665 = array();
$arguments665['additionalAttributes'] = NULL;
$arguments665['data'] = NULL;
$arguments665['class'] = NULL;
$arguments665['dir'] = NULL;
$arguments665['id'] = NULL;
$arguments665['lang'] = NULL;
$arguments665['style'] = NULL;
$arguments665['title'] = NULL;
$arguments665['accesskey'] = NULL;
$arguments665['tabindex'] = NULL;
$arguments665['onclick'] = NULL;
$arguments665['alt'] = NULL;
$arguments665['ismap'] = NULL;
$arguments665['longdesc'] = NULL;
$arguments665['usemap'] = NULL;
$arguments665['src'] = NULL;
$arguments665['treatIdAsReference'] = NULL;
$arguments665['image'] = NULL;
$arguments665['crop'] = NULL;
$arguments665['cropVariant'] = 'default';
$arguments665['width'] = NULL;
$arguments665['height'] = NULL;
$arguments665['minWidth'] = NULL;
$arguments665['minHeight'] = NULL;
$arguments665['maxWidth'] = NULL;
$arguments665['maxHeight'] = NULL;
$arguments665['absolute'] = false;
$array667 = array (
);$arguments665['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array667);
$array668 = array (
);$arguments665['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array668);
$array669 = array (
);$arguments665['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array669);
$array670 = array (
);$arguments665['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array670);
$array671 = array (
);$arguments665['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array671);

$output664 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output664 .= '
                                            ';
return $output664;
};
$arguments662 = array();
$arguments662['if'] = NULL;

$output653 .= '';

$output653 .= '
                                        ';
return $output653;
};
$arguments634 = array();
$arguments634['then'] = NULL;
$arguments634['else'] = NULL;
$arguments634['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array650 = array();
$array651 = array (
);$array650['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array651);
$array650['1'] = ' === svg';

$expression652 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments634['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression652(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array650)
					),
					$renderingContext
				);
$arguments634['__thenClosure'] = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['image'] = NULL;
$arguments637['src'] = NULL;
$arguments637['width'] = NULL;
$arguments637['height'] = NULL;
$array639 = array (
);$arguments637['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array639);
$array640 = array (
);$arguments637['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array640);
$array641 = array (
);$arguments637['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array641);

$output636 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$output636 .= '
                                            ';
return $output636;
};
$arguments634['__elseClosures'][] = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['additionalAttributes'] = NULL;
$arguments643['data'] = NULL;
$arguments643['class'] = NULL;
$arguments643['dir'] = NULL;
$arguments643['id'] = NULL;
$arguments643['lang'] = NULL;
$arguments643['style'] = NULL;
$arguments643['title'] = NULL;
$arguments643['accesskey'] = NULL;
$arguments643['tabindex'] = NULL;
$arguments643['onclick'] = NULL;
$arguments643['alt'] = NULL;
$arguments643['ismap'] = NULL;
$arguments643['longdesc'] = NULL;
$arguments643['usemap'] = NULL;
$arguments643['src'] = NULL;
$arguments643['treatIdAsReference'] = NULL;
$arguments643['image'] = NULL;
$arguments643['crop'] = NULL;
$arguments643['cropVariant'] = 'default';
$arguments643['width'] = NULL;
$arguments643['height'] = NULL;
$arguments643['minWidth'] = NULL;
$arguments643['minHeight'] = NULL;
$arguments643['maxWidth'] = NULL;
$arguments643['maxHeight'] = NULL;
$arguments643['absolute'] = false;
$array645 = array (
);$arguments643['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array645);
$array646 = array (
);$arguments643['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array646);
$array647 = array (
);$arguments643['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array647);
$array648 = array (
);$arguments643['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array648);
$array649 = array (
);$arguments643['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array649);

$output642 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output642 .= '
                                            ';
return $output642;
};

$output633 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output633 .= '
                                    </span>
                                ';
return $output633;
};
$arguments627 = array();
$arguments627['then'] = NULL;
$arguments627['else'] = NULL;
$arguments627['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array629 = array();
$array630 = array (
);$array629['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array630);
$array629['1'] = ' && ';
$array631 = array (
);$array629['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array631);

$expression632 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments627['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression632(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array629)
					),
					$renderingContext
				);
$arguments627['__thenClosure'] = $renderChildrenClosure628;

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output596 .= '
                                <span class="nav-link-text">';
$array672 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array672)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments673 = array();
$arguments673['then'] = NULL;
$arguments673['else'] = NULL;
$arguments673['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array675 = array();
$array676 = array (
);$array675['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array676);

$expression677 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments673['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression677(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array675)
					),
					$renderingContext
				);
$arguments673['__thenClosure'] = $renderChildrenClosure674;

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext);

$output596 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$output683 = '';

$output683 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array684 = array (
);
$output683 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array684)]);

$output683 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
$output688 = '';

$output688 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$output760 = '';

$output760 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments761 = array();

$output760 .= '';

$output760 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
                                                <li>
                                                    <a href="';
$array766 = array (
);
$output765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array766)]);

$output765 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['then'] = NULL;
$arguments767['else'] = NULL;
$arguments767['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array769 = array();
$array770 = array (
);$array769['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array770);

$expression771 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments767['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression771(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array769)
					),
					$renderingContext
				);
$arguments767['then'] = ' active';

$output765 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext);

$output765 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments772 = array();
$arguments772['then'] = NULL;
$arguments772['else'] = NULL;
$arguments772['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array774 = array();
$array775 = array (
);$array774['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array775);

$expression776 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments772['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression776(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array774)
					),
					$renderingContext
				);
$output777 = '';

$output777 .= ' target="';
$array778 = array (
);
$output777 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array778)]);

$output777 .= '"';
$arguments772['then'] = $output777;

$output765 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments772, $renderChildrenClosure773, $renderingContext);

$output765 .= ' title="';
$array779 = array (
);
$output765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array779)]);

$output765 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
$output786 = '';

$output786 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
$output806 = '';

$output806 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments810 = array();
$arguments810['image'] = NULL;
$arguments810['src'] = NULL;
$arguments810['width'] = NULL;
$arguments810['height'] = NULL;
$array812 = array (
);$arguments810['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array812);
$array813 = array (
);$arguments810['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array813);
$array814 = array (
);$arguments810['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array814);

$output809 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext);

$output809 .= '
                                                                    ';
return $output809;
};
$arguments807 = array();

$output806 .= '';

$output806 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
$output817 = '';

$output817 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments818 = array();
$arguments818['additionalAttributes'] = NULL;
$arguments818['data'] = NULL;
$arguments818['class'] = NULL;
$arguments818['dir'] = NULL;
$arguments818['id'] = NULL;
$arguments818['lang'] = NULL;
$arguments818['style'] = NULL;
$arguments818['title'] = NULL;
$arguments818['accesskey'] = NULL;
$arguments818['tabindex'] = NULL;
$arguments818['onclick'] = NULL;
$arguments818['alt'] = NULL;
$arguments818['ismap'] = NULL;
$arguments818['longdesc'] = NULL;
$arguments818['usemap'] = NULL;
$arguments818['src'] = NULL;
$arguments818['treatIdAsReference'] = NULL;
$arguments818['image'] = NULL;
$arguments818['crop'] = NULL;
$arguments818['cropVariant'] = 'default';
$arguments818['width'] = NULL;
$arguments818['height'] = NULL;
$arguments818['minWidth'] = NULL;
$arguments818['minHeight'] = NULL;
$arguments818['maxWidth'] = NULL;
$arguments818['maxHeight'] = NULL;
$arguments818['absolute'] = false;
$array820 = array (
);$arguments818['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array820);
$array821 = array (
);$arguments818['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array821);
$array822 = array (
);$arguments818['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array822);
$array823 = array (
);$arguments818['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array823);
$array824 = array (
);$arguments818['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array824);

$output817 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext);

$output817 .= '
                                                                    ';
return $output817;
};
$arguments815 = array();
$arguments815['if'] = NULL;

$output806 .= '';

$output806 .= '
                                                                ';
return $output806;
};
$arguments787 = array();
$arguments787['then'] = NULL;
$arguments787['else'] = NULL;
$arguments787['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array803 = array();
$array804 = array (
);$array803['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array804);
$array803['1'] = ' === svg';

$expression805 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments787['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression805(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array803)
					),
					$renderingContext
				);
$arguments787['__thenClosure'] = function() use ($renderingContext, $self) {
$output789 = '';

$output789 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments790 = array();
$arguments790['image'] = NULL;
$arguments790['src'] = NULL;
$arguments790['width'] = NULL;
$arguments790['height'] = NULL;
$array792 = array (
);$arguments790['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array792);
$array793 = array (
);$arguments790['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array793);
$array794 = array (
);$arguments790['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array794);

$output789 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments790, $renderChildrenClosure791, $renderingContext);

$output789 .= '
                                                                    ';
return $output789;
};
$arguments787['__elseClosures'][] = function() use ($renderingContext, $self) {
$output795 = '';

$output795 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments796 = array();
$arguments796['additionalAttributes'] = NULL;
$arguments796['data'] = NULL;
$arguments796['class'] = NULL;
$arguments796['dir'] = NULL;
$arguments796['id'] = NULL;
$arguments796['lang'] = NULL;
$arguments796['style'] = NULL;
$arguments796['title'] = NULL;
$arguments796['accesskey'] = NULL;
$arguments796['tabindex'] = NULL;
$arguments796['onclick'] = NULL;
$arguments796['alt'] = NULL;
$arguments796['ismap'] = NULL;
$arguments796['longdesc'] = NULL;
$arguments796['usemap'] = NULL;
$arguments796['src'] = NULL;
$arguments796['treatIdAsReference'] = NULL;
$arguments796['image'] = NULL;
$arguments796['crop'] = NULL;
$arguments796['cropVariant'] = 'default';
$arguments796['width'] = NULL;
$arguments796['height'] = NULL;
$arguments796['minWidth'] = NULL;
$arguments796['minHeight'] = NULL;
$arguments796['maxWidth'] = NULL;
$arguments796['maxHeight'] = NULL;
$arguments796['absolute'] = false;
$array798 = array (
);$arguments796['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array798);
$array799 = array (
);$arguments796['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array799);
$array800 = array (
);$arguments796['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array800);
$array801 = array (
);$arguments796['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array801);
$array802 = array (
);$arguments796['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array802);

$output795 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments796, $renderChildrenClosure797, $renderingContext);

$output795 .= '
                                                                    ';
return $output795;
};

$output786 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output786 .= '
                                                            </span>
                                                        ';
return $output786;
};
$arguments780 = array();
$arguments780['then'] = NULL;
$arguments780['else'] = NULL;
$arguments780['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array782 = array();
$array783 = array (
);$array782['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array783);
$array782['1'] = ' && ';
$array784 = array (
);$array782['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array784);

$expression785 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments780['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression785(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array782)
					),
					$renderingContext
				);
$arguments780['__thenClosure'] = $renderChildrenClosure781;

$output765 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);

$output765 .= '
                                                        <span class="dropdown-text">';
$array825 = array (
);
$output765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array825)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure827 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments826 = array();
$arguments826['then'] = NULL;
$arguments826['else'] = NULL;
$arguments826['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array828 = array();
$array829 = array (
);$array828['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array829);

$expression830 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments826['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression830(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array828)
					),
					$renderingContext
				);
$arguments826['__thenClosure'] = $renderChildrenClosure827;

$output765 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments826, $renderChildrenClosure827, $renderingContext);

$output765 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output765;
};
$arguments763 = array();
$arguments763['if'] = NULL;

$output760 .= '';

$output760 .= '
                                        ';
return $output760;
};
$arguments689 = array();
$arguments689['then'] = NULL;
$arguments689['else'] = NULL;
$arguments689['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array757 = array();
$array758 = array (
);$array757['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array758);

$expression759 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments689['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression759(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array757)
					),
					$renderingContext
				);
$arguments689['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments689['__elseClosures'][] = function() use ($renderingContext, $self) {
$output691 = '';

$output691 .= '
                                                <li>
                                                    <a href="';
$array692 = array (
);
$output691 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array692)]);

$output691 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments693 = array();
$arguments693['then'] = NULL;
$arguments693['else'] = NULL;
$arguments693['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array695 = array();
$array696 = array (
);$array695['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array696);

$expression697 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments693['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression697(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array695)
					),
					$renderingContext
				);
$arguments693['then'] = ' active';

$output691 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext);

$output691 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments698 = array();
$arguments698['then'] = NULL;
$arguments698['else'] = NULL;
$arguments698['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array700 = array();
$array701 = array (
);$array700['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array701);

$expression702 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments698['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression702(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array700)
					),
					$renderingContext
				);
$output703 = '';

$output703 .= ' target="';
$array704 = array (
);
$output703 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array704)]);

$output703 .= '"';
$arguments698['then'] = $output703;

$output691 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext);

$output691 .= ' title="';
$array705 = array (
);
$output691 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array705)]);

$output691 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
$output712 = '';

$output712 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
$output732 = '';

$output732 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
$output735 = '';

$output735 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments736 = array();
$arguments736['image'] = NULL;
$arguments736['src'] = NULL;
$arguments736['width'] = NULL;
$arguments736['height'] = NULL;
$array738 = array (
);$arguments736['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array738);
$array739 = array (
);$arguments736['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array739);
$array740 = array (
);$arguments736['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array740);

$output735 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments736, $renderChildrenClosure737, $renderingContext);

$output735 .= '
                                                                    ';
return $output735;
};
$arguments733 = array();

$output732 .= '';

$output732 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
$output743 = '';

$output743 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments744 = array();
$arguments744['additionalAttributes'] = NULL;
$arguments744['data'] = NULL;
$arguments744['class'] = NULL;
$arguments744['dir'] = NULL;
$arguments744['id'] = NULL;
$arguments744['lang'] = NULL;
$arguments744['style'] = NULL;
$arguments744['title'] = NULL;
$arguments744['accesskey'] = NULL;
$arguments744['tabindex'] = NULL;
$arguments744['onclick'] = NULL;
$arguments744['alt'] = NULL;
$arguments744['ismap'] = NULL;
$arguments744['longdesc'] = NULL;
$arguments744['usemap'] = NULL;
$arguments744['src'] = NULL;
$arguments744['treatIdAsReference'] = NULL;
$arguments744['image'] = NULL;
$arguments744['crop'] = NULL;
$arguments744['cropVariant'] = 'default';
$arguments744['width'] = NULL;
$arguments744['height'] = NULL;
$arguments744['minWidth'] = NULL;
$arguments744['minHeight'] = NULL;
$arguments744['maxWidth'] = NULL;
$arguments744['maxHeight'] = NULL;
$arguments744['absolute'] = false;
$array746 = array (
);$arguments744['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array746);
$array747 = array (
);$arguments744['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array747);
$array748 = array (
);$arguments744['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array748);
$array749 = array (
);$arguments744['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array749);
$array750 = array (
);$arguments744['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array750);

$output743 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments744, $renderChildrenClosure745, $renderingContext);

$output743 .= '
                                                                    ';
return $output743;
};
$arguments741 = array();
$arguments741['if'] = NULL;

$output732 .= '';

$output732 .= '
                                                                ';
return $output732;
};
$arguments713 = array();
$arguments713['then'] = NULL;
$arguments713['else'] = NULL;
$arguments713['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array729 = array();
$array730 = array (
);$array729['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array730);
$array729['1'] = ' === svg';

$expression731 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments713['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression731(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array729)
					),
					$renderingContext
				);
$arguments713['__thenClosure'] = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments716 = array();
$arguments716['image'] = NULL;
$arguments716['src'] = NULL;
$arguments716['width'] = NULL;
$arguments716['height'] = NULL;
$array718 = array (
);$arguments716['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array718);
$array719 = array (
);$arguments716['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array719);
$array720 = array (
);$arguments716['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array720);

$output715 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output715 .= '
                                                                    ';
return $output715;
};
$arguments713['__elseClosures'][] = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['additionalAttributes'] = NULL;
$arguments722['data'] = NULL;
$arguments722['class'] = NULL;
$arguments722['dir'] = NULL;
$arguments722['id'] = NULL;
$arguments722['lang'] = NULL;
$arguments722['style'] = NULL;
$arguments722['title'] = NULL;
$arguments722['accesskey'] = NULL;
$arguments722['tabindex'] = NULL;
$arguments722['onclick'] = NULL;
$arguments722['alt'] = NULL;
$arguments722['ismap'] = NULL;
$arguments722['longdesc'] = NULL;
$arguments722['usemap'] = NULL;
$arguments722['src'] = NULL;
$arguments722['treatIdAsReference'] = NULL;
$arguments722['image'] = NULL;
$arguments722['crop'] = NULL;
$arguments722['cropVariant'] = 'default';
$arguments722['width'] = NULL;
$arguments722['height'] = NULL;
$arguments722['minWidth'] = NULL;
$arguments722['minHeight'] = NULL;
$arguments722['maxWidth'] = NULL;
$arguments722['maxHeight'] = NULL;
$arguments722['absolute'] = false;
$array724 = array (
);$arguments722['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array724);
$array725 = array (
);$arguments722['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array725);
$array726 = array (
);$arguments722['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array726);
$array727 = array (
);$arguments722['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array727);
$array728 = array (
);$arguments722['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array728);

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output721 .= '
                                                                    ';
return $output721;
};

$output712 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext);

$output712 .= '
                                                            </span>
                                                        ';
return $output712;
};
$arguments706 = array();
$arguments706['then'] = NULL;
$arguments706['else'] = NULL;
$arguments706['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array708 = array();
$array709 = array (
);$array708['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array709);
$array708['1'] = ' && ';
$array710 = array (
);$array708['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array710);

$expression711 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments706['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression711(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array708)
					),
					$renderingContext
				);
$arguments706['__thenClosure'] = $renderChildrenClosure707;

$output691 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext);

$output691 .= '
                                                        <span class="dropdown-text">';
$array751 = array (
);
$output691 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array751)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments752 = array();
$arguments752['then'] = NULL;
$arguments752['else'] = NULL;
$arguments752['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array754 = array();
$array755 = array (
);$array754['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array755);

$expression756 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments752['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression756(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array754)
					),
					$renderingContext
				);
$arguments752['__thenClosure'] = $renderChildrenClosure753;

$output691 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);

$output691 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output691;
};

$output688 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output688 .= '
                                    ';
return $output688;
};
$arguments685 = array();
$arguments685['each'] = NULL;
$arguments685['as'] = NULL;
$arguments685['key'] = NULL;
$arguments685['reverse'] = false;
$arguments685['iteration'] = NULL;
$array687 = array (
);$arguments685['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array687);
$arguments685['as'] = 'child';

$output683 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output683 .= '
                                </ul>
                            ';
return $output683;
};
$arguments678 = array();
$arguments678['then'] = NULL;
$arguments678['else'] = NULL;
$arguments678['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array680 = array();
$array681 = array (
);$array680['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array681);

$expression682 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments678['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression682(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array680)
					),
					$renderingContext
				);
$arguments678['__thenClosure'] = $renderChildrenClosure679;

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);

$output596 .= '
                        </li>
                    ';
return $output596;
};

$output593 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output593 .= '
            ';
return $output593;
};
$arguments590 = array();
$arguments590['each'] = NULL;
$arguments590['as'] = NULL;
$arguments590['key'] = NULL;
$arguments590['reverse'] = false;
$arguments590['iteration'] = NULL;
$array592 = array (
);$arguments590['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array592);
$arguments590['as'] = 'item';

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output589 .= '
        </ul>
    ';
return $output589;
};
$arguments584 = array();
$arguments584['then'] = NULL;
$arguments584['else'] = NULL;
$arguments584['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array586 = array();
$array587 = array (
);$array586['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array587);

$expression588 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments584['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression588(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array586)
					),
					$renderingContext
				);
$arguments584['__thenClosure'] = $renderChildrenClosure585;

$output583 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output583 .= '
';
return $output583;
};
$arguments581 = array();
$arguments581['name'] = NULL;
$arguments581['name'] = 'MainNavigation';

$output491 .= NULL;

$output491 .= '

';

return $output491;
}


}
#