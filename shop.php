<div class="container">
    <script>
        var product = [];
        var total_price = 0;
        var subT_id = [];
        var subPrice_id = [];
        
        var num = 0;

        var docs = ($ele)=>{
            return document.getElementById($ele);
        }
        var cEle = ($ele)=>{
            return document.createElement($ele);
        }
        var cText = ($ele) => {
            return document.createTextNode($ele);
        };
        var add = (id,name,price) =>{      
            docs('shop_add').innerHTML = ''; 
            docs('shop_add_total').innerHTML = '';
            subT_id.push(id);
            total_price = parseInt(total_price) + parseInt(price);
            product.push({
                'id' : id,
                'name':name,
                'price': price
            });
                
            for(var n = 0 ; n < product.length; n++){
                let divv = cEle('div');
                divv.id = 'shopProduct';
                let parr = cEle('p');
                let txt = cText('id : ' + product[n].id );
                let parr2 = cEle('p');
                let txt2 = cText('name : ' + product[n].name );
                let parr3 = cEle('p');
                let txt3 = cText('price : ' + product[n].price );
                parr.appendChild(txt);
                parr2.appendChild(txt2);
                parr3.appendChild(txt3);
                let butt = cEle('button');
                butt.id = 'button_a';
                butt.type='submit';
                butt.onclick=()=>{
                    
                }
                let t = cText('ลบ');
                butt.appendChild(t);
                docs('shop_add').appendChild(parr);
                docs('shop_add').appendChild(parr2);
                docs('shop_add').appendChild(parr3);
                docs('shop_add').appendChild(butt);
                
            }

            let price_r = cEle('p');
            let text = cText('Total Price : ' + total_price );
            price_r.appendChild(text);
            docs('shop_add_total').appendChild(price_r);





           
        };
        var unadd = (id,price) =>{

            let sum = [];

            console.log('unadd : ' + sum  );
        };
        
    </script>
    <div clss='row'>
        <div class="col-12 col-md-4 col-sm-6 " id='manu_asdd'>

            <div id='shop_add'>
            </div>
            <div id='shop_add_total'>
                
            </div>
        </div>
    </div>
</div>