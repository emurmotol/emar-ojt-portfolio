// toXML is a jQuery plugin that turns our form editor into XML
// @todo this is a total mess that has to be refactored
(function($) {
  'use strict';
  jQuery.fn.toXML = function(_helpers) {

    var serialStr = '';

    var fieldOptions = function($field) {
      let options = [];
      jQuery('.sortable-options li', $field).each(function() {
        let $option = jQuery(this),
          attrs = {
            value: jQuery('.option-value', $option).val(),
            selected: jQuery('.option-selected', $option).is(':checked')
          },
          option = _helpers.markup('option', jQuery('.option-label', $option).val(), attrs).outerHTML;
        options.push('\n\t\t\t' + option);
      });
      return options.join('') + '\n\t\t';
    };

    // Begin the core plugin
    this.each(function() {
      let sortableFields = this;
      if (sortableFields.childNodes.length >= 1) {
        serialStr += '<form-template>\n\t<fields>';
        // build new xml
        _helpers.forEach(sortableFields.childNodes, function(index, field) {
          index = index;
          var $field = jQuery(field);
          var fieldData = $field.data('fieldData');

          if (!($field.hasClass('disabled'))) {
            var roleVals = jQuery('.roles-field:checked', field).map(function() {
              return this.value;
            }).get();
            var enableOther = jQuery('[name="enable-other"]:checked', field).length;

            let types = _helpers.getTypes($field);
            var xmlAttrs = {
              className: fieldData.className,
              description: jQuery('input.fld-description', $field).val(),
              label: jQuery('.fld-label', $field).val(),
              maxlength: jQuery('input.fld-maxlength', $field).val(),
              multiple: jQuery('input[name="multiple"]', $field).is(':checked'),
              name: jQuery('input.fld-name', $field).val(),
              placeholder: jQuery('input.fld-placeholder', $field).val(),
              required: jQuery('input.required', $field).is(':checked'),
              toggle: jQuery('.checkbox-toggle', $field).is(':checked'),
              type: types.type,
              subtype: types.subtype
            };
            if (roleVals.length) {
              xmlAttrs.role = roleVals.join(',');
            }
            if (enableOther) {
              xmlAttrs.enableOther = 'true';
            }
            xmlAttrs = _helpers.trimAttrs(xmlAttrs);
            xmlAttrs = _helpers.escapeAttrs(xmlAttrs);
            var multipleField = xmlAttrs.type.match(/(select|checkbox-group|radio-group)/);

            var fieldContent = '',
              xmlField;
            if (multipleField) {
              fieldContent = fieldOptions($field);
            }

            xmlField = _helpers.markup('field', fieldContent, xmlAttrs);
            serialStr += '\n\t\t' + xmlField.outerHTML;
          }
        });
        serialStr += '\n\t</fields>\n</form-template>';
      } // if "jQuery(this).children().length >= 1"

    });

    return serialStr;
  };
})(jQuery);
