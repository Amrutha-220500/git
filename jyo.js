var studentName;
var email;
var mobile;
var course;
var income;
var category;
function registerStudent(){
    studentName = document.querySelector('input[placeholder="Enter full name"]').value;
    email = document.querySelector('input[placeholder="Enter email"]').value;
    mobile = document.querySelector('input[placeholder="Enter mobile number"]').value;
    course = document.querySelector('input[placeholder="Enter course name"]').value;
    income = document.querySelector('input[placeholder="Enter family income"]').value;
    category = document.querySelector('select').value;
    if(studentName===""|| email===""||mobile===""||course===""||income===""||category==="select"){
        alert("please fill all boxes");
        return false;

    }
    let confirmSubmit=confirm("Do you want to submit the registration? ");
    if(confirmSubmit){
        alert("Registration successfull!\nWelcome "  +studentName);

        return true;
    

    }
    else{
        alert("registration cancelled")
        return false;
    }

}
