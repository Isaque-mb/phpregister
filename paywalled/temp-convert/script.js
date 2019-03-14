$(document).ready(()=>{


  $('#unit1').on('change',()=>{
    var $unit1 = $('#unit1').val();
    
    if($unit1 == 'f'){
    $("#unit2 option[value*='f']").prop('disabled',true);
    $("#unit2 option[value*='c']").prop('disabled',false);
    $("#unit2 option[value*='k']").prop('disabled',false);
  }else if($unit1 == 'c'){
    $("#unit2 option[value*='c']").prop('disabled',true);
    $("#unit2 option[value*='k']").prop('disabled',false);
    $("#unit2 option[value*='f']").prop('disabled',false);
  }else if($unit1 == 'k'){
    $("#unit2 option[value*='k']").prop('disabled',true);
    $("#unit2 option[value*='c']").prop('disabled',false);
    $("#unit2 option[value*='f']").prop('disabled',false);
  }
    
  });
  
  $('#unit2').on('change',()=>{
    var $unit2 = $('#unit2').val();
  });
  
  
  $('#bttn').on('click', function convert(){
    var $unit1 = $('#unit1').val();
    var $unit2 = $('#unit2').val();
    var $value1 = $('#value1').val();
    var $decimal = $('#decimal').val();
    $value1 = Number($value1);
    $('#error').hide();
    $('#conversion').hide();


  if ($unit1 === null || $unit2 === null ) {//error
    $('#error').show().text('Insert a valid Input')
  }else if ($value1 == 0 && $value1.length == undefined ) {//error
    $('#error').show().text('Insert a valid Input')  
  }else if ($unit1 == 'f' && $unit2 == 'c') {
    var convertedFC = (($value1 - 32) /1.8).toFixed($decimal);
    $('#conversion').show().text(convertedFC +' °C');
    
    if (convertedFC >= 26.67) {
    $('.wrapper').css('background-image','linear-gradient(to right, #FF8008, #FFC837)');
    }else if(convertedFC < 4.44444){
    $('.wrapper').css('background-image','linear-gradient(to right, #4b6cb7, #182848)');
    }else {
    $('.wrapper').css('background','rgba(50, 75, 90, 0.7)');
    }
    
  }else if($unit1 == 'f' && $unit2 == 'k'){
    var convertedFK = (($value1 + 459.67)*(5/9)).toFixed($decimal);
    $('#conversion').show().text(convertedFK +' K');
    
    if (convertedFK >= 299.8) {
    $('.wrapper').css('background-image','linear-gradient(to right, #FF8008, #FFC837)');
    }else if(convertedFK <  277.594){
    $('.wrapper').css('background-image','linear-gradient(to right, #4b6cb7, #182848)');
    }else {
    $('.wrapper').css('background','rgba(50, 75, 90, 0.7)');
    }
    
  }else if($unit1 == 'c' && $unit2 == 'f'){
    var convertedCF = (($value1 * 1.8) + 32).toFixed($decimal);
    $('#conversion').show().text(convertedCF+' °F');
    if (convertedCF >= 80) {
      $('.wrapper').css('background-image','linear-gradient(to right, #FF8008, #FFC837)');
    }else if(convertedCF < 40){
      $('.wrapper').css('background-image','linear-gradient(to right, #4b6cb7, #182848)');
    }else {
      $('.wrapper').css('background','rgba(50, 75, 90, 0.7)');
    }
    
  }else if($unit1 == 'c' && $unit2 == 'k'){
    var convertedCK = ($value1 + 273.15).toFixed($decimal);
    $('#conversion').show().text(convertedCK + ' K');
    
    if (convertedCK >= 299.8) {
    $('.wrapper').css('background-image','linear-gradient(to right, #FF8008, #FFC837)');
    }else if(convertedCK < 277.594){
    $('.wrapper').css('background-image','linear-gradient(to right, #4b6cb7, #182848)');
    }else {
    $('.wrapper').css('background','rgba(50, 75, 90, 0.7)');
    }
    
  }else if($unit1 == 'k' && $unit2 == 'f'){
    var convertedKF = (($value1 * 1.8)-459.67).toFixed($decimal);
    $('#conversion').show().text(convertedKF + ' °F');
    if (convertedKF >= 80) {
    $('.wrapper').css('background-image','linear-gradient(to right, #FF8008, #FFC837)');
    }else if(convertedKF < 40){
    $('.wrapper').css('background-image','linear-gradient(to right, #4b6cb7, #182848)');
    }else {
    $('.wrapper').css('background','rgba(50, 75, 90, 0.7)');
    }
    
  }else if($unit1 == 'k' && $unit2 == 'c'){
    var convertedKC = ($value1 - 273.15).toFixed($decimal);
    $('#conversion').show().text(convertedKC + '°C');
    
    if (convertedKC >= 26.67) {
    $('.wrapper').css('background-image','linear-gradient(to right, #FF8008, #FFC837)');
  }else if(convertedKC < 4.44444){
    $('.wrapper').css('background-image','linear-gradient(to right, #4b6cb7, #182848)');
    }else {
    $('.wrapper').css('background','rgba(50, 75, 90, 0.7)');
    }
    
  }else{
    console.log('NO CASE');
  }
  
  
});//bttn click

$('.test-options').on('change', ()=>{
    testing();
});
  
  
function testing(){
  var testcase = $('.test-options').val();
  
  switch (testcase) {
    case 'correctC':
    $('#unit1').val('f');
    $('#value1').val(32);
    $('#unit2').val('c');
        break;
    case 'correctH':
      $('#unit1').val('f');
      $('#value1').val(80);
      $('#unit2').val('c');
        break;
    case 'correctN':
      $('#unit1').val('f');
      $('#value1').val(50);
      $('#unit2').val('c');
        break;
    case 'no-unit':
      $('#unit1').val('');
      $('#value1').val(40);
      $('#unit2').val('c');
        break;
    case 'no-convert':
      $('#unit1').val('f');
      $('#value1').val(40);
      $('#unit2').val('');
        break;
    case 'two-dots':
      $('#unit1').val('f');
      $('#value1').val(40.2);
      $('#unit2').val('c');
        break;
    default:
    console.log('ERROR');
  }
  
  
}  
  

});