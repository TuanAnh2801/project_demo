$(document).ready(function () {
    $('.product-content-right-producct-button').click(function () {
        var product_id = $(this).attr('data-id');
        var mount = document.getElementById('mount').value;
        var size  = document.getElementById('size').value;

        $.ajax({
            url: 'index.php?controller=cart&action=add',
            method: 'get',
            data: {
                product_id: product_id,
                mount: mount,
                size: size,

            },
            success: function (data) {
                $('.notification').html('Thêm vào giỏ hàng thành công');
                $('.notification').addClass('notification-active');
                setTimeout(function () {
                    $('.notification').removeClass('notification-active');
                }, 3000)
                var amount = $('.cart-amount').text();
                amount++;
                $('.cart-amount').text(amount);
            }
        })
    })

})

// $(document).ready(function () {
//     $('.bnt-buy').click(function () {
//         $.ajax({
//             url: 'index.php?controller=detail&action=detail',
//
//
//         })
//     })
//
// })


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
// Hàm gửi yêu cầu Ajax đến check_session.php
function checkSession() {
    $.ajax({
        url: 'index.php', // Đường dẫn đến file check_session.php
        type: 'POST', // Phương thức POST
        success: function(response) {
            if (response === 'no_user') {
                console.log('Không có người dùng đăng nhập');
            } else {
                console.log('Người dùng đăng nhập với tên là: ' + response);
            }
        },
        error: function() {
            console.log('Lỗi trong quá trình kiểm tra session');
        }
    });
}

// Gọi hàm kiểm tra session
checkSession();


var span1 = document.getElementById('login');
var span2 = document.getElementById('user');
var a=  sessionStorage.getItem('user');
console.log(a);



if (a == 'true')
{

        span1.style.display = 'none';
        span2.style.display = 'block';
    }
else {
        span1.style.display = 'block';
        span2.style.display = 'none';

}

