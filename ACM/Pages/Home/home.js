const nav = document.querySelector('.nvbr');
fetch('../../Components/Navbar/navbar.html')
.then(res=>res.text())
.then(data=>{
    nav.innerHTML = data
});