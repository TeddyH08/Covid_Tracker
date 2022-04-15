var myForm = document.getElementById('myForm');

myForm.addEventListener('submit', function(e){
    e.preventDefault()

    var country = document.getElementById('country').value;
    var url = "https://api.covid19api.com/total/dayone/country/"+country;

    fetch(url).then((res) => res.json()).then((res) => {
        console.log(res)

        var length = res.length;
        var index = length - 1;
        var cas = document.getElementById('cas')
        var morts = document.getElementById('morts')

        cas.innerHTML = "";
        morts.innerHTML = "";

        cas.append("Nombre de Cas : "+res[index].Confirmed)
        morts.append("Nombre de Morts : "+res[index].Deaths)
    })
})

