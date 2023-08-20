firebase.auth().onAuthStateChanged((user)=>{
    if(!user){
        location.replace("index.html")
    }else{
        document.getElementById("user").innerHTML = "You have already logged in, "+user.email
    }
})


function logout(){
    firebase.auth().signOut()
}
