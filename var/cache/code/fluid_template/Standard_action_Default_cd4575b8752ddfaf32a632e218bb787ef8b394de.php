<?php

class Standard_action_Default_cd4575b8752ddfaf32a632e218bb787ef8b394de extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output5 = '';

$output5 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['data'] = NULL;
$arguments6['typoscriptObjectPath'] = NULL;
$arguments6['currentValueKey'] = NULL;
$arguments6['table'] = '';
$arguments6['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array9);
$array8['colPos'] = 8;
$arguments6['data'] = $array8;
$renderChildrenClosure7 = ($arguments6['data'] !== null) ? function() use ($arguments6) { return $arguments6['data']; } : $renderChildrenClosure7;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '

    <div class="section section-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['data'] = NULL;
$arguments10['typoscriptObjectPath'] = NULL;
$arguments10['currentValueKey'] = NULL;
$arguments10['table'] = '';
$arguments10['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array13);
$array12['colPos'] = 0;
$arguments10['data'] = $array12;
$renderChildrenClosure11 = ($arguments10['data'] !== null) ? function() use ($arguments10) { return $arguments10['data']; } : $renderChildrenClosure11;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output5 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['data'] = NULL;
$arguments14['typoscriptObjectPath'] = NULL;
$arguments14['currentValueKey'] = NULL;
$arguments14['table'] = '';
$arguments14['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array17);
$array16['colPos'] = 9;
$arguments14['data'] = $array16;
$renderChildrenClosure15 = ($arguments14['data'] !== null) ? function() use ($arguments14) { return $arguments14['data']; } : $renderChildrenClosure15;
$output5 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output5 .= '

';

return $output5;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output18 = '';

$output18 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'Structure/FooterContent';
$arguments19['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '

';

return $output18;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output22 = '';

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'Default';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['data'] = NULL;
$arguments28['typoscriptObjectPath'] = NULL;
$arguments28['currentValueKey'] = NULL;
$arguments28['table'] = '';
$arguments28['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array31);
$array30['colPos'] = 3;
$arguments28['data'] = $array30;
$renderChildrenClosure29 = ($arguments28['data'] !== null) ? function() use ($arguments28) { return $arguments28['data']; } : $renderChildrenClosure29;
$output27 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '

';
return $output27;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'Border';

$output22 .= NULL;

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['data'] = NULL;
$arguments35['typoscriptObjectPath'] = NULL;
$arguments35['currentValueKey'] = NULL;
$arguments35['table'] = '';
$arguments35['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array38);
$array37['colPos'] = 8;
$arguments35['data'] = $array37;
$renderChildrenClosure36 = ($arguments35['data'] !== null) ? function() use ($arguments35) { return $arguments35['data']; } : $renderChildrenClosure36;
$output34 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '

    <div class="section section-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['data'] = NULL;
$arguments39['typoscriptObjectPath'] = NULL;
$arguments39['currentValueKey'] = NULL;
$arguments39['table'] = '';
$arguments39['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array42);
$array41['colPos'] = 0;
$arguments39['data'] = $array41;
$renderChildrenClosure40 = ($arguments39['data'] !== null) ? function() use ($arguments39) { return $arguments39['data']; } : $renderChildrenClosure40;
$output34 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output34 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['data'] = NULL;
$arguments43['typoscriptObjectPath'] = NULL;
$arguments43['currentValueKey'] = NULL;
$arguments43['table'] = '';
$arguments43['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array46);
$array45['colPos'] = 9;
$arguments43['data'] = $array45;
$renderChildrenClosure44 = ($arguments43['data'] !== null) ? function() use ($arguments43) { return $arguments43['data']; } : $renderChildrenClosure44;
$output34 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output34 .= '

';
return $output34;
};
$arguments32 = array();
$arguments32['name'] = NULL;
$arguments32['name'] = 'Main';

$output22 .= NULL;

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['section'] = NULL;
$arguments50['partial'] = NULL;
$arguments50['delegate'] = NULL;
$arguments50['renderable'] = NULL;
$arguments50['arguments'] = array (
);
$arguments50['optional'] = false;
$arguments50['default'] = NULL;
$arguments50['contentAs'] = NULL;
$arguments50['debug'] = true;
$arguments50['partial'] = 'Structure/FooterContent';
$arguments50['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '

';
return $output49;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Footer';

$output22 .= NULL;

$output22 .= '

';

return $output22;
}


}
#