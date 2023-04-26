
var buy = document.querySelector('.product-content-right-producct-button ')
console.log(buy);
buy.addEventListener('click', function(){
    alert('Đã thêm vào giỏ hàng');
})
// Product
const bigimg= document.querySelector('.product-content-left-big-img img')
const smallimg= document.querySelectorAll('.product-content-left-small-img img')
smallimg.forEach(function(imgItem,X){
    imgItem.addEventListener('click',function(){
        bigimg.src = imgItem.src
    })
})

const baoquan = document.querySelector('.baoquan')
const chitiet= document.querySelector('.chitiet')
if(baoquan){
    baoquan.addEventListener('click' ,function(){
document.querySelector('.product-content-right-bottom-content-chitiet').style.display = 'none'
document.querySelector('.product-content-right-bottom-content-baoquan').style.display = 'block'
    })
}
if(chitiet){
    chitiet.addEventListener('click' ,function(){
document.querySelector('.product-content-right-bottom-content-baoquan').style.display = 'none'
document.querySelector('.product-content-right-bottom-content-chitiet').style.display = 'block'

    })
}
const button = document.querySelector('.product-content-right-bottom-top')
if(button){
    button.addEventListener('click',function(){
        document.querySelector('.product-content-right-bottom-content-big').classList.toggle('active')
    })
}
const menu =document.querySelector('.navbar-toggler')
if(menu){
    menu.addEventListener('click',function(){
document.querySelector('.menu').style.display = 'block'
    })
}