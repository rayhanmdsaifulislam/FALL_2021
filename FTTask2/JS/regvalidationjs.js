const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const age = document.getElementById('age');
const rad = document.getElementById('rad');
const password = document.getElementById('password');
const email = document.getElementById('email');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) =>
{
let messages =[]
if (fname.value === '' || fname.value == null || lname.value === '' || fname.value == null) {
    messages.push('Name Must required')
}
if (password.value.length<=8)
{
    messages.push('Pass Must be 8 long')
}
if (email.value === '' || email.value == null || (email.value "@")!== false) {
    messages.push('Email is not valid')
})
