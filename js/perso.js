const psw =  document.getElementById('psw')
const psw2 = document.getElementById('psw2')

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('sucess');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('sucess');
    inputControl.classList.remove('error');
}

const validateInputs = () => {
    const pswValue = psw.value.trim();
    const psw2Value = psw2.value.trim();

    if(pswValue === ''){
        setError(psw, 'Password is required' );
    }
    else if(pswValue.length < 8){
        setError(psw, 'Password must be least 8 character');
    }
    else{
        setSuccess(psw);
    }

    if(psw2Value === ''){
        setError(psw2, 'Confirm tour Password' );
    }
    else if(pswValue !== psw2Value){
        setError(psw2, "Password doesn't match");
    }
    else{
        setSuccess(psw2);
    }


};