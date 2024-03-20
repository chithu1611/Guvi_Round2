

document.addEventListener('DOMContentLoaded', function() {
    var userDataJSON = localStorage.getItem('userEmail');
    
    var user = JSON.parse(userDataJSON);
    
    if (user){
        document.getElementById('name').innerText = user.Name;
        document.getElementById('dob').innerText = user.DOB;
        document.getElementById('email').innerText = user.Email;
        document.getElementById('phone').innerText = user['Phone Number'];
    } else {
        console.error("No user data found in local storage.");
    }
});
