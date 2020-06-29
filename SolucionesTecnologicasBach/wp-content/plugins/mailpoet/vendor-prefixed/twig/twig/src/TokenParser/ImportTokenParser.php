<?php
 namespace MailPoetVendor\Twig\TokenParser; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Node\Expression\AssignNameExpression; use MailPoetVendor\Twig\Node\ImportNode; use MailPoetVendor\Twig\Token; class ImportTokenParser extends \MailPoetVendor\Twig\TokenParser\AbstractTokenParser { public function parse(\MailPoetVendor\Twig\Token $token) { $macro = $this->parser->getExpressionParser()->parseExpression(); $this->parser->getStream()->expect(\MailPoetVendor\Twig\Token::NAME_TYPE, 'as'); $var = new \MailPoetVendor\Twig\Node\Expression\AssignNameExpression($this->parser->getStream()->expect(\MailPoetVendor\Twig\Token::NAME_TYPE)->getValue(), $token->getLine()); $this->parser->getStream()->expect(\MailPoetVendor\Twig\Token::BLOCK_END_TYPE); $this->parser->addImportedSymbol('template', $var->getAttribute('name')); return new \MailPoetVendor\Twig\Node\ImportNode($macro, $var, $token->getLine(), $this->getTag()); } public function getTag() { return 'import'; } } \class_alias('MailPoetVendor\\Twig\\TokenParser\\ImportTokenParser', 'MailPoetVendor\\Twig_TokenParser_Import'); 