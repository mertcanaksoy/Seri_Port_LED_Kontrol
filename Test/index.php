<?php include 'header.php';?>

<div class="works-page main grid-wrap">

    <section class="grid col-three-quarters mq2-col-full">
        <div class="grid-wrap works">
        <form action="/index.php" method="get">
            <figure class="grid col-one-third mq1-col-one-half mq2-col-one-third mq3-col-full work_1">
            <p> &emsp; &emsp;LED 1</p>
                <a href=""> <img id="myImage1" src="/Test/Content/Templete/img/pic_bulboff.gif" alt=""></a>
                <figcaption>
                    <button id="myButton1" formaction="/Test/index/led1.php" onclick="changeImage1();changeButton1();" type="submit" style="width: 90px; height: 40px;" class="btn btn-primary"></button>                       
                </figcaption>
            </figure>
            <figure class="grid col-one-third mq1-col-one-half mq2-col-one-third mq3-col-full work_1">
            <p> &emsp; &emsp;LED 2</p>
                <a href=""> <img id="myImage2" src="/Test/Content/Templete/img/pic_bulboff.gif" alt=""></a>
                <figcaption>
                    <button id="myButton2" formaction="/Test/index/led2.php" onclick="changeImage2();changeButton2();" type="submit" style="width: 90px; height: 40px;" class="btn btn-primary"></button>
                </figcaption>
            </figure>
            <figure class="grid col-one-third mq1-col-one-half mq2-col-one-third mq3-col-full work_1">
            <p> &emsp; &emsp;LED 3</p>
                <a href=""> <img id="myImage3" src="/Test/Content/Templete/img/pic_bulboff.gif" alt=""></a>
                <figcaption>
                    <button id="myButton3" formaction="/Test/index/led3.php" onclick="changeImage3();changeButton3();" type="submit" style="width: 90px; height: 40px;" class="btn btn-primary"></button>
                </figcaption>
            </figure>
            </form>
        </div>

        <!-- grid inside 3/4-->
    </section>
    <aside class="grid col-one-quarter mq2-col-full">
        <p>Butonlara tıklayarak ledlerin durumunu kontrol edebilirsiniz.</p>
    </aside>
</div>
<?php include 'footer.php'; ?>