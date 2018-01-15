$(function(){
	 $.ajax({
          url: '../server/create_user.php',
			dataType: "json",
        cache: false,
        processData: false,
        contentType: false,          
          data: {},
          type: 'GET',
          success: (data) =>{
            if (data.msg=="OK") {
              var l = new Login();
            }else {
              alert(data.msg)
            }
          },
          error: function(){
            alert("error en la comunicación con el servidor");
          }
        })
  
  
})


class Login {
  constructor() {
    this.submitEvent()
  }

  submitEvent(){
    $('form').submit((event)=>{
      event.preventDefault()
      this.sendForm()
    })
  }

  sendForm(){
    var form_data = new FormData();
    var username = $('#user').val();
    var password =  $('#password').val();
    form_data.append('username', username)
    form_data.append('password', password)
    $.ajax({
      url: "../server/check_login.php",
      dataType: "json",
      cache: false,
      processData: false,
      contentType: false,
      data: form_data,
      type: 'POST', 
      success: function(php_response){
        if (php_response.msg == "OK") {
          window.location.href = 'main.html';
        }else {
          alert(php_response.msg);
        }
      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })
  }
}
