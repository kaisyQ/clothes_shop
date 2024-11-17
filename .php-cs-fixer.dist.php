<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        
        '@PSR1' => true,

        '@PSR12' => true,

        'array_push' => true,
        
        'no_multiline_whitespace_around_double_arrow' => true,
        
        'protected_to_private' => true,
        
        'phpdoc_var_annotation_correct_order' => true,
        
        'phpdoc_types_order' => true,
        
        'no_useless_return' => true,
        
        'no_useless_else' => true,

        'explicit_string_variable' => true,

        'declare_strict_types' => true,

        'strict_comparison' => true,

        'strict_param' => true,

        'space_after_semicolon' => true,

        'no_empty_statement' => true,

        'semicolon_after_instruction' => true,

        'no_singleline_whitespace_before_semicolons' => true,

        'phpdoc_array_type' => true,

        'phpdoc_annotation_without_dot' => true,

        'no_empty_phpdoc' => true,

        'no_blank_lines_after_phpdoc' => true,

        'align_multiline_comment' => true,

        // @TODO add rules for phpunit

        'ternary_to_null_coalescing' => true,

        'standardize_not_equals' => true,

        'standardize_increment' => true,

        'ordered_imports' => true,

        'no_unused_imports' => true,

        'return_type_declaration' => true,

        'static_lambda' => true,

        'use_arrow_functions' => true,

        'date_time_immutable' => true,

    ])
    ->setFinder($finder)
;
