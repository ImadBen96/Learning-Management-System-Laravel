require('./bootstrap');

import Alpine from 'alpinejs';
import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import axios from "axios";
import videojs from 'video.js'
FilePond.registerPlugin(FilePondPluginFileValidateType,FilePondPluginFileValidateSize);
const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content")
const formData = new Map()
const input1 = document.getElementById("input1")
const input2 = document.getElementById("input2")

if ( input1 !== null){
    input1.addEventListener("change" ,function (e) {
        formData.set(e.target.name , e.target.value)
    })
}
if (typeof input2 != "undefined"){
    $("#input2").on("change", function (e) {
        formData.set(e.target.name , e.target.value)
    });
}

FilePond.setOptions({
    server: {
        process: {
            url: 'videos/store',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN':token ,
            },
            withCredentials: false,
            onload: (response) => {
                console.log(response)
                const cdn = "https://store-pjn.fra1.cdn.digitaloceanspaces.com/"
                const result = JSON.parse(response)
                console.log(result['msg'])
                if(result['msg'] === "done"){
                    console.log("this is done for the moment")
                    document.getElementById("submitVideo").removeAttribute("hidden")
                    const url = cdn + result['path']
                    document.getElementById("videoUrl").setAttribute("value" , url)
                    formData.set("videoUrl", url)
                }
            },
            onerror: (response) => {
                console.log(response)
            },

        },
    },
});
FilePond.create(
    document.querySelector('.filepond'), {
        acceptedFileTypes: ['video/mp4'],
        fileValidateTypeDetectType: (source, type) =>
            new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            }),
    }
);
const config = {
    headers:{
        'X-CSRF-TOKEN':token
    }
};


const sub = document.getElementById("submitVideo")
if ( sub !== null){
    sub.addEventListener("click" , function (e) {
        e.preventDefault();
        axios.post("videos/stock" ,Object.fromEntries(formData), config)
            .then(res=> {
                if (res.status === 200){
                    window.location.href = window.location.origin + '/dashboard/admin/videos'
                }
            })
            .catch(err=> console.log(err))
    })

}
document.addEventListener('FilePond:loaded', (e) => {
    if (document.querySelector(".filepond--credits") !== null){
        document.querySelector(".filepond--credits").innerText = ' Powred by AOBC'
    }

});
console.log("the videojs" , videojs)
var myVideo = videojs('my-video');

$(".vid").on("click" , function (e) {
    console.log(this)
    const url = $(this).attr("data-url")
    if (url !== null){
        myVideo.src({
            type : 'video/mp4',
            src : url
        })
        $('#modalDefault').modal({
            backdrop: 'static',
            keyboard: false
        })
    }

})
$("#closeModal").on("click" , function (e) {
    myVideo.pause()
    $('#modalDefault').modal("toggle")
})
