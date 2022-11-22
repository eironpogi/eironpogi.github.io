<table width="100%" border="1" height="50%">
    <tr>
        <th id="first">&nbsp;</th>
        <th id="second">&nbsp;</th>
        <th id="third">&nbsp;</th>
    </tr>
</table><br>
<button id="btn" style="width:100%">ROLL</button><br>
<h1 id="clicks"></h1>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
var total = 0;
$('#btn').click(function(){
    var one = Math.floor((Math.random() * 6) + 1);
    var two = Math.floor((Math.random() * 6) + 1);
    var three = Math.floor((Math.random() * 6) + 1);
    
    var colors = ['black','white','blue','red','yellow','pink','green'];
    
    $('#first').css("background-color", colors[one]);
    $('#second').css("background-color", colors[two]);
    $('#third').css("background-color", colors[three]);
    total+=1;
    $('#clicks').html(total);
})
    
</script>