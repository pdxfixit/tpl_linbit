<?php

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

class GantryFeatureMyCustomStyle extends GantryFeature {

    var $_feature_name = 'linbit';

    function isEnabled() {
        return true;
    }

    function isInPosition($position) {
        return false;
    }

    function init() {
        global $gantry;

        //demo styles
        $gantry->addStyle("linbit.css");
    }

}
