<?php

/**
 * Add Blade Directives
 */
$blade = container('view')->getEngineResolver()->resolve('blade')->getCompiler();


/**
 * @svg() Embeds SVG
 */
$blade->directive('svg', function ($expression) {
    return '<?php \Flip\SVG::embed('.$expression.'); ?>';
});

/**
 * @components() Renders Components in a main view
 */

$blade->directive('components', function ($expression) {
    return '<?php \Flip\Components::render('.$expression.'); ?>';
});

/**
 * @acfrepeater()
 */

$blade->directive('acfrepeater', function ($expression) {
    return '<?php if (have_rows('. $expression .')): while (have_rows('. $expression .')) : the_row(); ?>';
});

/**
 * @acfrepeaterend()
 */

$blade->directive('endrepeater', function ($expression) {
    return '<?php endwhile; endif; ?>';
});

/**
 * @acf()
 */

$blade->directive('acf', function ($expression) {
    return '<?php echo ACFField::get('. $expression .'); ?>';
});