<style>
body{
    background-color: bisque;
    text-align:center;
    color:crimson;
    border-radius: 8px;
    border:3px black;
}
.error {
    border: 3px solid red;
  }
</style>
<?php
if (!empty($messages)) {
  print('<div id="messages">');
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}
?>
<body>
    <div class="main">
    <h1>Форма</h1>
    
    <form action="index.php" method="POST">
            <div class="pas <?php if ($errors['name']) {print 'error';} ?>" >
                Имя:
                <input name="name" placeholder="Ваше имя" 
                 value="<?php print $values['name']; ?>" />
            </div>

            <div class="pas <?php if ($errors['email']) {print 'error';} ?>">
                E-mail:
                <input name="email" type="email" placeholder="Ваша почта" value="<?php print $values['email']; ?>"
             >
            </div>

            <div class="pas" >
                Год рождения:
                <select id="yearB" name="year" >
                <?php
             for($i=1950;$i<=2023;$i++){
             if($values['year']==$i){
             printf("<option value=%d selected>%d </option>",$i,$i);
              }
             else{
             printf("<option value=%d>%d </option>",$i,$i);
            }
          }
          ?>
          </select>
            </div>

            <div class="pas <?php if ($errors['radio-1']) {print 'error';} ?>"> 
                Пол:
                <input type="radio" name="radio-1" value="male"  <?php if($values['radio-1']=="male") {print 'checked';} ?>/>
                М
                <input type="radio" name="radio-1" value="female" <?php if($values['radio-1']=="female") {print 'checked';} ?>/>
                Ж
            </div>



            <div class="pas <?php if ($errors['radio-2']) {print 'error';} ?>">
                Сколько конечностей?
                    <input type="radio" name="radio-2" value="4" <?php if($values['radio-2']=="4") {print 'checked';} ?>/>
                    4

                    <input type="radio" name="radio-2" value="3" <?php if($values['radio-2']=="3") {print 'checked';} ?>/>
                    3

                    <input type="radio" name="radio-2" value="2" <?php if($values['radio-2']=="2") {print 'checked';} ?>/>
                    2

                    <input type="radio" name="radio-2" value="1" <?php if($values['radio-2']=="1") {print 'checked';} ?>/>
                    1
            </div>


            <div class="pas <?php if ($errors['super']) {print 'error';} ?>">
                Сверхспособности?
                
                    <select name="super[]" multiple="multiple">
                    <?php if ($errors['super']) {print 'class="error"';} ?> >
                    <option value="inv" <?php if($values['inv']==1){print 'selected';} ?>>Бессмертие</option>
                    <option value="walk" <?php if($values['walk']==1){print 'selected';} ?>>прохождение сквозь стены</option>
                    <option value="fly" <?php if($values['fly']==1){print 'selected';} ?>>левитация</option>
                    </select>
                
            </div>

            <div class="pas <?php if ($errors['bio']) {print 'error';} ?>">
                Немного информации о Вас
                <textarea name="bio"><?php print $values['bio']; ?></textarea>
            </div>

            <div class="pas <?php if ($errors['check-1']) {print 'error';} ?> ">
                <input type="checkbox" name="check-1" <?php if($values['check-1']==TRUE){print 'checked';} ?>/> Пункт соглашения
            </div>


            <p>
                Отправка формы:
                <input type="submit" value="Send" />
            </p>
        </form>
    </div>
</body>