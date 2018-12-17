/* 
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */
$(document).ready(function() {  
  
       //when button is clicked  
        $('#submit').click(function(){  
                check_availability();  
             
        });  
  
  }); 
  
function check_availability(){  
  
        //get the username  
        var username = $('#username').val();  
  
        //use ajax to run the check  
        $.post("addUser.php", { username: username },  
            function(result){  
                //if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    $('#username_availability_result').html(username + 'already exist..! ');  
                }else{  
                    //show that the username is NOT available  
                    $('#username_availability_result').html(username + 'Doesnt not exist');  
                }  
        });  
  
}  

