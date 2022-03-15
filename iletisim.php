<!DOCTYPE html>
<html lang="tr">

<?php include "head.php"; ?>






<body>





    <?php include "header.php"; ?>



    <div class="cloud">
        <img src="img/cloud.png" alt="">

    </div>
    <div class="cloud2">
        <img src="img/cloud.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="row iletisim-row">
                    <div class="col-md-12">
                        <div class="inner">
                            <img src="img/image-1.png" alt="" class="image-1  wow fadeInDown" data-wow-delay="0.5s">
                                <form method="post" action="iletisimgonder.php" class="iletisim  wow fadeInDown " data-wow-delay="0.75s">
                                    <h3>Bizimle İletişime Geçin</h3>
                                    <div class="form-holder">
                                        <span class="lnr lnr-user"></span>
                                        <input type="text" class="form-control" name="adsoyad" placeholder="İsim Soyisim*" required>
                                    </div>
                                    <div class="form-holder">
                                        <span class="lnr lnr-phone-handset"></span>
                                        <input type="text" class="form-control" name="tel" placeholder="Telefon">
                                    </div>
                                    <div class="form-holder">
                                        <span class="lnr lnr-envelope"></span>
                                        <input type="text" class="form-control" name="email" placeholder="E-mail*" required>
                                    </div>
    
                                    <div class="form-holder">
                                        <span class="lnr lnr-lock"></span>
                                        <textarea type="text" class="form-control" name="mesaj" placeholder="Mesajınız*" rows="5" required></textarea>
    
                                    </div>
                                    <button class="btn kirmizi-btn" type="submit">
                                        GÖNDER
                                    </button>
                                </form>
                            <img src="img/image-2.png" alt="" class="image-2 wow fadeInDown" data-wow-delay="1s">
                        </div>

                    </div>

                </div>
            </div>



            <div class="col-md-3"></div>

        </div>

    </div>
    </div>





    <?php include "footer.php"; ?>

</body>

</html>