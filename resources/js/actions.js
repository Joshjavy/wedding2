import axios from "axios";
import Swal from "sweetalert2";
const csr_token = document.querySelector("meta[name='csrf-token']").getAttribute("content")
const url = document.querySelector("form[name='register']").getAttribute('action')

const procesar = document.querySelector("#procesar");


console.log(url);

procesar.addEventListener("click", (e) => {
    e.preventDefault()
    register();
});

const register = () => {
    const formData = new FormData();
    const Firstname= document.querySelector("input[name='Firstname']")
    const RSVPu = document.querySelector("#RSVPu")
    const RSVPd = document.querySelector("#RSVPd")
    const RSVPt = document.querySelector("#RSVPt")
    const RSVPc = document.querySelector("#RSVPc")
    const phone = document.querySelector("input[name='phone']")
    const allergies = document.querySelector("input[name='allergies']")
    const rtransport = document.querySelector("#rtransport")
    const dance = document.querySelector("input[name='dance']")
    
    formData.append('_token', csr_token) 
    formData.append('Firstname', Firstname.value) 
    formData.append('RSVPu',RSVPu.value)
    formData.append('RSVPd',RSVPd.value)
    formData.append('RSVPt',RSVPt.value)
    formData.append('RSVPc',RSVPc.value)
    formData.append('phone', phone.value) 
    formData.append('allergies', allergies.value) 
    formData.append('rtransport', rtransport.options[rtransport.selectedIndex].text) 
    formData.append('dance', dance.value) 
    console.log(formData)
    
    axios
        .post(`${url}`,formData)
        .then(function (response) {
            const sms=`<p>
                Thank you for letting us know<br/>
                that you are coming.
            </p><br/>
            <p>
                We can't wait to celebrate<br/>
                whin you!
            </p>`
            message(sms)
            document.querySelector("form[name='register']").reset()
        })
        .catch(function (error) {
            // handle error
            message(error.response.data.message)
        })
        .finally(function () {
            // always executed
        });
};

const message=(sms)=>{
    Swal.fire({
        title: "",
        type: "",
        html: `
          <div class=" text-center	pt-20">
            ${sms}
            
          </div>
          <div class="flex justify-center pt-7"><img src="imgs/elementos/Detalle-anni.png" class="w-1/4	"/></div>
          `,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: true,
        confirmButtonText: "Ok",
        confirmButtonColor: "#95977F",
    });
}