
<script type="text/javascript">
function stopform(){
	// Retrieve the code
	var code =document.getElementById ('text1').value;

	// Return false to prevent the form to submit
	return false;
}
</script>
<form action="" method="post" onsubmit="return stopform()">
<input id="text1" type="text"  value="" />
</form>
