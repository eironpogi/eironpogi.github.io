<table>
    <tr>
        <th><h1 id="dice"></h1></th>
        <th><h1 id="dice2"></h1></th>
        <th><h1 id="dice3"></h1></th>
    </tr>
</table>



<button onclick="roll()">roll!</button>
<h1 id="q">1 = 0</h1>
<h1 id="w">2 = 0</h1>
<h1 id="e">3 = 0</h1>
<h1 id="r">4 = 0</h1>
<h1 id="t">5 = 0</h1>
<h1 id="y">6 = 0</h1>
<h1 id="tots">Total = 0</h1>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>

var one = 0;
var two = 0;
var three = 0;
var four = 0;
var five = 0;
var six = 0;
var total = 0;


function roll(){
    var x = Math.floor((Math.random() * 6) + 1);
    var xy = Math.floor((Math.random() * 6) + 1);
    var xz = Math.floor((Math.random() * 6) + 1);
    $('#dice').html('<img src="'+x+'.JPG" />');
    $('#dice2').html('<img src="'+xy+'.JPG" />');
    $('#dice3').html('<img src="'+xz+'.JPG" />');
    if(x==1){
        one+=1; 
    }else if(x==2){
        two+=1;
    }else if(x==3){
        three+=1;
    }else if(x==4){
        four+=1;
    }else if(x==5){
        five+=1;
    }else if(x==6){
        six+=1;
    }
    if(xy==1){
        one+=1; 
    }else if(xy==2){
        two+=1;
    }else if(xy==3){
        three+=1;
    }else if(xy==4){
        four+=1;
    }else if(xy==5){
        five+=1;
    }else if(xy==6){
        six+=1;
    }
    if(xz==1){
        one+=1; 
    }else if(xz==2){
        two+=1;
    }else if(xz==3){
        three+=1;
    }else if(xz==4){
        four+=1;
    }else if(xz==5){
        five+=1;
    }else if(xz==6) {
        six+=1;
    }
    total+=3;
    
    $('#q').html('1 = '+one+' -> <span style="color:red;">'+((one/total)*100))+'%</span>';
    $('#w').html('2 = '+two+' -> <span style="color:red;">'+((two/total)*100))+'%</span>';
    $('#e').html('3 = '+three+' -> <span style="color:red;">'+((three/total)*100))+'%</span>';
    $('#r').html('4 = '+four+' -> <span style="color:red;">'+((four/total)*100))+'%</span>';
    $('#t').html('5 = '+five+' -> <span style="color:red;">'+((five/total)*100))+'%</span>';
    $('#y').html('6 = '+six+' -> <span style="color:red;">'+((six/total)*100))+'%</span>';
    
    $('#tots').html('Total ='+total);
}
    
    
</script>