<footer>
    <table>
        <tr>
            <td class="hd">Giới thiệu</td>
            <td class="hd">Điều khoản</td>
            <td class="hd"><img src="../view/img/dienthoai.png">Đặt hàng: 1800 6936</td>
        </tr>
        <tr>
            <td>Về chúng tôi</td>
            <td>Điều khoản sử dụng</td>
            <td class="hd" colspan="2"><img src="../view/img/email.png">Liên hệ</td>
        </tr>
        <tr>
            <td>Sản phẩm</td>
            <td>Quy tắc bảo mật</td>
            <td>Tầng 3-4 Hub Building
                Q.Bình Thạnh, TP.Hồ Chí Minh</td>
        </tr>
        <tr>
            <td>Khuyến mãi</td>
            <td>Chính sách</td>
            <td>195/10E Điện Biên Phủ, P.15 ,</td>
        </tr>
        <tr>
            <td>Tin tức</td>
            <td></td>
            <td>Q.Bình Thạnh, TP.Hồ Chí Minh</td>
        </tr>
        <tr>
            <td>Cửa hàng</td>
        </tr>
        <tr>
            <td>Liên hệ</td>
        </tr>
        <!-- <tr>
            <td colspan="4"><div class="maps">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=15OEDqG2herN9fyLjjI1P8xorc8Jaqwvy&ehbc=2E312F" 
            width="340" height="360"></iframe>
            </div></td>
        </tr> -->
    </table>
    <!-- JS cho slideshow -->
    <script>
     let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    </footer>