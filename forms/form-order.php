<div id="home" class="container">
<div class="d-flex pt-3 row">
    <div class="col-xs-12 col-sm-12 col-md-6 d-flex justify-content-center pb-4">
        <div class="card card-restavrator">
            <img class="card-img-top" src="../src/images/material/restavraciya-vann-nalivnoy-akril.jpg" alt="Наливная ванна(жидкий акрил)">
            <div class="card-block">
                <h5 class="card-title">Реставрация наливным акрилом</h5>
                <p class="card-text p-2" style="opacity: 0.8;border: 1px solid green;">
                    <span> - отсутствие запаха;</span><br>
                    <span> - ударопрочность;</span><br>
                    <span> - большой срок службы;</span>
                </p>
                <p class="card-text p-2" style="opacity: 0.8;border: 1px solid red;">
                    <span> - повторяет неровности заводского литья;</span>
                </p>
                <a href="#naliv" class="btn btn-primary col-12">Подробнее...</a>
<!--                <button class="btn btn-success float-right">Заказать</button>-->
            </div>
        </div>
        <div class="card card-restavrator-order" style="display: none;">
            <!--Форма для заказа реставрации ванны-->
            <div class="">
                <form action="../script/mail.php" method="POST" class="form-show" id="form-restavrator">
                    <h6 class="h6 text-center text-uppercase">Форма для заказа реставрации методом (жидкий налив)</h6>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон<span class="text-danger">*</span> (обязательно)</label>
                        <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Введите телефон" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Город<span class="text-danger">*</span> (желательно)</label>
                        <input type="text" class="form-control" id="city" name="city" aria-describedby="city" placeholder="Введите ваш город" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" id="email" name="email" aria-describedby="email" placeholder="Введите свою почту">
                    </div>
                    <div class="form-group">
                        <label for="information">Дополнительная информация</label>
                        <textarea class="form-control" id="quession" name="information" rows="2" placeholder="Ваши пожелания и предпочтения!"></textarea>
                    </div>
                    <span class="btn btn-info btn-outline-secondary btn-back">Назад</span>
                    <button type="submit" class="btn bg-success text-white col-8 float-right">Оставить заявку</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 d-flex justify-content-center pb-4">
        <div class="card card-restavrator" style="display: none;">
            <img class="card-img-top" src="../src/images/material/restavraciya-vann-nalivnoy-akril.jpg" alt="Наливная ванна(жидкий акрил)">
            <div class="card-block">
                <h5 class="card-title">Реставрация наливным акрилом</h5>
                <p class="card-text p-2" style="opacity: 0.8;border: 1px solid green;">
                    <span> - отсутствие запаха;</span><br>
                    <span> - ударопрочность;</span><br>
                    <span> - большой срок службы;</span>
                </p>
                <p class="card-text p-2" style="opacity: 0.8;border: 1px solid red;">
                    <span> - повторяет неровности заводского литья;</span>
                </p>
                <a href="#naliv" class="btn btn-primary">Подробнее...</a>
                <button class="btn btn-success float-right">Заказать</button>
            </div>
        </div>
        <div class="card card-restavrator-order">
            <!--Форма для заказа реставрации ванны-->
            <div class="">
                <form action="../script/mail.php" method="POST" class="form-show" id="form-restavrator">
                    <h6 class="h6 text-center text-uppercase">Форма для заказа реставрации методом (жидкий налив)</h6>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон<span class="text-danger">*</span> (обязательно)</label>
                        <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Введите телефон" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Город<span class="text-danger">*</span> (желательно)</label>
                        <input type="text" class="form-control" id="city" name="city" aria-describedby="city" placeholder="Введите ваш город">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" id="email" name="email" aria-describedby="email" placeholder="Введите свою почту">
                    </div>
                    <div class="form-group">
                        <label for="information">Дополнительная информация</label>
                        <textarea class="form-control" id="quession" name="information" rows="2" placeholder="Ваши пожелания и предпочтения!"></textarea>
                    </div>
                    <button type="submit" class="btn bg-danger text-white col-12 float-right">Оставить заявку</button>
                </form>
            </div>
        </div>
    </div>

<!--    <div class="col-xs-12 col-sm-12 col-md-6 d-flex justify-content-center pb-4">-->
<!--        <div class="card card-vanna-v-vanna">-->
<!--            <img class="card-img-top" src="../src/images/material/nakleivanie-akrilovogo-vkladysha.jpg" alt="Ванна в ванну(вкладыш)">-->
<!--            <div class="card-block">-->
<!--                <h5 class="card-title">Акриловый вкладыш (вставка)</h5>-->
<!--                <p class="card-text p-2" style="opacity: 0.8;border: 1px solid green;">-->
<!--                    <span> - быстрая установка;</span><br>-->
<!--                    <span> - красивый вид;</span><br>-->
<!--                    <span> - держит высокую температуру;</span>-->
<!--                </p>-->
<!--                <p class="card-text p-2" style="opacity: 0.8;border: 1px solid red;">-->
<!--                    <span> - не для все ванн подходит;</span><br>-->
<!--                    <span> - ограниченный выбор цвета;</span>-->
<!--                </p>-->
<!--                <a href="#vklad" class="btn btn-primary">Подробнее...</a>-->
<!--                <button class="btn btn-success float-right">Заказать</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card card-vanna-v-vanna-order" style="display: none;">-->
<!--            <!--Форма для заказа реставрации ванны-->
<!--            <div class="">-->
<!--                <form action="../script/mail.php" method="POST" class="form-show" id="form-vanna">-->
<!--                    <h6 class="h6 text-center text-uppercase">Форма для реставрации ванны (ванна в ванну)</h6>-->
<!--                    <div class="form-group">-->
<!--                        <label for="name">Имя</label>-->
<!--                        <input type="text" class="form-control" id="names" name="name" aria-describedby="name" placeholder="Введите имя">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="phone">Телефон<span class="text-danger">*</span> (обязательно)</label>-->
<!--                        <input type="tel" class="form-control" id="phones" name="phone" aria-describedby="phone" placeholder="Введите телефон" required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="citys">Город<span class="text-danger">*</span> (желательно)</label>-->
<!--                        <input type="text" class="form-control" id="citys" name="city" aria-describedby="citys" placeholder="Введите ваш город" required>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="email">E-mail</label>-->
<!--                        <input class="form-control" id="emails" name="email" aria-describedby="email" placeholder="Введите свою почту">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="information">Дополнительная информация</label>-->
<!--                        <textarea class="form-control" id="quessions" name="information" rows="2" placeholder="Ваши пожелания и предпочтения!"></textarea>-->
<!--                    </div>-->
<!--                    <span class="btn btn-info btn-outline-secondary btn-vanna-back">Назад</span>-->
<!--                    <button type="submit" class="btn bg-success text-white col-8 float-right">Оставить заявку</button>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
</div>