/**
 * Created by Sean on 28/07/2016.
 */

global.$ = global.jQuery = require('jquery')
require('jquery-ui/ui/widgets/datepicker')



$( function() {
    $( "#datepicker" ).datepicker();
} );

