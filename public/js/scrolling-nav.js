
var cnt=0;
var arrs=[];
$(document).ready(function(){

  $(".like").click(function()
  {
    var test = document.getElementById('like-heart');
    var testclass=test.className;
    
  console.log(testclass=="far fa-heart");
  if(testclass=='far fa-heart')
   { 
    
    cnt++;
    arrs.push(cnt);
    console.log(arrs);

  $('.like').html('<i id="like-heart" style="color:red;"class="fas fa-heart"></i>');
 
  }
  else if(testclass=="fas fa-heart")
  {

    console.log(arrs);
    $('.like').html('<i id="like-heart" class="far fa-heart"></i>');

  }
  });
});

function openNav() {
  document.getElementById("mySidepanel").style.width = "300px";
  
}
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
