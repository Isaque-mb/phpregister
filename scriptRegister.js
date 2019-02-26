document.getElementById('username').focus();

var submitbttn = document.getElementById('submitbttn');
submitbttn.addEventListener('click',bttnClicked);
  
 $('#error').css('display','none');
 $('#success').css('display','none');

function bttnClicked() {
  console.log('Clicked');
  validate();
}



function validate(){
 var valid;
 var html = "";
 var uName = $('#username').val();
 var age = $('#age').val();
 var pWord1 = $('#pword1').val();
 var pWord2 = $('#pword2').val();
 var email1 = $('#email1').val();
 var email2 = $('#email2').val();
 var radio = document.querySelector('input[name="gender"]:checked');

if(uName.length < 4){
 $('#success').css('display','none');
 $('#error').slideDown('slow').css('display','block');
 $('#error').text("Username must have at least 4 characters");
 valid = false;
}
else if(uName.length == 0){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text(" Username must have at least 4 characters");
  valid = false;
}
// else if(age < 4 || age > 110){
//   $('#success').css('display','none');
//   $('#error').slideDown('slow').css('display','block');
//   $('#error').text("Age range allowed ( 4-110 ) years olds");
//   valid = false;
// }
else if(pWord1.length && pWord2.length < 4){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Password must have at least 4 characters");
  valid = false;
}
else if(pWord1.includes(uName)){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Passwords can't username in it");
  valid = false;
}
else if(pWord1.toLowerCase() === pword1){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Password must have an upper case letter");
  valid = false;
}
else if(pWord1.toUpperCase() === pword1){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Password must have a lower case letter");
  valid = false;
}
else if(pWord1 !== pWord2){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Passwords don't match");
  valid = false;
}
else if(email1 !== email2){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Emails don't match");
  valid=false;
}
else if(email1.indexOf("@")== -1 || email1.indexOf(".")== -1){
  $('#success').css('display','none');
  $('#error').slideDown('slow').css('display','block');
  $('#error').text("Email needs to contain ('@' and '.')");
  valid=false;
}
else if(radio === null){
  $('#success').css('display','none');
  $('#error').css('display','block');
  $('#error').text("Please choose a gender");
  valid=false;  
}
else {
  $('#error').css('display','none');
  $('#success').slideDown('slow').css('display','block');
  var radio = document.querySelector('input[name="gender"]:checked').value;
  valid=false;
  
}
}




var regTestSelect = document.getElementById('regtester');
regTestSelect.addEventListener('click', test)


function test(){

    var CASE_ALL_CORRECT = "correct";
    
    var CASE_UNAME_TOO_SHORT = "uname_short";
    
    var CASE_PWORD_MISMATCH = "pword_mismatch";
    var CASE_PWORD_TOO_SHORT = "pword_short";
    var CASE_PWD_NO_SPECIAL = "pword_schar";
    var CASE_PWD_NO_NUM = "pword_num";
    var CASE_PWD_NO_UPPER = "pword_up";
    var CASE_PWD_NO_LOWER = "pword_low"
    var CASE_PWD_UNAME = "pword_uname"
    
    var CASE_EMAIL_NOT_AT = "not_at";
    var CASE_EMAIL_NOT_DOT = "not_dot";
    var CASE_EMAIL_MISMATCH = "email_mismatch";
    
    var CASE_TOO_YOUNG = "too_young";
    var CASE_TOO_OLD = "too_old";
    
    var CASE_NO_GENDER = "no_gend";
  
    
    testCase = document.getElementById('regtester').value;
    
    
    // All possible inputs 
    
    // everything is correct
    if(testCase === CASE_ALL_CORRECT){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value= 31;
      document.getElementById('pword1').value="Isaquemartins@19";
      document.getElementById('pword2').value="Isaquemartins@19";
      document.getElementById('email1').value="brandao@bar.com";
      document.getElementById('email2').value="brandao@bar.com";
    }
    
    // username is too short (>5)
    else if (testCase === CASE_UNAME_TOO_SHORT){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Mor";
      document.getElementById('age').value = 31;
      document.getElementById('pword1').value = "Isaquemartins@19";
      document.getElementById('pword2').value = "Isaquemartins@19";
      document.getElementById('email1').value = "brandao@bar.com";
      document.getElementById('email2').value = "brandao@bar.com";
  
    }
    // Passwords dont match
    else if (testCase === CASE_PWORD_MISMATCH){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value = 31;
      document.getElementById('pword1').value = "Isaquemartins@19";
      document.getElementById('pword2').value = "Isaquemartin@19";
      document.getElementById('email1').value = "brandao@bar.com";
      document.getElementById('email2').value = "brandao@bar.com";
      
    }
    // password is too short (>4)
    // else if (testCase === CASE_PWORD_TOO_SHORT){
    //   document.getElementsByName('gender')[0].checked = true
    //   document.getElementById('username').value = "Morrisv";
    //   document.getElementById('age').value = 31;
    //   document.getElementById('pword1').value = "isa";
    //   document.getElementById('pword2').value = "isa";
    //   document.getElementById('email1').value = "brandao@bar.com";
    //   document.getElementById('email2').value = "brandao@bar.com";
    // 
    // }
    // password has no special character
    else if(testCase === CASE_PWD_NO_SPECIAL){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value= 31;
      document.getElementById('pword1').value="Isaquemartins19";
      document.getElementById('pword2').value="Isaquemartins19";
      document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
      document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
    }
    
    // password has no number
    else if(testCase === CASE_PWD_NO_NUM){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value= 31;
      document.getElementById('pword1').value="Isaquemartins@";
      document.getElementById('pword2').value="Isaquemartins@";
      document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
      document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
    }
    // password has no upper case letter
    else if(testCase === CASE_PWD_NO_UPPER){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value= 31;
      document.getElementById('pword1').value="isaquemartins@19";
      document.getElementById('pword2').value="isaquemartins@19";
      document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
      document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
    }
    // password has no lower case letter
    else if(testCase === CASE_PWD_NO_LOWER){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value= 31;
      document.getElementById('pword1').value="ISAQUEMARTINS@19";
      document.getElementById('pword2').value="ISAQUEMARTINS@19";
      document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
      document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
    }
    // password has username in it
    else if(testCase === CASE_PWD_UNAME){
      document.getElementsByName('gender')[0].checked = true
      document.getElementById('username').value = "Morrisv";
      document.getElementById('age').value= 31;
      document.getElementById('pword1').value="Morrisv@19";
      document.getElementById('pword2').value="Morrisv@19";
      document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
      document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
    }
    
    // no @ in the email
  else if(testCase === CASE_EMAIL_NOT_AT){
    document.getElementsByName('gender')[0].checked = true
    document.getElementById('username').value = "Morrisv";
    document.getElementById('age').value= 31;
    document.getElementById('pword1').value="Isaquemartins@19";
    document.getElementById('pword2').value="Isaquemartins@19";
    document.getElementById('email1').value="brandaobar.com";
    document.getElementById('email2').value="brandaobar.com";
  }
  // no dot in the email
  else if(testCase === CASE_EMAIL_NOT_DOT){
    document.getElementsByName('gender')[0].checked = true
    document.getElementById('username').value = "Morrisv";
    document.getElementById('age').value= 31;
    document.getElementById('pword1').value="Isaquemartins@19";
    document.getElementById('pword2').value="Isaquemartins@19";
    document.getElementById('email1').value="brandao@barcom";
    document.getElementById('email2').value="brandao@barcom";
  }
  // emails dont match 
  else if(testCase === CASE_EMAIL_MISMATCH){
    document.getElementsByName('gender')[0].checked = true
    document.getElementById('username').value = "Morrisv";
    document.getElementById('age').value= 31;
    document.getElementById('pword1').value="Isaquemartins@19";
    document.getElementById('pword2').value="Isaquemartins@19";
    document.getElementById('email1').value="brandao@bar.com";
    document.getElementById('email2').value="martins@bar.com";
  }
  // user is too young
  // else if(testCase === CASE_TOO_YOUNG){
  //   document.getElementsByName('gender')[0].checked = true
  //   document.getElementById('username').value = "Morrisv";
  //   document.getElementById('age').value= 2;
  //   document.getElementById('pword1').value="isaquemartins";
  //   document.getElementById('pword2').value="isaquemartins";
  //   document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
  //   document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
  // }
  // // user is too old
  // else if(testCase === CASE_TOO_OLD){
  //   document.getElementsByName('gender')[0].checked = true
  //   document.getElementById('username').value = "Morrisv";
  //   document.getElementById('age').value= 150;
  //   document.getElementById('pword1').value="isaquemartins";
  //   document.getElementById('pword2').value="isaquemartins";
  //   document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
  //   document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
  // }
  // unchosen gender option
  // else if(testCase === CASE_NO_GENDER){
  //   document.getElementsByName('gender')[0].checked = false
  //   document.getElementById('username').value = "Morrisv";
  //   document.getElementById('age').value= 31;
  //   document.getElementById('pword1').value="Isaquemartins@19";
  //   document.getElementById('pword2').value="Isaquemartins@19";
  //   document.getElementById('email1').value="brandao@bar.combrandao@bar.com";
  //   document.getElementById('email2').value="brandao@bar.combrandao@bar.com";
  // 
  // }
    
    
    
    
    
    // Proceeding
    else{
      console.log('no valid test case, testCase : '+ testCase);
    }
    console.log(testCase)
    validate();
  
  
}
// end of test()
