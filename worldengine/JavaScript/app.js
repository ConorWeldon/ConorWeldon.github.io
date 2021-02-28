alert("JavaScript file connected");
const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value === null) {
        messages.push("name is required")
    }
    
    if (Password.value.length <= 6) {
        messages.push('Password must be longer than 6 charachters')
    }
    
    if (Password.value === password) {
        messages.push('Password cannot be password')
    }
    
    if (Password.value.length >= 20) {
        messages.push('Password must be shorter than 20 charachters')
    }
    
    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})  