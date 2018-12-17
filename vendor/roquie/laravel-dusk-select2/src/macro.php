<?php
/**
 * Created by Roquie.
 * E-mail: roquie0@gmail.com
 * GitHub: Roquie
 * Date: 07/03/2017
 */

use Laravel\Dusk\Browser;
use Facebook\WebDriver\Exception\ElementNotVisibleException;

/**
 * Register simple macros for the Laravel Dusk.
 * $field - selector, or @element
 * $value - option value, may be multiple, eg. ['foo', 'bar']
 * $wait  - count of seconds for ajax loading.
 */
Browser::macro('select2', function ($field, $value = null, $wait = 2, $suffix = ' + .select2') {
    /** @var Browser $this */
    $element = $this->element($field.$suffix);
    if ($element) {
        // this is v4
        $elementSelector = $field.$suffix;
        $highlightedClass = '.select2-results__option--highlighted';
        $highlightedSelector = '.select2-results__options '.$highlightedClass;
        $selectableSelector = '.select2-results__options .select2-results__option';
        $searchSelector = '.select2-container.select2-container--open .select2-search__field';
    } else {
        // try v3
        $select = $this->element($field);
        $selectId = null;

        if (!$select || !($selectId = $select->getAttribute('id'))) {
            // selects must have ids
            return $this;
        }
        $elementSelector = '#s2id_'.$selectId;
        if (!$this->element($elementSelector)) {
            // give up
            return $this;
        }

        $highlightedClass = 'select2-highlighted';
        $highlightedSelector = '#select2-drop .'.$highlightedClass;
        $selectableSelector = '#select2-drop .select2-result-selectable';
        $searchSelector = '#select2-drop .select2-search:not(.select2-search-hidden) .select2-input, '
            .$elementSelector.' .select2-input';
    }


    $this->click($elementSelector);

    // if $value equal null, find random element and click him.
    // @todo: may be a couple of times move scroll to down (ajax paging)
    if (null === $value) {
        $this->waitFor($highlightedSelector);
        $this->script(implode('', [
            "var _dusk_s2_elements = document.querySelectorAll('$selectableSelector');",
            "document.querySelector('$highlightedSelector').classList.remove('$highlightedClass');",
            'var _dusk_s2_el = _dusk_s2_elements[Math.floor(Math.random()*(_dusk_s2_elements.length - 1))];',
            "_dusk_s2_el.classList.add('$highlightedClass');"
        ]));
        $this->click($highlightedSelector);

        return $this;
    }

    // check if search field exists and fill it.
    if ($element = $this->element($searchSelector)) {
        try {
            foreach ((array) $value as $item) {
                $element->sendKeys($item);
                $this->waitFor($highlightedSelector, $wait);
                $this->click($highlightedSelector);
            }

            return $this;
        } catch (ElementNotVisibleException $exception) {
            // ignore the exception and try another way
        }
    }

    // another way - w/o search field.
    $field = \str_replace('\\', '\\\\', $field);
    $this->script("jQuery(\"$field\").val((function () { return jQuery(\"$field option:contains('$value')\").val(); })()).trigger('change')");

    return $this;
});
