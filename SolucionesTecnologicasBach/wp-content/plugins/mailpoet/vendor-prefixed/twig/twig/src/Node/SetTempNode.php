<?php
 namespace MailPoetVendor\Twig\Node; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Compiler; class SetTempNode extends \MailPoetVendor\Twig\Node\Node { public function __construct($name, $lineno) { parent::__construct([], ['name' => $name], $lineno); } public function compile(\MailPoetVendor\Twig\Compiler $compiler) { $name = $this->getAttribute('name'); $compiler->addDebugInfo($this)->write('if (isset($context[')->string($name)->raw('])) { $_')->raw($name)->raw('_ = $context[')->repr($name)->raw(']; } else { $_')->raw($name)->raw("_ = null; }\n"); } } \class_alias('MailPoetVendor\\Twig\\Node\\SetTempNode', 'MailPoetVendor\\Twig_Node_SetTemp'); 