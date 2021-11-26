<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP CALCULATOR</title>
</head>

<body>

<style type="text/css">

</style>

<script type="text/javascript">
let first_number ='';
let second_number = '';
let operation = '';
	
function concatToScreen(obj)
{
	var val = document.getElementById("screen_form").value;
	if (val.length < 13)
	{
		if (val == "0" || val == "OVERFLOW")
			 document.getElementById("screen_form").value = obj.innerHTML;
		else
			document.getElementById("screen_form").value = val.substr(0, val.length) + obj.innerHTML;
	}	
	else
		document.getElementById("screen_form").value = "OVERFLOW";
}

function concatOperation(obj)
{
	var val = document.getElementById("screen_form").value;
    first_number = val.substr(0, val.length);
    operation= obj.innerHTML

    clearScreen()

}

function result()
{
    console.log(first_number,operation);
	var val = document.getElementById("screen_form").value;
    console.log(first_number,operation,val);
    let result;
    if(operation == '+'){
        result=  parseFloat(first_number) + parseFloat(val)
       console.log(result)
    }
    if(operation == '-'){
        result=  parseFloat(first_number) - parseFloat(val)
       console.log(result)
    }
    if(operation == 'x'){
        result=  parseFloat(first_number) * parseFloat(val)
       console.log(result)
    }
    if(operation == '/'){
        result=  parseFloat(first_number) / parseFloat(val)
       console.log(result)
    }
   
    document.getElementById("screen_form").value = result.toFixed(2)
}


function clearScreen()
{
	document.getElementById("screen_form").value = "0";
}

function del()
{
	var str = document.getElementById("screen_form").value; 
	if (str != "0")
		document.getElementById("screen_form").value = str.substr(0, str.length - 1);
		
	
}

</script>

<div id="calculator_container">
<div id="calculatorScreen"> 
<form>

<input name="calc" onfocus="this.value=''" onblur="if (this.value == ''){this.value='0';}"id="screen_form" value="<?php
?>" type="text" />
</div>

<table >
<tr>
<td colspan="4"><button type="button" class="calcButtonOperator" style="width: 175px;" onclick="del()">DEL</button></td>

</tr>
<tr>
<td colspan="4"><button type="button" class="calcButtonOperator" style="width: 175px;" onclick="clearScreen()">AC</button></td>
</tr>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">7</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">8</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">9</button></td>
<td><button type="button" class="calcButtonOperator" onclick="concatOperation(this)">/</button></td>
</tr>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">4</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">5</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">6</button></td>
<td><button type="button" class="calcButtonOperator" onclick="concatOperation(this)">x</button></td>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">1</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">2</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">3</button></td>
<td><button type="button" class="calcButtonOperator" onclick="concatOperation(this)">-</button></td>
<tr>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">0</button></td>
<td><button type="button" class="calcButtonNum" onclick="concatToScreen(this)">.</button></td>
<td><input type="button" onclick="result()" value="=" class="calcButtonEq" />
<td><button type="button" class="calcButtonOperator" onclick="concatOperation(this)">+</button></td>
</tr>
</tr>
</tr>



</table>
</form>
</div>


</body>
</html>