$(document).ready(function(){
  $("#date").html(new Date().getFullYear() + " - Scientist.");
  
let head = "head.html"
let footer = "footer.html"
     $.get(head, function(data, status){
       $(".headjs").html(data);
    });
$.get(footer, function(data, status){
       $(".footerjs").html(data);
    });
  $(".icon").click(function(){
  $("#nv").slideToggle('slow');
  });

$('.tlog1').click(function() {
     if(confirm("are you student? Click OK!")){
        window.location.assign('dalib/login.html');
     }else{
     window.location.assign('mudir/login.html');
     }
 });

$('.tlog2, .rbtn').click(function() {
     window.location.assign('dalib/studentreg.php');
 });

$('.abbtn').click(function() {
     window.location.assign('about.html');
 });

$('.islamiyyabtn').click(function() {
     window.location.assign('islamiyya.html');
 });

$('.languagesbtn').click(function() {
     window.location.assign('../tablet');
 });

$('.westernbtn').click(function() {
     window.location.assign('western.html');
 });

$('.onlinebtn').click(function() {
     window.location.assign('../syrup');
 });
$('.anouncebtn').click(function() {
     window.location.assign('../water');
 });

});