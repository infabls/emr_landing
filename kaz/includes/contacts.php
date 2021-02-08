  <div id="contact" class="section anchor">
    <div class="dark-wrapper">
      <div class="container inner">
        <div class="thin text-center">
          <h2 class="section-title text-center">СВЯЖИТЕСЬ С НАМИ!</h2>
          <p class="lead main text-center">НАПИШИТЕ ИЛИ ПОЗВОНИТЕ:</p>
         <!--  <p>Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.</p> -->
          <ul class="contact-info">
            <li><i class="icon-location"></i>100000, РК, Караганда, улица Алиханова, д. 1, 3 этаж, кабинет 314</li>
            <li><i class="icon-phone"></i><a href="tel:+77084396448">+7 708 439 64 48</a></li>
            <li><i class="icon-phone"></i><a href="tel:+77212794050">+7 (7212) 79 40 50</a></li>
            <li><i class="icon-mail"></i><a href="mailto:pr@qwmo.net@qwmo.net">pr@qwmo.net</a> </li>
          </ul>
          <div class="divide50"></div>
          <div class="form-container">
            <div class="response alert alert-success"></div>
            <form class="forms" action="contact/form-handler.php" method="post">
              <fieldset>
                <ol class="row">
                  <li class="form-row text-input-row name-field col-sm-6">
                    <input type="text" name="name" class="text-input defaultText required" title="Имя"/>
                  </li>
                  <li class="form-row text-input-row email-field col-sm-6">
                    <input type="text" name="email" class="text-input defaultText required email" title="Email"/>
                  </li>
                  <li class="form-row text-area-row col-sm-12">
                    <textarea name="message" class="text-area required" title="Ваше сообщение"></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="nocomment">
                    <label for="nocomment">Оставьте ваше сообщение</label>
                    <input id="nocomment" value="" name="nocomment" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Отправить сообщение" name="submit" class="btn btn-submit bm0" id="formbutton" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>
          </div>
          <!-- /.form-container -->
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>