function c11(){
    let a = document.getElementById('c1');
    let b = document.getElementById('c2');
    let c = document.getElementById('c3');
    let d = document.getElementById('c4');
    let e = document.getElementById('validation-message');
    a.checked = true;
    b.checked = false;
    c.checked = false;
    d.checked = false;
    if (!a.clicked == true){
      e.style.visibility = 'hidden';
    } 
}
function cc(){
    let a = document.getElementById('c1');
    let b = document.getElementById('c2');
    let c = document.getElementById('c3');
    let d = document.getElementById('c4');
    let e = document.getElementById('validation-message');
    a.checked = false;
    b.checked = true;
    c.checked = false;
    d.checked = false; 
    if (!b.clicked == true){
        e.style.visibility = 'hidden';
    } 
}
function ccc(){
    let a = document.getElementById('c1');
    let b = document.getElementById('c2');
    let c = document.getElementById('c3');
    let d = document.getElementById('c4');
    let e = document.getElementById('validation-message');
    a.checked = false;
    b.checked = false;
    c.checked = true;
    d.checked = false; 
    if (!c.clicked == true){
        e.style.visibility = 'hidden';
    } 
}
function cccc(){
    let a = document.getElementById('c1');
    let b = document.getElementById('c2');
    let c = document.getElementById('c3');
    let d = document.getElementById('c4');
    let e = document.getElementById('validation-message');
    a.checked = false;
    b.checked = false;
    c.checked = false;
    d.checked = true; 
    if (!d.clicked == true){
        e.style.visibility = 'hidden';
    } 
}
function d1(){
  let a = document.getElementById('a1');
  let b = document.getElementById('a2');
  let c = document.getElementById('a3');
  let d = document.getElementById('count');
  a.checked = true;
  b.checked = false;
  c.checked = false;
  if (!a.clicked == true){
    d.style.visibility = 'hidden';
  }
}
function d2(){
  let a = document.getElementById('a1');
  let b = document.getElementById('a2');
  let c = document.getElementById('a3');
  let d = document.getElementById('count');
  a.checked = false;
  b.checked = true;
  c.checked = false;
  if (!b.clicked == true){
    d.style.visibility = 'hidden';
  }
}
function d3(){
  let a = document.getElementById('a1');
  let b = document.getElementById('a2');
  let c = document.getElementById('a3');
  let d = document.getElementById('count');
  a.checked = false;
  b.checked = false;
  c.checked = true;
  if (!c.clicked == true){
    d.style.visibility = 'hidden';
  }
}
function d4(){
  let a = document.getElementById('b1');
  let b = document.getElementById('b2');
  let d = document.getElementById('count2');
  a.checked = true;
  b.checked = false;
  if (!a.clicked == true){
    d.style.visibility = 'hidden';
  }
}
function d5(){
  let a = document.getElementById('b1');
  let b = document.getElementById('b2');
  let d = document.getElementById('count2');
  a.checked = false;
  b.checked = true;
  if (!b.clicked == true){
    d.style.visibility = 'hidden';
  }
}

var loadFile = function(event) {
	var image = document.getElementById('output');
    let get = document.getElementById('finput');
    let get2 = document.getElementById('r');
	image.src = URL.createObjectURL(event.target.files[0]);
    if (!get.clicked == true){
        get2.style.visibility = 'hidden';
    }
}
function l(theForm){
      if (theForm.a1.checked == false && theForm.a2.checked == false && theForm.a3.checked == false){
        span = document.getElementById('count');
        span.style.color = '#a94442';
        span.style.marginLeft = '120px';
        span.style.backgroundColor = '#f2dede';
        span.style.padding = '3px';
        span.style.border = '1px solid #a94442';
        span.style.borderRadius = '5px';
        span.innerHTML = "Please check atleast one of the list!!";
        return false;
      }
      if (theForm.b1.checked == false && theForm.b2.checked == false){
        span2 = document.getElementById('count2');
        span2.style.color = '#a94442';
        span2.style.marginLeft = '430px';
        span2.style.backgroundColor = '#f2dede';
        span2.style.padding = '3px';
        span2.style.border = '1px solid #a94442';
        span2.style.borderRadius = '5px';
        span2.innerHTML = 'Please choose your gender!!';
        return false;
      }
      else{
        return true;
      }
    
  }

function photo(){
    let get = document.getElementById('finput');
    let get2 = document.getElementById('r');
    get.required = true;
    get2.style.color = '#a94442';
    get2.style.backgroundColor = '#f2dede';
    get2.style.padding = '3px';
    get2.style.border = '1px solid #a94442';
    get2.style.borderRadius = '5px';
    get2.innerHTML = 'Please upload your photo!!';
}