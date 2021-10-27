firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/firebase.User
      var uid = user.uid;
      window.location.replace("index.html");
      // ...
    } else {
      // User is signed out
      // ...
      alert("Invalid Credentials");
    }
  });


function login(){
    var email = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    //alert("Welcome");
    firebase.auth().createUserWithEmailAndPassword(email, password)
    .then((userCredential) => {
        // Signed in 
        var user = userCredential.user;
        // ...
    })
    /*.catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;
        // ..
    });*/
}