<form>
<fieldset>
<label for="target">Type Something:</label>
<input id="target" type="text">
</fieldset>
</form>
<button id="other">
Trigger the handler
</button>
<script type="text/javascript" src="/resources/events.js"></script>
<script>
var xTriggered = 0;
$( "#target" ).keydown(function( event ) {
if ( event.which == 13 ) {
event.preventDefault();
}
xTriggered++;
var msg = "Handler for .keydown() called " + xTriggered + " time(s).";
$.print( msg, "html" );
$.print( event );
});
$( "#other" ).click(function() {
$( "#target" ).keydown();
});
</script>