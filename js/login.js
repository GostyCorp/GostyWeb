function login()
{
    let password = document.getElementById("pass").value;
    console.log(password)
    let truePass = "0272244f1126f771653da4926ccfb7798d77aebda6020c65aafe9037e5e16ff2";
    console.log(truePass)
    if (sha256(password) != truePass)
    {
        document.getElementsByClassName('bk')[0].style.display="none";
    }
    else
    {
        document.getElementsByClassName('bk')[0].style.display="block";
    }
}