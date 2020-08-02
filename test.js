var day;
var text="Invalid";
function cal_per(){
var cons=176;
var x=Number(document.getElementById('txt').value);
//var x=Number(document.getElementById('quantiti').value);
//day=x*8;
if(isNaN(x)||x<0||x>100){
    document.getElementById('result').value=text;
}
else {
    var r=(x/100)*cons;
    var result=(176-r)/8;
    document.getElementById('result').value=Math.floor(result)+" days";
}
return false;
}
function cal_day(){
    var con=100;
    var x=Number(document.getElementById('txt1').value);
    if(isNaN(x)||x<0||x>22){
        document.getElementById('result1').value=text;
    }
    else {
        day=x*8;
        var r=(day/176)*con;
        document.getElementById('result1').value=Math.floor(r)+"%";
    }
    return false;
}
function cal_time(){
    var con=100;
    var x=Number(document.getElementById('txt2').value);
    if(isNaN(x)||x<0||x>176){
        document.getElementById('result2').value=text;
    }
    else {
        //day=x*8;
        var r=(x/176)*con;
        document.getElementById('result2').value=Math.floor(r)+"%";       
    }
    return false;
}
function reset(){
    document.getElementById('form').reset();
}

/*function quantity() {
    var select = document.getElementById('quantiti');
    for (var i = 0; i <= 99; i++) {
      select.options[select.options.length] = new Option(i + 1, i);
    }
  }
  window.onload = quantity;*/