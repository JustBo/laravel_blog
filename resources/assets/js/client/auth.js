class Auth{

  constructor(){
    this.loginForm = $('#loginform');
    this.registerForm = $('#registerform');
    this.setSubmitEvents();
	}

  setSubmitEvents(){
    this.loginForm.on('submit', this.loginCallback);
    this.registerForm.on('submit', this.registerCallback);
  }

  loginCallback(e){
    e.preventDefault();
    axios.post('/login', {
      email: $('#email').val(),
      password: $('#password').val()
    })
    .then(function (response) {
      if( response.data.status == '200' ){
        window.location.reload();
      }else{
        var messages = response.data.message;
        var errorsArray = [];
        for( var prop in messages ){
          for( let msg in messages[prop]){
            errorsArray.push(messages[prop][msg]);
          }
        }
        $('.login-error').html(errorsArray.join('<br>'));
      }
    })
    .catch(function (error) {
      console.log(error);
    });
  }

  registerCallback(e){
    e.preventDefault();
    axios.post('/register', {
      name: $('#name').val(),
      email: $('#register').val(),
      password: $('#password-register').val(),
      password_confirmation: $('#password-confirm').val()
    })
    .then(function (response) {
      console.log(response);
      if( response.data.status == '200' ){
        window.location.reload();
      }else{
        var messages = response.data.message;
        var errorsArray = [];
        for( var prop in messages ){
          for( let msg in messages[prop]){
            errorsArray.push(messages[prop][msg]);
          }
        }
        $('.register-error').html(errorsArray.join('<br>'));
      }
    })
    .catch(function (error) {
      console.log(error);
    });
  }

}

var auth = new Auth();

export {auth};
