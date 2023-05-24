
let tabla = document.querySelector("#dataCampers");
let myForm = document.querySelector("#formCamper");

let plantilla = ` 
<tr>
    <td>Edgar Eduardo Mantilla </td>
    <td>Eclair</td>
    <td>$0.87</td>
</tr>
`;

tabla.innerHTML = plantilla;


//FETCH 
let myHeaders = new Headers({"Content-type": "application/json"});

let config ={
    headers: myHeaders
};

myForm.addEventListener("submit", async (e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    console.log(data);
    config.method = "POST";
    let res = await (await fetch("api.php", config)).text();
    console.log(JSON.parse(res));
})


