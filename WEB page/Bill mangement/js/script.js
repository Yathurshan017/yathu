const   Name = document.getElementById('Name')
const Phone= document.getElementById('phone')
const form= document.getElementById('form')
const error Element= document.getElementById('error')
 
form.addEventListener('submit',(e) = > {
	let messages = []
	if ( name .value === '' || name.value == null){
		messages.push ('Name is required')
	
	}
	
	if ( phone.value.length <=6){
		messages.push ('phone must be longer than 6 charecters')
	}
	
    if ( phone.value.length >= 10){
		messages.push ('phone must be less than 10 charecters')
		
 }	
		
	if (messages.length > 0  )	{
		e.preventDefault()
	errorElement.innerText=messages.join (',')
	}
	}
		
		
		
 })