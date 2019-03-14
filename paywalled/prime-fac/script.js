$(document).ready(function() {
  $('#factors').hide();
  
  $('#bttn').on('click', () => {
    var i;
    var $factors = $('#factors').val();
    var $number = $('#number').val();
    var primeA = [];
    

    function primeFac(number) {
  $('#error').hide();
      for(i=2; i <= number/i ; i++){
        console.log('Factor = '+i+'/ Number = ' +number);
        while (number%i === 0) {
          number=number/i;
          primeA.push(i);
          console.log('Factor = '+i+'/ Number = ' +number);
        }
      }
      if($number < 1 || $number < 0 ){
        $('#error').text('Please Input Positive Integers Only !');
        $('#error').show();
      }
      

      if($number == 666){
        console.log('hello');
        $('#factors').show();
        $('#evil').fadeIn(2000).css("display","block");
      }
      else{
        $('#evil').hide();  
      }
      if($number == 1){
        primeA.push($number);
      }else if (number > 1) {
        primeA.push(number);
      }
      
      
    }// end of function primeFac
    primeFac($number);
    var newArr = primeA.join(',').replace(/,/g, 'x').split();
    $('#factors').text(newArr);
    $('#factors').fadeIn(400);
  })// end of event click

$('#options').on('click',()=>{
  
  function test(){
    var CASE_PERFECT = "pfctSqr";
    var CASE_NON_PERFECT = "nPfct";
    var CASE_NUMBER_ONE = "nOne";
    var CASE_NEGATIVE = "negative";
    var CASE_DECIMAL = "decimal";
    var testCase = $('#options').val();
    
    if(CASE_PERFECT === testCase){
      console.log('case positive');
      $('#number').val(36);
      
    }else if(CASE_NON_PERFECT === testCase){
      console.log('case non perfect');
      $('#number').val(10);
      
    }else if(CASE_NUMBER_ONE === testCase){
      console.log('case number 1');
      $('#number').val(1);
      
    }else if(CASE_NEGATIVE === testCase){
      console.log('case negative');
      $('#number').val(-10);
      
    }else if(CASE_DECIMAL === testCase){
      console.log('case decimal');
      $('#number').val(0.5);
      
    }
    
}//end of function test
test();
})//end click
})// end of doc ready