const a = document.getElementById('present'); 
const b = document.getElementById('absent'); 
const c = document.getElementById('total_day'); 
const a2 = document.getElementById('present2'); 
const b2 = document.getElementById('absent2'); 
const c2 = document.getElementById('total_day2'); 
const a3 = document.getElementById('present3'); 
const b3 = document.getElementById('absent3'); 
const c3 = document.getElementById('total_day3'); 
const a4 = document.getElementById('present4'); 
const b4 = document.getElementById('absent4'); 
const c4 = document.getElementById('total_day4'); 


  function enable(){
    let get = document.getElementById('a');
    let get2 = document.getElementById('a2');
    let get3 = document.getElementById('a3');
    let get4 = document.getElementById('a4');
    let getb = document.getElementById('b');
    let getb2 = document.getElementById('b2');
    let getb3 = document.getElementById('b3');
    let getb4 = document.getElementById('b4');
    let getc = document.getElementById('c');
    let getc2 = document.getElementById('c2');
    let getc3 = document.getElementById('c3');
    let getc4 = document.getElementById('c4');
   
    get.disabled = false;
    get2.disabled = false;
   get3.disabled = false;
    get4.disabled = false;
    getb.disabled = false;
    getb2.disabled = false;
   getb3.disabled = false;
    getb4.disabled = false;
    getc.disabled = false;
    getc2.disabled = false;
   getc3.disabled = false;
    getc4.disabled = false;
    
    
    a.innerHTML = document.querySelectorAll('input[name=a]:checked').length;
  b.innerHTML = document.querySelectorAll('input[name=a]:not(:checked)').length;
  c.innerHTML = document.querySelectorAll('input[name=a]').length;
     a2.innerHTML = document.querySelectorAll('input[name=a2]:checked').length;
  b2.innerHTML = document.querySelectorAll('input[name=a2]:not(:checked)').length;
  c2.innerHTML = document.querySelectorAll('input[name=a2]').length;
a3.innerHTML = document.querySelectorAll('input[name=a3]:checked').length;
  b3.innerHTML = document.querySelectorAll('input[name=a3]:not(:checked)').length;
  c3.innerHTML = document.querySelectorAll('input[name=a3]').length;
    a4.innerHTML = document.querySelectorAll('input[name=a4]:checked').length;
  b4.innerHTML = document.querySelectorAll('input[name=a4]:not(:checked)').length;
  c4.innerHTML = document.querySelectorAll('input[name=a4]').length;
  }
  document.querySelectorAll("input[name=a]").forEach(i=>{
 i.onclick = () => enable();});
  document.querySelectorAll("input[name=a2]").forEach(i=>{
 i.onclick = () => enable();});
  document.querySelectorAll("input[name=a3]").forEach(i=>{
 i.onclick = () => enable();});
  document.querySelectorAll("input[name=a4]").forEach(i=>{
 i.onclick = () => enable();});