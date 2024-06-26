function generate(){
    let carList =   [   {id: "audi-a3", name: "Audi A3 Sportback 30 TFSI",img: "img/audi_1.jpg", desc: "Petrol | Manual | 110BHP", price: 357.50, url: "audi-a3.php"},
                        {id: "audi-tt", name: "Audi TT Coupe 40 TFSI",img: "img/audi_2.jpg", desc: "Petrol | Auto | 197BHP", price: 373.58, url: "audi-tt.php"},
                        {id: "audi-a6", name: "Audi A6 Saloon 40 TDI",img: "img/audi_3.jpg", desc: "Diesel | Auto | 204BHP", price: 464.39, url: "audi-a6.php"},
                        {id: "hyundai-tucson", name: "Hyundai Tucson 1.6 TGDi 2WD",img: "img/hyundai_1.jpg", desc: "Petrol | Manual | 150BHP", price: 249.53, url: "hyundai-tucson.php"},
                        {id: "hyundai-kona", name: "Hyundai Kona 1.6 GDi Hybrid",img: "img/hyundai_2.jpg", desc: "Hybrid | Auto | 141BHP", price: 305.24, url: "hyundai-kona.php"},
                        {id: "hyundai-i20", name: "Hyundai i20 1.0 T GDI MHD",img: "img/hyundai_3.jpg", desc: "Petrol | Manual | 120BHP", price: 208.74, url: "hyundai-i20.php"},
                        {id: "nissan-micra", name: "Nissan Micra 1.0 IG-T",img: "img/nissan_1.jpg", desc: "Petrol | Manual | 92BHP", price: 183.77, url: "nissan-micra.php"},
                        {id: "nissan-navara", name: "Nissan Navara 2.3 King Cab Pick Up Acenta dCi 163 TT",img: "img/nissan_2.jpg", desc: "Diesel | Manual | 190BHP", price: 361.12, url: "nissan-navara.php"},
                        {id: "nissan-leaf", name: "Nissan Leaf Acenta 39kWh 110kW", img: "img/nissan_3.jpg", desc: "Electric | Auto | 150BHP", price: 260.82, url: "nissan-leaf.php"}
                    ];

    for (let x in carList) {
        document.write(`<a class="card" id=${carList[x].id} href="${carList[x].url}">
                            <img src=${carList[x].img} alt="">
                            <div class="details">
                                <h3>${carList[x].name}</h3>
                                <p>${carList[x].desc}</p>
                                <div class="price">
                                    <h4>Starting At: </h4>
                                    <h4>£${carList[x].price}/month<sup>*including VAT</sup></h4>
                                </div>
                            </div>
                        </a>`)
    }

    // document.write(`<p>${carList[0].name}</p>`);
}


