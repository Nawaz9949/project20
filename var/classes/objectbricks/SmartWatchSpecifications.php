<?php

/**
 * Fields Summary:
 * - SalesPackage [textarea]
 * - StrapColor [input]
 * - StrapMaterial [input]
 * - Size [input]
 * - CallFunction [booleanSelect]
 * - WaterResistant [booleanSelect]
 * - IdealFor [input]
 * - CompatibleOS [input]
 * - weight [quantityValue]
 * - Warranty [input]
 * - Closure [input]
 * - BatteryType [input]
 * - ChargeTime [input]
 * - BatteryLife [input]
 * - ChargerType [input]
 * - StandByTime [input]
 * - Touchscreen [booleanSelect]
 * - Wifi [booleanSelect]
 * - GPS [booleanSelect]
 * - MessagingSupport [booleanSelect]
 * - EmailSupport [booleanSelect]
 * - CalorieCount [booleanSelect]
 * - StepCount [booleanSelect]
 * - HeartRateMonitor [booleanSelect]
 * - Compass [booleanSelect]
 * - Calendar [booleanSelect]
 * - AlarmClock [booleanSelect]
 * - NumberofButtons [numeric]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'SmartWatchSpecifications',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => '',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Layout',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'General',
             'type' => NULL,
             'region' => NULL,
             'title' => 'General',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'name' => 'SalesPackage',
                 'title' => '  Sales   Package',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'textarea',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxLength' => NULL,
                 'showCharCount' => false,
                 'excludeFromSearchIndex' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'StrapColor',
                 'title' => 'Strap Color',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'StrapMaterial',
                 'title' => 'StrapMaterial',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'Size',
                 'title' => 'Size',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'CallFunction',
                 'title' => 'CallFunction',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'WaterResistant',
                 'title' => 'WaterResistant',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'IdealFor',
                 'title' => 'IdealFor',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              7 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'CompatibleOS',
                 'title' => 'CompatibleOS',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
                 'name' => 'weight',
                 'title' => 'Weight',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'quantityValue',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'unitWidth' => '',
                 'defaultValue' => NULL,
                 'defaultUnit' => NULL,
                 'validUnits' => 
                array (
                ),
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'autoConvert' => false,
                 'defaultValueGenerator' => '',
              )),
              9 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'Warranty',
                 'title' => 'Warranty',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'ProductDetails',
             'type' => NULL,
             'region' => NULL,
             'title' => 'ProductDetails',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'Closure',
                 'title' => 'Closure',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'BatteryType',
                 'title' => 'BatteryType',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'ChargeTime',
                 'title' => 'ChargeTime',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'BatteryLife',
                 'title' => 'BatteryLife',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'ChargerType',
                 'title' => 'Charger Type',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'StandByTime',
                 'title' => 'StandByTime',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'ConnectivityFeatures',
             'type' => NULL,
             'region' => NULL,
             'title' => 'ConnectivityFeatures',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'Touchscreen',
                 'title' => 'Touchscreen',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'Wifi',
                 'title' => 'Wifi',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'GPS',
                 'title' => 'GPS',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'MessagingSupport',
                 'title' => 'MessagingSupport',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'EmailSupport',
                 'title' => 'EmailSupport',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Fitness And Watch Functions',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Fitness And Watch Functions',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'CalorieCount',
                 'title' => ' Calorie Count',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'StepCount',
                 'title' => 'StepCount',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'HeartRateMonitor',
                 'title' => 'HeartRateMonitor',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'Compass',
                 'title' => 'Compass',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'Calendar',
                 'title' => 'Calendar',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
                 'name' => 'AlarmClock',
                 'title' => 'AlarmClock',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'booleanSelect',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'yesLabel' => 'yes',
                 'noLabel' => 'no',
                 'emptyLabel' => 'Select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Select',
                    'value' => 0,
                  ),
                  1 => 
                  array (
                    'key' => 'yes',
                    'value' => 1,
                  ),
                  2 => 
                  array (
                    'key' => 'no',
                    'value' => -1,
                  ),
                ),
                 'width' => '',
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'name' => 'NumberofButtons',
                 'title' => 'Numberof Buttons',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'numeric',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Electronics',
      'fieldname' => 'ProductDetails',
    ),
  ),
));
