<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('plugins/TinyMCEPlugin')
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        'concat_space' => false,
        'phpdoc_no_alias_tag' => false,
        'yoda_style' => null,
        'array_syntax' => null,
        'no_superfluous_phpdoc_tags' => null,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
            'imports_order' => ['class', 'function', 'const']
        ],
        'blank_line_after_namespace' => true,
        'no_multiline_whitespace_around_double_arrow' => null,
    ])
    ->setFinder($finder)
;
