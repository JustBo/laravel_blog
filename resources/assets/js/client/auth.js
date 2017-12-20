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
    console.log(axios);
    var instance = axios.create({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    instance.post('/login', {
      email: $('#email').val(),
      password: $('#password').val()
    })
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
  }

  registerCallback(e){
    e.preventDefault();
    console.log(e);
  }

}

var auth = new Auth();

export {auth};
