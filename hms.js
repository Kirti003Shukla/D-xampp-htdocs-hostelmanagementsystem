/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*studentmodal*/
var modal=document.getElementById('stumodal');
var modalbtn=document.getElementById('stumodalbtn');
var closebtn=document.getElementsByClassName('closebtn')[0];
modalbtn.addEventListener('click',openmodal);/*openmodal*/
function openmodal(){modal.style.display='block';}
window.addEventListener('click',outsideclick);
function outsideclick(s){if(s.target===modal){modal.style.display='none';}}
closebtn.addEventListener('click',closemodal);/*closemodal*/
function closemodal(){modal.style.display='none';}

/*admin modal*/
var modala=document.getElementById('adminmodal');
var modalabtn=document.getElementById('adminmodalbtn');
var closeadminbtn=document.getElementsByClassName('closeadminbtn')[0];
      modalbtna.addEventListener('click',openadminmodal);/*openmodal*/
      function openadminmodal(){modala.style.display='block';}
          closeadminbtn.addEventListener('click',closeadminmodal);/*closeadminmodal*/
          function closeadminmodal(){modala.style.display='none';}
                   window.addEventListener('click',aoutsideclick);
                   function aoutsideclick(a){if(a.target===modala){modala.style.display='none';}}

