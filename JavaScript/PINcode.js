function validatePIN (pin) {
  const num=String(pin);
  const regex =/^\d{4}$|^\d{6}$/;
return regex.test(num);  
}

  