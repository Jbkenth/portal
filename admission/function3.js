function c(theForm){
  var counter = 300;
  setInterval(function(){
    counter--;
    if (counter === 0){
      span = document.getElementById('count');
      span.innerHTML = "";
      span2 = document.getElementById("count2");
      span.innerHTML = "";
      clearInterval(counter);
    }
  }, 10);
  if (theForm.a1.checked == false && theForm.a2.checked == false && theForm.a3.checked == false){
    counter >= 0;
    span = document.getElementById('count');
    span.innerHTML = "Please check atleast one of the list!!";
    return false;
  }
  if (theForm.a1.checked == true && theForm.a2.checked == true && theForm.a3.checked == true){
    span = document.getElementById('count');
    span.innerHTML = "";
    return false;
  }
  if (theForm.b1.checked == false && theForm.b2.checked == false){
    span2 = document.getElementById("count2");
    counter >= 0;
    span2.innerHTML = 'Please check atleast one of the list!!';
    return false;
  }else{
    return true;
  }
}
function start(){
  c(this);
}