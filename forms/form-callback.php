<div class="callback" style="position: fixed;right: -210px;top: 160px;cursor: pointer;">
        <!-- Кнопка, вызывающее модальное окно -->
        <a href="#myModal" data-toggle="modal">
            <img src="../src/images/Animation_3.gif" alt="Заказать обратный звнок" data-toggle="tooltip" data-placement="left" title="Заказать обратный звонок" style="width: 75px;height: 75px;">
        </a>
        <!-- Модальное окно -->
    <form action="../script/callback.php" method="POST" id="callback" name="callbacks" class="form-show">
        <div id="myModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: rgba(71, 209, 209, 0.85);">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title m-auto">Заказать обратный звонок</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-group my-3">
                            <span class="input-group-addon" id="basic-addon1">+38</span>
                            <input type="tel" class="form-control" id="callback" aria-describedby="basic-addon1" name="callback" aria-describedby="callback" placeholder="Введите ваш номер телефона" required autofocus maxlength="10" minlength="10" pattern="\d+">
                        </div>
                        <label for="phone">Оператор вам перезвонит в течении 10 минут</label>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>